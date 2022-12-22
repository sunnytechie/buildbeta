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
            
            {{-- menu bar and logo --}}
            <div class="mb-2 ">
                <a href="/" class="logo d-flex ml-1">
                    <img height="30px" width="30px" src="{{ asset('general/imgs/icons/logo.svg') }}" alt=""> 
                    <span class="mt-2">Buildbeta</span>
                </a>
                
            </div>
            <!-- End .logo -->

            
            <ul class="nav nav-tabs list flex-column mb-0" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard"
                        role="tab" aria-controls="dashboard" aria-selected="true">Reward Store</a>
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
                    <div class="d-flex">
                        <a href="#" class="mt-1"><ion-icon name="arrow-back-outline" style="font-size: 20px"></ion-icon></a>
                        <h2 class="ml-3" style="font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%; color: #000000; margin-top: 0.6rem">Reward Store</h2>
                    </div>

                    <div class="my-4">
                        <div>Pie chart here</div>
                    </div>

                    <div class="d-flex my-4">
                        <div class="mr-5">
                            <div class="py-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; letter-spacing: -0.3px; color: #000000;">Total Point Value</div>
                            <div class="py-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #CCCCCC;">0</div>
                        </div>
                        <div class="mr-5">
                            <div class="py-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; letter-spacing: -0.3px; color: #000000;">Purchase</div>
                            <div class="py-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #CCCCCC;">0</div>
                        </div>
                        <div class="mr-5">
                            <div class="py-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; letter-spacing: -0.3px; color: #000000;">Contracts</div>
                            <div class="py-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #CCCCCC;">0</div>
                        </div>
                    </div>

                    <div class="my-4">
                        <h3 style="font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%; color: #000000;">Redeemable Bonuses</h3>
                        <table class="table table-borderless">
                            <thead>
                              <tr>
                                <th scope="col" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Bonus</th>
                                <th scope="col" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Point Value</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Voucher</td>
                                  <td style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">2pv</td>
                                  <td><a style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #CCCCCC;" href="#">Redeem</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div><!-- End .tab-pane -->

            @include('dashboardTabs')

           
        </div><!-- End .tab-content -->
    </div><!-- End .row -->
</div>


@endsection