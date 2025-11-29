@extends('layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-lg-6 mb-6 order-0">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                    <div
                                        class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                        <div class="card-title">
                                            <h5 class="text-nowrap mb-2">Umumiy mijozlar</h5>
                                            <span class="badge bg-label-success rounded-pill">20.07.2024</span>
                                        </div>
                                        <div class="mt-sm-auto">
                                            <h3 class="mb-0"><b>5 152</b></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-6 order-0">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                    <div
                                        class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                        <div class="card-title">
                                            <h5 class="text-nowrap mb-2">Bugungi daromad</h5>
                                            <span class="badge bg-label-warning rounded-pill">20.07.2024</span>
                                        </div>
                                        <div class="mt-sm-auto">

                                            <h3 class="mb-0">1.482.200 sum</h3>
                                        </div>
                                    </div>
                                    <div id="profileReportChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 mt-3">
                        <div class="card">
                            <h5 class="card-header">Table Basic</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Project</th>
                                        <th>Client</th>
                                        <th>Users</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular
                                                Project</strong></td>
                                        <td>Albert Cook</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller"
                                                >
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar"
                                                         class="rounded-circle"/>
                                                </li>
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson"
                                                >
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar"
                                                         class="rounded-circle"/>
                                                </li>
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Christina Parker"
                                                >
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar"
                                                         class="rounded-circle"/>
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                                    >
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                    ><i class="bx bx-trash me-1"></i> Delete</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React
                                                Project</strong></td>
                                        <td>Barry Hunter</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller"
                                                >
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar"
                                                         class="rounded-circle"/>
                                                </li>
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson"
                                                >
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar"
                                                         class="rounded-circle"/>
                                                </li>
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Christina Parker"
                                                >
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar"
                                                         class="rounded-circle"/>
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-success me-1">Completed</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                    ><i class="bx bx-edit-alt me-2"></i> Edit</a
                                                    >
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                    ><i class="bx bx-trash me-2"></i> Delete</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs
                                                Project</strong></td>
                                        <td>Trevor Baker</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller"
                                                >
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar"
                                                         class="rounded-circle"/>
                                                </li>
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson"
                                                >
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar"
                                                         class="rounded-circle"/>
                                                </li>
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Christina Parker"
                                                >
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar"
                                                         class="rounded-circle"/>
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                    ><i class="bx bx-edit-alt me-2"></i> Edit</a
                                                    >
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                    ><i class="bx bx-trash me-2"></i> Delete</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap
                                                Project</strong>
                                        </td>
                                        <td>Jerry Milton</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller"
                                                >
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar"
                                                         class="rounded-circle"/>
                                                </li>
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson"
                                                >
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar"
                                                         class="rounded-circle"/>
                                                </li>
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Christina Parker"
                                                >
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar"
                                                         class="rounded-circle"/>
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                    ><i class="bx bx-edit-alt me-2"></i> Edit</a
                                                    >
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                    ><i class="bx bx-trash me-2"></i> Delete</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap
                                                Project</strong>
                                        </td>
                                        <td>Jerry Milton</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller"
                                                >
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar"
                                                         class="rounded-circle"/>
                                                </li>
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson"
                                                >
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar"
                                                         class="rounded-circle"/>
                                                </li>
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Christina Parker"
                                                >
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar"
                                                         class="rounded-circle"/>
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                    ><i class="bx bx-edit-alt me-2"></i> Edit</a
                                                    >
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                    ><i class="bx bx-trash me-2"></i> Delete</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 order-1">
                <div class="card mb-3">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Yangi mijorlar</h5>
                            <h2 class="mb-2">120 ta</h2>

                        </div>
                        <div class="dropdown">

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">

                            <div class="d-flex flex-column align-items-center gap-1">
                                <span>Ularga Ko'rsatilgan Xizmatlar</span>
                            </div>
                            <div id="orderStatisticsChart"></div>
                        </div>
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"
                            ><i class="bx bx-home-alt"></i
                                ></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Filter Almashtirildi</h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">120.000 sum</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-success"><i class="bx bx-home-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Suv Turba</h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">232.000 sum</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-info"><i
                                            class="bx bx-home-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Filter Tuzatildi</h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">50.000 sum</small>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Bugungi xizmatlar</h5>
                            <h2 class="mb-2">120 ta</h2>

                        </div>
                        <div class="dropdown">

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">

                            <div class="d-flex flex-column align-items-center gap-1">
                                <span>Ularga Ko'rsatilgan Xizmatlar</span>
                            </div>
                            <div id="orderStatisticsChart"></div>
                        </div>
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary">
                                        <i class="bx bx-home-alt"></i>
                                    </span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Bajarilgan</h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">10</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-success"><i class="bx bx-home-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Bajarilmagan</h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">20</small>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-5">
        <div class="modal-content p-4">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('header.replenish-Balance') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- Payment form -->
                <form id="form-payme" method="POST" action="#">
                    @csrf
                    <input type="hidden" name="merchant" value="">
                    <input type="hidden" name="account[user_id]" value="">
                    <input type="hidden" name="lang" value="">

                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <label class="form-label">{{ __('header.months') }}</label>
                            <input type="number" id="months" class="form-control" value="" min="1" />
                        </div>
                        <div>
                            <label class="form-label">{{ __('header.summary') }}</label>
                            <input type="text" id="amount" class="form-control" value="" readonly />
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <label class="fw-bold">{{ __('header.overall-Payment') }}</label>
                        <div class="d-flex align-items-center">
                            <input type="text" id="total" class="form-control me-2 text-end" value="" />
                            <span class="fw-bold">{{ __('header.uzs') }}</span>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-success payment-button">{{ __('header.pay-Via-Payme') }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("form-payme");
        const monthInput = document.getElementById("months");
        const amountInput = document.getElementById("amount");
        const totalInput = document.getElementById("total");

        const pricePerMonth = 0;

        function updateAmount() {
            const months = parseInt(monthInput.value) || 1;
            const total = months * pricePerMonth;
            amountInput.value = total;
            totalInput.value = total;
        }

        monthInput.addEventListener("input", updateAmount);

        totalInput.addEventListener("input", function () {
            amountInput.value = totalInput.value;
        });

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            const totalValue = parseInt(totalInput.value);

            if (!totalValue || totalValue < 1000) {
                alert("Минимальная сумма — 1000 UZS");
                return;
            }

            // remove old amount field if exists
            const existing = this.querySelector('input[name="amount"]');
            if (existing) existing.remove();

            const hiddenAmount = document.createElement("input");
            hiddenAmount.type = "hidden";
            hiddenAmount.name = "amount";
            hiddenAmount.value = totalValue * 100; // UZS -> tiyin
            this.appendChild(hiddenAmount);

            this.submit();
        });

        // Initialize
        updateAmount();
    });
</script>

<!-- Balance / status panel -->
<div id="block-tts-sub-branding" class="">
    <div class="">
        <!-- Payment Button -->
        @auth
            <button type="button" class=""
                    data-bs-toggle="modal" data-bs-target="#paymentModal">
                {{ __('header.payment') }}
            </button>
        @else
            <a href="{{ route('login') }}" class="btn btn-success btn-sm px-2 payment-button">
                {{ __('header.payment') }}
            </a>
        @endauth
    </div>
</div>
            <!-- Total Revenue -->


            <!--/ Total Revenue -->

        </div>
        <!--/ Expense Overview -->
        <!-- Transactions -->
        {{--            <div class="col-md-6 col-lg-4 order-2 mb-4">--}}
        {{--                <div class="card h-100">--}}
        {{--                    <div class="card-header d-flex align-items-center justify-content-between">--}}
        {{--                        <h5 class="card-title m-0 me-2">Transactions</h5>--}}
        {{--                        <div class="dropdown">--}}
        {{--                            <button--}}
        {{--                                class="btn p-0"--}}
        {{--                                type="button"--}}
        {{--                                id="transactionID"--}}
        {{--                                data-bs-toggle="dropdown"--}}
        {{--                                aria-haspopup="true"--}}
        {{--                                aria-expanded="false"--}}
        {{--                            >--}}
        {{--                                <i class="bx bx-dots-vertical-rounded"></i>--}}
        {{--                            </button>--}}
        {{--                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">--}}
        {{--                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>--}}
        {{--                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>--}}
        {{--                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="card-body">--}}
        {{--                        <ul class="p-0 m-0">--}}
        {{--                            <li class="d-flex mb-4 pb-1">--}}
        {{--                                <div class="avatar flex-shrink-0 me-3">--}}
        {{--                                    <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />--}}
        {{--                                </div>--}}
        {{--                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">--}}
        {{--                                    <div class="me-2">--}}
        {{--                                        <small class="text-muted d-block mb-1">Paypal</small>--}}
        {{--                                        <h6 class="mb-0">Send money</h6>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="user-progress d-flex align-items-center gap-1">--}}
        {{--                                        <h6 class="mb-0">+82.6</h6>--}}
        {{--                                        <span class="text-muted">USD</span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </li>--}}
        {{--                            <li class="d-flex mb-4 pb-1">--}}
        {{--                                <div class="avatar flex-shrink-0 me-3">--}}
        {{--                                    <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />--}}
        {{--                                </div>--}}
        {{--                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">--}}
        {{--                                    <div class="me-2">--}}
        {{--                                        <small class="text-muted d-block mb-1">Wallet</small>--}}
        {{--                                        <h6 class="mb-0">Mac'D</h6>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="user-progress d-flex align-items-center gap-1">--}}
        {{--                                        <h6 class="mb-0">+270.69</h6>--}}
        {{--                                        <span class="text-muted">USD</span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </li>--}}
        {{--                            <li class="d-flex mb-4 pb-1">--}}
        {{--                                <div class="avatar flex-shrink-0 me-3">--}}
        {{--                                    <img src="../assets/img/icons/unicons/chart.png" alt="User" class="rounded" />--}}
        {{--                                </div>--}}
        {{--                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">--}}
        {{--                                    <div class="me-2">--}}
        {{--                                        <small class="text-muted d-block mb-1">Transfer</small>--}}
        {{--                                        <h6 class="mb-0">Refund</h6>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="user-progress d-flex align-items-center gap-1">--}}
        {{--                                        <h6 class="mb-0">+637.91</h6>--}}
        {{--                                        <span class="text-muted">USD</span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </li>--}}
        {{--                            <li class="d-flex mb-4 pb-1">--}}
        {{--                                <div class="avatar flex-shrink-0 me-3">--}}
        {{--                                    <img src="../assets/img/icons/unicons/cc-success.png" alt="User" class="rounded" />--}}
        {{--                                </div>--}}
        {{--                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">--}}
        {{--                                    <div class="me-2">--}}
        {{--                                        <small class="text-muted d-block mb-1">Credit Card</small>--}}
        {{--                                        <h6 class="mb-0">Ordered Food</h6>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="user-progress d-flex align-items-center gap-1">--}}
        {{--                                        <h6 class="mb-0">-838.71</h6>--}}
        {{--                                        <span class="text-muted">USD</span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </li>--}}
        {{--                            <li class="d-flex mb-4 pb-1">--}}
        {{--                                <div class="avatar flex-shrink-0 me-3">--}}
        {{--                                    <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />--}}
        {{--                                </div>--}}
        {{--                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">--}}
        {{--                                    <div class="me-2">--}}
        {{--                                        <small class="text-muted d-block mb-1">Wallet</small>--}}
        {{--                                        <h6 class="mb-0">Starbucks</h6>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="user-progress d-flex align-items-center gap-1">--}}
        {{--                                        <h6 class="mb-0">+203.33</h6>--}}
        {{--                                        <span class="text-muted">USD</span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </li>--}}
        {{--                            <li class="d-flex">--}}
        {{--                                <div class="avatar flex-shrink-0 me-3">--}}
        {{--                                    <img src="../assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded" />--}}
        {{--                                </div>--}}
        {{--                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">--}}
        {{--                                    <div class="me-2">--}}
        {{--                                        <small class="text-muted d-block mb-1">Mastercard</small>--}}
        {{--                                        <h6 class="mb-0">Ordered Food</h6>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="user-progress d-flex align-items-center gap-1">--}}
        {{--                                        <h6 class="mb-0">-92.45</h6>--}}
        {{--                                        <span class="text-muted">USD</span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </li>--}}
        {{--                        </ul>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        <!--/ Transactions -->
    </div>
@endsection
