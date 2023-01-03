@extends('layouts.user')
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

<section class="section-1" style="min-height: 60vh">
<div class="dashboard-content">
    <div class="d-flex">
        <h2 class="mt-3" style="font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%; color: #000000; margin-top: 0.6rem">Reward Store</h2>
    </div>

    <div class="justify-content-center text-center" style="border: 5rem solid #cccccc; width: 180px; border-radius: 100px">
        <div class="text-center" style="padding: 30px 22px"><span>12345</span></div>
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
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="basic-datatable">
                <thead>
                    <tr>
                        <th style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Bonus</th>
                        <th style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Point Value</th>
                        <th style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Voucher</td>
                        <td style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">2pv</td>
                        <td class="text-danger" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px;">
                            <a href="#" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #0080E6;">Redeem</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>

@endsection