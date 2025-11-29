<?php

namespace App\Http\Controllers;

use App\Http\Requests\Services\StoreRequest;
use App\Http\Requests\Services\UpdateRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Service::query()
            ->where('service_owner_id', auth()->id()) // only services of current owner
            ->latest();

        // Search by name
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Filter by status (active / inactive)
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by deleted
        if ($request->filter === 'deleted') {
            $query->onlyTrashed();
        } elseif ($request->filter === 'with-deleted') {
            $query->withTrashed();
        }

        $services = $query->paginate(10);

        return view('services.index', compact('services'));
    }    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // Merge owner id
        $data = $request->validated();
        $data['service_owner_id'] = Auth::id();

        Service::create($data);

        return redirect()->route('services.index')
                         ->with('success', 'Servis muvaffaqiyatli yaratildi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        $this->authorizeOwner($service);
        return view('services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        $this->authorizeOwner($service);
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Service $service)
    {
        $this->authorizeOwner($service);

        $service->update($request->validated());

        return redirect()->route('services.index')
                         ->with('success', 'Servis muvaffaqiyatli yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     */

     // Soft delete
    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('success', 'Xizmat muvaffaqiyatli o‘chirildi!');
    }

    // Restore
    public function restore($id)
    {
        $service = Service::withTrashed()->findOrFail($id);
        $service->restore();
        return back()->with('success', 'Xizmat tiklandi!');
    }

    // Permanent delete
    public function forceDelete($id)
    {
        $service = Service::withTrashed()->findOrFail($id);
        $service->forceDelete();
        return back()->with('success', 'Xizmat butunlay o‘chirildi!');
    }

    /**
     * Ensure the current user is the owner of the service
     */
    protected function authorizeOwner(Service $service)
    {
        if ($service->service_owner_id !== Auth::id()) {
            abort(403, 'You do not have permission to access this service.');
        }
    }

    
}
