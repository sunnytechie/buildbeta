<x-guest-layout>
    <div class="container-fluid">
        <div class="row">
            {{-- intro screen --}}
            <div class="col-md-4 hide-from-mobile text-white" style="height: 100vh; background-image: url('{{ asset("general/imgs/intro_bg.jpg") }}'); background-size: cover;">
                <div style="height: 50vh">
                    <div class="d-flex p-5">
                        <img height="100px" width="100px" src="{{ asset('general/imgs/BUILDBETA_LOGO_2_PNG.png') }}" alt="">
                        {{-- <h1 class="text-start">Welcome to BuildBeta</h1> --}}
                    </div>
                </div>

                {{-- Align to the buttom --}}
                <div class="justify-content-center align-items-end" style="height: 50vh">
                    <div class="p-5">
                        <p class="text-start font-italic">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit modi error distinctio, similique culpa fugit esse veniam quod dolores soluta magni ad. Harum cupiditate nisi sequi sapiente enim cumque quia.</p>
                    </div>

                    <div class="p-5">
                        <b>...Real people real deal</b>
                        <p class="text-start font-italic">agni ad. Harum cupiditate nisi sequi sapiente enim cumque quia.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="d-flex justify-content-end hide-from-mobile">
                    <div class="px-5 pt-5 pb-1">
                        <p class="text-center" style="font-size: 12px">Don't have an account? <a href="{{ route('login') }}" class="text-primary" style="margin-left: 12px">Sign In</a></p>
                    </div>
                </div>

                <div class="col-md-6 offset-md-3">
                    <div class="py-5">
                        <div class="pb-2 pt-3">
                            <h2 style="font-style: normal; font-weight: 700; font-size: 20px; line-height: 100%; letter-spacing: -0.3px; color: #0080E6;">Welcome to BuildBeta</h2>
                            <p style="font-style: normal; font-weight: 400; font-size: 12px; line-height: 100%; letter-spacing: -0.3px; color: #000000;">Pick a sign up option</p>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card select-sign-up-bg" onclick="changeBgFunction()" style="border-radius: 0;">
                                
                                    <div class="card-body p-4 select1" onclick="switchLink1Function()">
                                        <h4 class="card-title mb-1" style="font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%;">Buyer</h4>
                                        <p class="card-text" style="font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; #000000">Signing up as a buyer into our platform allows you to get the best you need and also to get a reward for your patronage.</p>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card select-sign-up-bg" onclick="changeBgFunction()" style="border-radius: 0;">
                                
                                    <div class="card-body p-4 select2" onclick="switchLink2Function()">
                                        <h4 class="card-title mb-1" style="font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%;">Seller/Service provider</h4>
                                        <p class="card-text" style="font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; #000000">Numerous buyers are already looking for your products and services, sign up to meet them here.</p>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card select-sign-up-bg" onclick="changeBgFunction()" style="border-radius: 0;">
                                
                                    <div class="card-body p-4 select3" onclick="switchLink3Function()">
                                        <h4 class="card-title mb-1" style="font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%;">BBForce Member</h4>
                                        <p class="card-text" style="font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; #000000">Convert your recommendations and referrals into cash as you earn on the go through our bbforce affiliate program.</p>
                                    </div>
                                
                                </div>
                            </div>

                            {{-- change link based on div click --}}
                            <div class="col-md-12" id="display0">
                                <button class="btn w-100 text-white" style="border-radius: 0; background: #CCCCCC;">Continue</button>
                            </div>
                            <div class="col-md-12" id="display1" style="display: none">
                                <a href="{{ route('register') }}" class="btn bb-bg-btn w-100" style="border-radius: 0;">Join as a Buyer</a>
                            </div>
                            <div class="col-md-12" id="display2" style="display: none">
                                <a href="{{ route('seller.register') }}" class="btn bb-bg-btn w-100" style="border-radius: 0;">Join as Service Provider</a>
                            </div>
                            <div class="col-md-12" id="display3" style="display: none">
                                <a href="{{ route('bbforce.register') }}" class="btn bb-bg-btn w-100" style="border-radius: 0;">Join as a BbForce Member</a>
                            </div>

                            <div class="mt-5 text-center show-only-mobile">
                                <div class="p-5">
                                    <p class="text-center">Already have an account? <a href="{{ route('login') }}" class="text-primary" style="margin-left: 10px">Log In</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                
            </div>
        </div>

        <script>

            function switchLink1Function() {
                $('#display1').show();
                    $('#display2').hide();
                    $('#display3').hide();
                    $('#display0').hide();
            }
            function switchLink2Function() {
                $('#display1').hide();
                    $('#display2').show();
                    $('#display3').hide();
                    $('#display0').hide();
            }
            function switchLink3Function() {
                $('#display1').hide();
                    $('#display2').hide();
                    $('#display3').show();
                    $('#display0').hide();
            }

        </script>
</x-guest-layout>
