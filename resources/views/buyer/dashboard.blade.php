@extends('layouts.userDashboard')
@section('content')
    <style>
        .hide-from-dashboard, .mobile-tab {
            display: none !important;
        }
        body {
            font-family: 'Poppins', sans-serif !important;
            font-size: 14px !important;
            font-weight: 400 !important;
            line-height: 1.2 !important;   
        }

        .header-middle {
            border-top: 0 !important;
        }

        #basic-datatable_filter input {
            position: absolute;
            right: 12px;
            width: 200px;
            top: -8px;
            margin-bottom: 5px;
        }

        /* .dataTables_length {
            margin-top: 12px !important;
        } */

        /* First child row in basic-datatable_wrapper */
        .dataTables_wrapper .row:first-child {
            margin-bottom: 15px !important;
            margin-top: 9px !important;
        }

    /* @media size of 425 */
    @media only screen and (max-width: 425px) {
        #basic-datatable_filter input {
            top: -29px !important;
        }
    }
    </style>

<div class="my-5 mt-1">
    <div class="row">
        <div class="sidebar hide-from-mobile widget widget-dashboard mb-lg-0 mb-3 col-lg-3 order-0">
            <h2 class="text-uppercase">My Account</h2>
            <ul class="nav nav-tabs list flex-column mb-0" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard"
                        role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab" data-toggle="tab" href="#product" role="tab"
                        aria-controls="product" aria-selected="false">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab"
                        aria-controls="address" aria-selected="false">Addresses</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab"
                        aria-controls="setting" aria-selected="true">Settings</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab"
                        aria-controls="account" aria-selected="false">Account
                        details</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="login.html">Logout</a>
                </li>
            </ul>
        </div>


        <div class="col-lg-9 order-lg-last order-1 tab-content">
            <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                <div class="dashboard-content">
                    <div class="d-flex my-5 justify-content-between">
                        <h3 class="account-sub-title d-md-block" style="font-size: 20px">Dashboard</h3>

                            <div class="d-flex mt-1">
                                <span class="mr-5"><img src="{{ asset('general/imgs/icons/history.svg') }}" alt="History"></span>
                                <span><img src="{{ asset('general/imgs/icons/cart.svg') }}" alt=""></span>
                            </div>
                    </div>

                    <div class="d-flex my-5 justify-content-between">
                        <div class="d-flex">
                            <div class="mr-2"><img class="img-fluid" height="70" width="70" src="{{ asset('general/imgs/user.png') }}" alt=""></div>
                            <div class="mt-1">
                                <h3 class="account-sub-title mb-0" style="font-size: 16px; font-style: normal; font-weight: 700; font-family: 'Poppins'; font-size: 16px; line-height: 160%; color: #000000;">Obioma JC</h3>
                                <span style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Buyer</span>
                            </div>
                        </div>
                        
                        <a href="#">
                            <div class="p-3 shadow-sm border" style="background: rgb(0, 0, 0)">
                                <div class="text-center" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF;">24.5</div>
                                <div class="text-center text-sm" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF;">Total</div>
                                <div class="text-center text-sm" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF;">Point Value</div>
                            </div>
                        </a>
                    </div>

                    <div class="d-flex my-5 justify-content-between">
                        <a href="#">
                            <div class="text-center shadow-sm border p-2" style="background: #0080E6; box-shadow: 2px 2px 4px rgba(0, 128, 230, 0.25);">
                            <div class="px-5" style="font-style: normal; font-weight: 700; font-size: 24px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #FFFFFF;">0</div>
                            <div class="text-center text-sm" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px;color: #FFFFFF;">Patronages</div>
                        </div>
                        </a>
                        
                        <a href="#">
                            <div class="text-center shadow-sm border p-2" >
                            <div class="px-5" style="font-style: normal; font-weight: 700; font-size: 24px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #000000;">0</div>
                            <div class="text-center text-sm" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px;color: #000000;">Contracts</div>
                        </div>
                        </a>
                        
                        <a href="#">
                            <div class="text-center shadow-sm border p-2" >
                            <div class="px-5" style="font-style: normal; font-weight: 700; font-size: 24px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #000000;">0</div>
                            <div class="text-center text-sm" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px;color: #000000;">Purchases</div>
                        </div>
                        </a>
                        
                    </div>

                    {{-- table --}}
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mt-1" style="font-size: 14px; text-transform:capitalize; font-family:poppins;">
                                Recent Transactions
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless text-nowrap" id="basic-datatable">
                                    <thead>
                                        <tr>
                                            <th style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">S/N</th>
                                            <th style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Transaction</th>
                                            <th style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Status</th>
                                            <th style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Date & Time</th>
                                            <th style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">PV</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">1</th>
                                            <td style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Two bedroom Modern Residential Building</td>
                                            <td class="text-danger" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px;">Pending</td>
                                            <td style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">27/08/2022, 23:45</td>
                                            <td style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">0.04</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">1</th>
                                            <td style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Two bedroom Modern Residential Building</td>
                                            <td class="text-success" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px;">Success</td>
                                            <td style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">27/08/2022, 23:45</td>
                                            <td style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">0.04</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End .tab-pane -->

            @include('dashboardTabs')

           
        </div><!-- End .tab-content -->
    </div><!-- End .row -->
</div>


@endsection