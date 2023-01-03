@extends('layouts.user')
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
<section class="section-1" style="min-height: 60vh">
    <div class="dashboard-content mb-5">
        <div class="d-flex mb-5 justify-content-between">
            <h3 class="account-sub-title d-md-block mt-3" style="font-size: 20px">Dashboard</h3>

            <div class="d-flex mt-3">
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

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
            </li>
        </ul>
          
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane container active" id="home">Home</div>
            <div class="tab-pane container fade" id="menu1">Menu1</div>
            <div class="tab-pane container fade" id="menu2">Menu2</div>
          </div>
        



    </div>
    
</section>
<!-- End .section-1 -->
@endsection