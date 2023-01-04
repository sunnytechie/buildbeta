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
                    <div class="p-5">
                        <p class="text-center">Don't have an account? <a href="{{ route('welcome') }}" class="text-primary" style="margin-left: 12px">Sign up</a></p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <div class="pt-5 pb-5">
                        <form class="mobile-arrange" method="POST" action="{{ route('login') }}">
                            @csrf

                            {{-- header --}}
                            <div class="justify-content-start mb-5">
                                <h4 style="color: #0080E6"><span style="font-weight: 700; line-height: 160%; font-style: normal; font-size: 25px;">Welcome to Build</span><span>Beta</span></h4>
                                <p style="font-size: 12px">Thank you for being here.</p>
                            </div>

                            {{-- email input with user icon on the left --}}
                            <div class="mb-3">
                                <input 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}"
                                id="email" name="email" 
                                aria-describedby="emailHelp" 
                                placeholder="Your email">

                                @if ($errors->has('email'))
                                    <div id="emailHelp" class="form-text text-danger">
                                        <div>{{ $errors->first('email') }}</div>
                                    </div>
                                @else
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> 
                                @endif
                            </div>

                            <div class="mb-3">
                                <input 
                                type="password" 
                                name="password" 
                                id="password" 
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Password">
                                @if ($errors->has('password'))
                                    <div id="emailHelp" class="form-text text-danger">
                                        <div>{{ $errors->first('password') }}</div>
                                    </div>
                                @endif

                            </div>
                            
                            <div class="d-flex justify-content-end">
                                <div class="pb-2">
                                    <a href="{{ route('password.request') }}" class="text-primary">Forgot password?</a>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="custom-switch form-switch mb-0">
                                        <input type="checkbox" name="remember" id="remember_me" class="custom-switch-input form-check-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Remember me</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary bb-bg-btn w-100">Submit</button>
                        </form>

                        <div class="mt-5 text-center show-only-mobile">
                            <div class="p-5">
                                <p class="text-center">Don't have an account? <a href="{{ route('welcome') }}" class="text-primary" style="margin-left: 10px">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>
