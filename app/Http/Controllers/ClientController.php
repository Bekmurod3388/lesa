<?php

namespace App\Http\Controllers;

use App\Http\Requests\Clients\StoreRequest;
use App\Http\Requests\Clients\UpdateRequest;
use App\Models\Client;
use App\Models\Rent;
use App\Models\Service;
use App\Services\RentService;

class ClientController extends Controller
{
    public function __construct(protected RentService $rentService)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::whereHas('rents', function ($query) {
            $query->where('status', Rent::STATUS_ACTIVE)
                ->orderBy('created_at', 'desc');
        })->with(['rents' => function ($query) {
            $query->where('status', Rent::STATUS_ACTIVE)
                ->orderBy('created_at', 'desc');
        }])->paginate(10);
        $services = Service::all();
        return view('clients.index',['clients'=>$clients, 'services'=>$services]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        $client = Client::query()->create($request->validated());
        $res = $this->rentService->create($request->all(),$client);
        return back()->with($res['key'],$res['message']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Client $client)
    {
        $client->update($request->validated());

        return back()->with('success', 'Mijoz muvaffaqiyatli yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index');
    }


    public function rents(Client $client){
        $rents = Rent::query()->where('client_id',$client->id)
            ->where('status',Rent::STATUS_ACTIVE)->get();
        return view('clients.rents.index',['rents'=>$rents]);
    }
}
