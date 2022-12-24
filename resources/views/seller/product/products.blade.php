@extends('layouts.userDashboard')
@section('content')
    <style>
        .hide-from-dashboard,
        .mobile-tab {
            display: none !important;
        }

        body {
            font-family: 'Poppins', sans-serif !important;
            font-size: 14px !important;
            font-weight: 400 !important;
            line-height: 1.2 !important;
        }

        /* .footer-ribbon {
                display: none !important;
            } */

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

        input:focus {
            border: 1px solid rgb(63, 48, 197) !important;
        }

        .modal-dialog {
            max-width: 500px !important;
            min-width: 300px !important;
        }
    </style>

    <div>
        <div class="row">
            <div class="sidebar mt-4 hide-from-mobile widget widget-dashboard mb-lg-0 mb-3 col-lg-3 order-0">
                <h2 class="text-uppercase">My Account</h2>
                <ul class="nav nav-tabs list flex-column mb-0" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab"
                            aria-controls="dashboard" aria-selected="false">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" id="product-tab" data-toggle="tab" href="#product" role="tab"
                            aria-controls="product" aria-selected="true">Products</a>
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
                <div class="tab-pane fade" id="dashboard" role="tabpanel">
                    <div class="dashboard-content">
                        <div class="d-flex my-5 justify-content-between">
                            <h3 class="account-sub-title d-md-block" style="font-size: 20px">Dashboard</h3>

                            <div class="d-flex mt-1">
                                <span class="mr-5"><img src="{{ asset('general/imgs/icons/history.svg') }}"
                                        alt="History"></span>
                                <span><img src="{{ asset('general/imgs/icons/cart.svg') }}" alt=""></span>
                            </div>
                        </div>

                        <div class="d-flex my-4 justify-content-between">
                            <div class="d-flex">
                                <div class="mr-2"><img class="img-fluid" height="70" width="70"
                                        src="{{ asset('general/imgs/user.png') }}" alt=""></div>
                                <div class="mt-1">
                                    <h3 class="account-sub-title d-flex mb-0" style="font-size: 16px">
                                        <span
                                            style="font-size: 16px; font-style: normal; font-weight: 700; font-family: 'Poppins'; font-size: 16px; line-height: 160%; color: #000000;">Obioma
                                            JC</span>
                                        <img class="ml-2" src="{{ asset('general/imgs/icons/verified.svg') }}"
                                            alt="">
                                    </h3>
                                    <span
                                        style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Seller</span>
                                </div>
                            </div>

                            <a href="#">
                                <div class="p-3 shadow-sm border" style="background: rgb(0, 0, 0)">
                                    <div class="text-center"
                                        style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF;">
                                        24.5</div>
                                    <div class="text-center text-sm"
                                        style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF;">
                                        Total</div>
                                    <div class="text-center text-sm"
                                        style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF;">
                                        Point Value</div>
                                </div>
                            </a>
                        </div>

                        <div class="d-flex my-4 justify-content-between">
                            <div class="d-flex">
                                <div class="mr-5">
                                    <div
                                        style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                        <ion-icon name="person-circle-outline"></ion-icon> 9843
                                    </div>
                                    <div
                                        style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                        Followers</div>
                                </div>
                                <div>
                                    <div
                                        style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                        <ion-icon name="star-outline"></ion-icon> 4353
                                    </div>
                                    <div
                                        style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                        Rating</div>
                                </div>
                            </div>

                            <div class="d-flex">
                                {{-- group btn for Desktop --}}
                                <div class="btn-group hide-from-mobile mr-4">
                                    <button class="btn btn-sm bb-bg-btn"
                                        style="text-transform: capitalize; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #FFFFFF;">Sales</button>
                                    <button class="btn btn-sm"
                                        style="text-transform: capitalize; background: #CCCCCC; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #FFFFFF;">Contracts</button>
                                </div>
                                <a href="#" class="btn btn-sm bb-bg-btn"
                                    style="text-transform: capitalize; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF; flex-grow: 0;">Find
                                    Needs</a>
                            </div>
                        </div>

                        {{-- group btn for Mobile --}}
                        <div class="row show-only-mobile my-5">
                            <div class="col-6 pr-0"><button class="btn btn-block w-5 btn-sm bb-bg-btn"
                                    style="text-transform: capitalize; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #FFFFFF;">Sales</button>
                            </div>
                            <div class="col-6 pl-0"><button class="btn btn-block w-5 btn-sm"
                                    style="text-transform: capitalize; background: #CCCCCC; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #FFFFFF;">Contracts</button>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-5">
                            <div
                                style="padding: 22px 30px; border: 8px solid #0080E6; border-radius: 400px; font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%;color: #000000;">
                                0</div>
                            <div
                                style="padding: 22px 30px; border: 8px solid #48D189; border-radius: 400px; font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%;color: #000000;">
                                0</div>
                            <div
                                style="padding: 22px 30px; border: 8px solid #F5B700; border-radius: 400px; font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%;color: #000000;">
                                0</div>
                        </div>
                        <div class="d-flex justify-content-between mb-5">
                            <span class="pl-4"
                                style="font-family: 'Poppins'; font-style: normal;font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Total
                                Sales</span>
                            <span class="pr-4"
                                style="font-family: 'Poppins'; font-style: normal;font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Successful</span>
                            <span class="pr-4"
                                style="font-family: 'Poppins'; font-style: normal;font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Pending</span>
                        </div>

                        {{-- table --}}
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title mt-1"
                                    style="font-size: 14px; text-transform:capitalize; font-family:poppins;">
                                    Recent Transactions
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless text-nowrap" id="basic-datatable">
                                        <thead>
                                            <tr>
                                                <th
                                                    style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                                    S/N</th>
                                                <th
                                                    style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                                    Transaction</th>
                                                <th
                                                    style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                                    Status</th>
                                                <th
                                                    style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                                    Date & Time</th>
                                                <th
                                                    style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                                    PV</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"
                                                    style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                                    1</th>
                                                <td
                                                    style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                                    Two bedroom Modern Residential Building</td>
                                                <td class="text-danger"
                                                    style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px;">
                                                    Pending</td>
                                                <td
                                                    style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                                    27/08/2022, 23:45</td>
                                                <td
                                                    style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                                    0.04</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"
                                                    style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                                    1</th>
                                                <td
                                                    style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                                    Two bedroom Modern Residential Building</td>
                                                <td class="text-success"
                                                    style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px;">
                                                    Success</td>
                                                <td
                                                    style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                                    27/08/2022, 23:45</td>
                                                <td
                                                    style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">
                                                    0.04</td>
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
