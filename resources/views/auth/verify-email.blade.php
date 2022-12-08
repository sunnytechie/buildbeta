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

            <div class="col-md-8" style="height: 100vh">
            {{-- text and button to the right --}}
                <div class="d-flex justify-content-end">
                    <div class="p-5">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <p class="text-center">Not ready? <button type="submit" class="btn"><i class="fe fe-log-out"></i> Sign Out</button></p>
                        </form>
                    </div>
                </div>
                
                
            {{-- end text and button to the right --}}
            {{-- form --}}
                <div class="col-md-6 offset-md-3">
                    <div class="pt-2 pb-5">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            {{-- header --}}
                            <div class="justify-content-start mb-5">
                                <h4 style="color: #0080E6"><span style="font-weight: 700; line-height: 160%; font-style: normal; font-size: 25px;">Welcome to Build</span><span>Beta</span></h4>
                                <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
                                @if (session('status') == 'verification-link-sent')
                                    <p class="text-success py-3">
                                        A new verification link has been sent to the email address you provided during registration.
                                    </p>
                                @endif
                            </div>

                            
                            <button type="submit" class="btn btn-primary bb-bg-btn w-100">Resend Verification Email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>
