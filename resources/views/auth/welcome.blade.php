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
                <div class="d-flex justify-content-end">
                    <div class="px-5 pt-5 pb-1">
                        <p class="text-center" style="font-size: 12px">Don't have an account? <a href="{{ route('login') }}" class="border border-primary text-primary">Sign In</a></p>
                    </div>
                </div>

                <div class="col-md-6 offset-md-3">
                    <div class="py-4">
                        <div class="pb-2">
                            <h2 style="font-style: normal; font-weight: 700; font-size: 20px; line-height: 100%; letter-spacing: -0.3px; color: #0080E6;">Welcome to BuildBeta</h2>
                            <p style="font-style: normal; font-weight: 400; font-size: 12px; line-height: 100%; letter-spacing: -0.3px; color: #000000;">Pick a sign up option</p>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card select-sign-up-bg" style="border-radius: 0;">
                                <a href="{{ route('register') }}">
                                    <div class="card-body p-4">
                                        <h4 class="card-title mb-1" style="font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%; color: #000000;">Buyer</h4>
                                        <p class="card-text" style="font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; #000000">Signing up as a buyer into our platform allows you to get the best you need and also to get a reward for your patronage.</p>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card select-sign-up-bg" style="border-radius: 0;">
                                <a href="{{ route('seller.register') }}">
                                    <div class="card-body p-4">
                                        <h4 class="card-title mb-1" style="font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%; color: #000000;">Seller/Service provider</h4>
                                        <p class="card-text" style="font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; #000000">Numerous buyers are already looking for your products and services, sign up to meet them here.</p>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card select-sign-up-bg" style="border-radius: 0;">
                                <a href="{{ route('bbforce.register') }}">
                                    <div class="card-body p-4">
                                        <h4 class="card-title mb-1" style="font-style: normal; font-weight: 700; font-size: 16px; line-height: 160%; color: #000000;">BBForce Member</h4>
                                        <p class="card-text" style="font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; #000000">Convert your recommendations and referrals into cash as you earn on the go through our bbforce affiliate program.</p>
                                    </div>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
</x-guest-layout>
