@extends('layouts.bbforce')
@section('content')

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
                    <img class="verified-tag ml-2" draggable="false" src="{{ asset('general/imgs/icons/verified.svg') }}"
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


</section>
    
@endsection