@extends('layouts.app')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        @include('alerts.success-alert')
        @include('alerts.error-alert')

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center flex-column flex-sm-row">
                <!-- Search -->
                <form action="" method="GET" class="d-flex align-items-center mb-2 mb-sm-0 me-sm-2">
                    <input type="text" class="form-control me-2" placeholder="Izlash" name="search" value="">

                    <button class="btn btn-primary me-2" type="submit">
                        <i class="bx bx-search"></i>
                    </button>
                </form>


{{--                @include('clients.create')--}}


            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Servis nomi</th>
                        <th>Soni</th>
                        <th>Qachon olganligi</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rents as $rent)
                        <tr>

                            <td>{{ $rent->id }}</td>
                            <td>{{ $rent->service->name }}</td>
                            <td>{{ $rent->quantity }}</td>
                            <td>{{$rent->created_at}}</td>
                            <td>{{$rent->status}}</td>
                            <td>
                                <div class="d-flex">
{{--                                    @include('clients.edit')--}}
                                </div>
                            </td>
                            @empty
                                <td colspan="5" class="text-center">Ma'lumot yo'q</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <!-- Basic Pagination -->
{{--                <div class="card-body">--}}
{{--                    {{ $rents->links('pagination::bootstrap-5') }}--}}
{{--                </div>--}}
                <!--/ Basic Pagination -->
            </div>
        </div>
    </div>

@endsection
