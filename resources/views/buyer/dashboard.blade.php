@extends('layouts.buyer')
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

        /* @media size of 425 */

        input:focus {
            border: 1px solid rgb(63, 48, 197) !important;
        }

        .modal-dialog {
            max-width: 500px !important;
            min-width: 300px !important;
        }
    </style>
    <section class="section-1" style="min-height: 60vh">
        <div class="dashboard-content mb-5">
            <div class="d-flex mb-5 justify-content-between">
                <h3 class="account-sub-title d-md-block mt-3" style="font-size: 20px">Dashboard</h3>

                <div class="d-flex mt-3">
                    <span class="mr-5"><img src="{{ asset('general/imgs/icons/history.svg') }}" alt="History"></span>
                    <span><ion-icon name="settings"></ion-icon></span>
                    <a href="#">Reward Store</a>
                </div>
            </div>

            <div class="d-flex my-4 justify-content-between">
                <div class="d-flex">
                    <div class="mr-2"><img class="img-fluid" height="70" width="70"
                            src="{{ asset('general/imgs/user.png') }}" alt=""></div>
                    <div class="mt-1">
                        <h3 class="account-sub-title d-flex mb-0" style="font-size: 16px">
                            <span style="font-size: 16px; font-style: normal; font-weight: 700; font-family: 'Poppins'; font-size: 16px; line-height: 160%; color: #000000;">Obioma JC</span>
                        </h3>
                        <span style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Buyer</span>
                    </div>
                </div>

                <a href="#">
                    <div class="p-3 shadow-sm border" style="background: rgb(0, 0, 0)">
                        <div class="text-center" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF;">
                            24.5
                        </div>
                        <div class="text-center text-sm" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF;">
                            Total
                        </div>
                        <div class="text-center text-sm" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF;">
                            Point Value
                        </div>
                    </div>
                </a>
            </div>

            <div class="d-flex my-5 justify-content-start">
                <a href="#" class="mr-5">
                    <div class="text-center shadow-sm border p-2" style="background: #0080E6; box-shadow: 2px 2px 4px rgba(0, 128, 230, 0.25);">
                        <div class="px-5" style="font-style: normal; font-weight: 700; font-size: 24px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #FFFFFF;">0</div>
                        <div class="text-center text-sm" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px;color: #FFFFFF;">Patronages</div>
                    </div>
                </a>
                
                <a href="#" class="mr-5">
                    <div class="text-center shadow-sm border p-2" >
                        <div class="px-5" style="font-style: normal; font-weight: 700; font-size: 24px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #000000;">0</div>
                        <div class="text-center text-sm" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px;color: #000000;">Contracts</div>
                    </div>
                </a>
                
                <a href="#" class="mr-5">
                    <div class="text-center shadow-sm border p-2" >
                        <div class="px-5" style="font-style: normal; font-weight: 700; font-size: 24px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #000000;">0</div>
                        <div class="text-center text-sm" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px;color: #000000;">Purchases</div>
                    </div>
                </a>
            </div>

            
            <div class="table-responsive">
                <table class="table table-bordered table-sm" id="basic-datatable">
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

    </section>
    <!-- End .section-1 -->
@endsection
