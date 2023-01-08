@extends('layouts.seller')
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

            <div class="d-flex mt-3" style="margin-right: 20px">
                {{-- dropdown --}}
                <div class="dropdown">
                    <div id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('general/imgs/icons/history.svg') }}" alt="History">
                    </div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-right: 85px">
                        <a class="dropdown-item py-4 px-5" href="{{ route('reward.store') }}" style="font-family: 'Poppins'; font-size: 12px">Reward Store</a>
                        <a class="dropdown-item pb-4 px-5" href="{{ route('seller.settings') }}" style="font-family: 'Poppins'; font-size: 12px">Settings</a>
                    </div>
                </div>
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
                            @if (Auth::user()->verified_seller)
                            <img class="ml-2" src="{{ asset('general/imgs/icons/verified.svg') }}" alt="verified">
                            @endif
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

        {{-- Wallet --}}
        <div class="row justify-content-center mb-4">
            <div class="col-md-6 mt-2">
                <div style="background: #0080E6; padding: 15px">
                    <div style="font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%; color: #FFFFFF;">Wallet</div>

                    <div style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF;">Available Earnings</div>
                    
                    <div class="d-flex justify-content-between mt-4">
                        <div style="font-family: 'Poppins'; font-style: normal; font-weight: 700;font-size: 20px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF;">₦ 40,000</div>
                        <a href="#" class="btn btn-md" style="font-family: 'Poppins'; background: #F5B700; font-style: normal;font-weight: 600; font-size: 10px; line-height: 160%; letter-spacing: -0.3px; color: #FFFFFF;">Withdraw</a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 show-only-mobile">
                {{-- group btn for Mobile --}}
                <div class="row mt-3">
                    <div class="col-6 pr-0"><button class="btn btn-block w-5 btn-sm bb-bg-btn"
                            style="text-transform: capitalize; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #FFFFFF;">Sales</button>
                    </div>
                    <div class="col-6 pl-0"><button class="btn btn-block w-5 btn-sm"
                            style="text-transform: capitalize; background: #CCCCCC; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; text-align: center; letter-spacing: -0.3px; color: #FFFFFF;">Contracts</button>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex justify-content-center text-center my-5">
                    <div style="width: auto" class="mr-5">
                        <div style="padding: 22px 30px; border: 8px solid #0080E6; border-radius: 400px; font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%;color: #000000;">0</div>
                        <span style="font-family: 'Poppins'; font-style: normal;font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Total Sales</span>
                    </div>
                    
                    <div style="width: auto" class="mr-5">
                        <div style="padding: 22px 30px; border: 8px solid #48D189; border-radius: 400px; font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%;color: #000000;">0</div>
                        <span style="font-family: 'Poppins'; font-style: normal;font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Successful</span>
                    </div>
                    
                    <div style="width: auto" class="mr-1">
                        <div style="padding: 22px 30px; border: 8px solid #F5B700; border-radius: 400px; font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%;color: #000000;">0</div>
                        <span style="font-family: 'Poppins'; font-style: normal;font-weight: 500; font-size: 14px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Pending</span>
                    </div>
                </div>
            </div>
        </div>
        

        {{-- table --}}
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="basic-datatable">
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
                            Two bedroom Modern</td>
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
                            Two bedroom</td>
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
            
        {{-- Products --}}
        <div class="row mt-5">
            @foreach ($products as $product)
            <div class="col-md-3 col-6">
                <a href="#" style="text-decoration: none">
                    <div class="card border-0">
                        <img src="/storage/{{ $product->image }}" class="card-img-top" alt="...">
                        <div class="card-body px-0 py-2 border-0" style="min-height: auto">
                            @if ($product->publish == 0)
                            <div class="d-flex" style="text-transform:inherit; font-family: 'Poppins'; color: rgb(0, 0, 0); font-size: 12px; line-height: 16px; font-weight: 400; text-decoration: none;">
                                <ion-icon name="time-outline" style="margin-top: 2px; margin-right: 3px"></ion-icon> 
                                <span>In Review.</span>
                            </div>
                            @endif
                            <h5 class="card-title pl-2" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">{{ $product->title }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach   
        </div>


    </div>
    
</section>
<!-- End .section-1 -->
@endsection