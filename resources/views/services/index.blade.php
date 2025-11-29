@extends('layouts.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    @include('alerts.success-alert')
    @include('alerts.error-alert')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center flex-column flex-sm-row">
            <!-- Search & Filters -->
            <form method="GET" action="{{ route('services.index') }}" class="d-flex align-items-center mb-2 mb-sm-0 me-sm-2">
                <input type="text" class="form-control me-2" placeholder="Izlash" name="search" value="{{ request('search') }}">

                <select name="status" class="form-select me-2">
                    <option value="">Barchasi</option>
                    <option value="active" {{ request('status')=='active' ? 'selected' : '' }}>Faol</option>
                    <option value="inactive" {{ request('status')=='inactive' ? 'selected' : '' }}>Nofaol</option>
                </select>

                <select name="filter" class="form-select me-2">
                    <option value="">Normal</option>
                    <option value="with-deleted" {{ request('filter')=='with-deleted' ? 'selected' : '' }}>O‘chirilganlarni ko‘rsat</option>
                    <option value="deleted" {{ request('filter')=='deleted' ? 'selected' : '' }}>Faqat o‘chirilganlar</option>
                </select>

                <button class="btn btn-primary me-2" type="submit">
                    <i class="bx bx-search"></i> Qidirish
                </button>
            </form>

            <!-- Create button (modal included below) -->
            @include('services.create')
        </div>

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nomi</th>
                    <th>Tavsif</th>
                    <th>Narxi</th>
                    <th>O‘lchov</th>
                    <th>Soni</th>
                    <th>Status</th>
                    <th>Egasi</th>
                    <th>Amallar</th>
                </tr>
                </thead>
                <tbody>
                @forelse($services as $service)
                    <tr @if(method_exists($service, 'trashed') && $service->trashed()) class="table-danger" @endif>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->description ?? '-' }}</td>
                        <td>{{ $service->cost }}</td>
                        <td>{{ $service->unit ? ucfirst($service->unit) : '-' }}</td>
                        <td class="{{ $service->count == 0 ? 'text-danger' : '' }}">
                            {{ $service->count }}
                        </td>
                        <td>
                            @if($service->status === 'active')
                                <span class="badge bg-success">Faol</span>
                            @else
                                <span class="badge bg-secondary">Nofaol</span>
                            @endif
                        </td>
                        <td>{{ optional($service->owner)->name ?? '-' }}</td>
                        <td>
                            <div class="d-flex">
                                @if(!(method_exists($service, 'trashed') && $service->trashed()))
                                    @include('services.edit')  {{-- expects $service --}}
                                    @include('services.delete') {{-- expects $service --}}
                                @else
                                    {{-- show restore / permanent delete actions if you want --}}
                                    <form action="{{ route('services.restore', $service->id) }}" method="POST" class="me-2">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-sm btn-success">
                                            <i class="bx bx-undo"></i> Tiklash
                                        </button>
                                    </form>

                                    <form action="{{ route('services.forceDelete', $service->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="bx bx-trash"></i> Butunlay o‘chirish
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">Ma’lumot yo‘q</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="card-body">
                {{ $services->withQueryString()->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

@endsection
