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
    @media only screen and (max-width: 425px) {
        #profileInfo, #businessInfo {
            display: none;
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
<section class="section-1 pr-3" style="min-height: 60vh">
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

        
        <div class="row justify-content-center g-2">
            <div class="col-md-4">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="exampleInputname1">Your Name</label>
                        <input type="name" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" placeholder="Your Name" value="{{ Auth::user()->name }}">
                        <small id="nameHelp" class="form-text text-muted">Please make sure to use your legal fullname</small>
                    </div>

                    {{-- username --}}
                    <div class="form-group">
                        <label for="exampleInputusername1">Username</label>
                        <input type="username" class="form-control" id="exampleInputusername1" aria-describedby="usernameHelp" placeholder="Username" value="{{ Auth::user()->username }}">
                        <small id="usernameHelp" class="form-text text-muted">You can not change your username</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth::user()->email }}">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputphone1">Phone Number</label>
                        <input type="phone" class="form-control" id="exampleInputphone1" aria-describedby="phoneHelp" placeholder="Phone Number" value="{{ Auth::user()->phone }}">
                        <small id="phoneHelp" class="form-text text-muted">Please make sure to use your legal phone number</small>
                    </div>

                    {{-- Edit country --}}
                    <div class="form-group">
                        <label for="exampleInputSelect">Country</label>
                        {{-- Selected country --}}
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="{{ Auth::user()->country }}">{{ Auth::user()->country }}</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Kenya">Kenya</option>
                            <option value="South Africa">South Africa</option>
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Canada">Canada</option>
                            <option value="Australia">Australia</option>
                            <option value="Germany">Germany</option>
                            <option value="France">France</option>
                            <option value="Italy">Italy</option>
                            <option value="Spain">Spain</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Norway">Norway</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Finland">Finland</option>
                            <option value="Iceland">Iceland</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Austria">Austria</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Greece">Greece</option>
                            <option value="Poland">Poland</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Macedonia">Macedonia</option>
                            <option value="Bulgaria">Bulgaria</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputText">Address</label>
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" placeholder="Address" value="{{ Auth::user()->address }}">
                        <small id="textHelp" class="form-text text-muted">Your personal or office line</small>
                    </div>

                    {{-- state --}}
                    <div class="form-group">
                        <label for="exampleInputtext1">State</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="State" value="{{ Auth::user()->state }}">
                        <small id="textHelp" class="form-text text-muted">Your personal or office line</small>
                    </div>

                    {{-- city --}}
                    <div class="form-group">
                        <label for="exampleInputtext1">City</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="City" value="{{ Auth::user()->city }}">
                        <small id="textHelp" class="form-text text-muted">Your personal or office line</small>
                    </div>

                    <button class="btn p-3 btn-sm bb-bg-btn w-100" style="text-transform: capitalize; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 160%; letter-spacing: -0.3px;">Update</button>
                </form>
            </div>
            <div class="col-md-4 mb-3">
                <button class="btn my-4 p-3 bb-bg-btn w-100 show-only-mobile" onclick="profileInfoFunction();" style="text-transform: capitalize; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 160%; letter-spacing: -0.3px;">Business Information</button>

                <form id="profileInfo" action="#" method="POST">
                    {{-- category_id --}}
                    <div class="form-group">
                        <label for="exampleInputSelect">Category</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="1">Category</option>
                        </select>
                    </div>

                    {{-- provider_id --}}
                    <div class="form-group">
                        <label for="exampleInputSelect">Provider</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="1">TA Vendor</option>
                        </select>
                    </div>


                    {{-- business_name --}}
                    <div class="form-group">
                        <label for="exampleInputText">Business Name</label>
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" placeholder="Business Name" value="{{ Auth::user()->business_name }}">
                        <small id="textHelp" class="form-text text-muted">Provider your business name</small>
                    </div>


                    {{-- business_address --}}
                    <div class="form-group">
                        <label for="exampleInputText">Business Address</label>
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" placeholder="Business Address" value="{{ Auth::user()->business_address }}">
                        <small id="textHelp" class="form-text text-muted">Provider your business address</small>
                    </div>

                    <button class="btn p-3 btn-sm bb-bg-btn w-100" style="text-transform: capitalize; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 160%; letter-spacing: -0.3px;">Update</button>

                </form>
            </div>
            <div class="col-md-4">
                <button class="btn mb-2 p-3 bb-bg-btn w-100 show-only-mobile" onclick="businessInfoFunction();" style="text-transform: capitalize; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 160%; letter-spacing: -0.3px;">Payment Option</button>

                <form id="businessInfo" action="#" method="POST">
                    {{-- business_bank_name --}}
                    <div class="form-group">
                        <label for="exampleInputText">Bank Name</label>
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" placeholder="Bank Name" value="{{ Auth::user()->business_bank_name }}">
                        <small id="textHelp" class="form-text text-muted">Provider your bank name</small>
                    </div>
                    
                    {{-- business_bank_account --}}
                    <div class="form-group">
                        <label for="exampleInputText">Bank Account</label>
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" placeholder="Bank Account" value="{{ Auth::user()->business_bank_account }}">
                        <small id="textHelp" class="form-text text-muted">Provider your bank account</small>
                    </div>

                    {{-- business_bank_branch --}}
                    <div class="form-group">
                        <label for="exampleInputText">Bank Branch</label>
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" placeholder="Bank Branch" value="{{ Auth::user()->business_bank_branch }}">
                        <small id="textHelp" class="form-text text-muted">Provider your bank branch</small>
                    </div>

                    <button class="btn p-3 btn-sm bb-bg-btn w-100" style="text-transform: capitalize; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 160%; letter-spacing: -0.3px;">Update</button>

                </form>
            </div>
        </div>
        



    </div>
    
</section>

<script>
    function profileInfoFunction() {
        var x = document.getElementById("profileInfo");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function businessInfoFunction() {
        var x = document.getElementById("businessInfo");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<!-- End .section-1 -->
@endsection