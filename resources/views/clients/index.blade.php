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


                @include('clients.create')


            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>To'liq ism</th>
                        <th>Telefon raqami</th>
                        <th>Qarzdorligi</th>
                        <th>Harakatlar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($clients as $client)
                        <tr>

                            <td>{{ $client->id }}</td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>{{$client->debts}}</td>
                            <td>
                                <div class="d-flex">
                                    @include('clients.edit')
                                    <a href="{{route('client.rents',[$client->id])}}" class="btn btn-success"><i class="bx bxs-cart-add"></i></a>
                                </div>
                            </td>
                            @empty
                                <td colspan="5" class="text-center">Ma'lumot yo'q</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <!-- Basic Pagination -->
                <div class="card-body">
                    {{ $clients->links('pagination::bootstrap-5') }}
                </div>
                <!--/ Basic Pagination -->
            </div>
        </div>
    </div>

@endsection
