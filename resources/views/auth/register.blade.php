<x-guest-layout>
    <div class="container-fluid">
        <div class="row">
           {{-- intro screen --}}
            <div class="col-md-4 text-white" style="height: 100vh; background-image: url('{{ asset("general/imgs/intro_bg.jpg") }}'); background-size: cover;">
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
                        <p class="text-center">Already have an account? <a href="{{ route('login') }}" class="border border-primary text-primary">Log in</a></p>
                    </div>
                </div>
            {{-- end text and button to the right --}}
            {{-- form --}}
                <div class="col-md-6 offset-md-3">
                    <div class="pt-2 pb-2">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            {{-- header --}}
                            <div class="justify-content-start mb-5">
                                <h4 style="color: #0080E6"><span style="font-weight: 700; line-height: 160%; font-style: normal; font-size: 25px;">Welcome to Build</span><span>Beta</span></h4>
                                <p>Thank you for being here</p>
                            </div>

                            {{-- two col in a row input name and username --}}
                            <div class="row">
                                    <div class="col-md-6">
                                <!-- Name -->
                                    <input 
                                    type="text" 
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}"
                                    id="name" name="name" 
                                    aria-describedby="nameHelp" 
                                    placeholder="Full Name">
                                    @if ($errors->has('name'))
                                        <div id="nameHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('name') }}</div>
                                        </div>
                                    @endif
                                </div>

                                <!-- Username -->
                                <div class="col-md-6 mb-3">
                                    <input 
                                    type="text" 
                                    class="form-control @error('username') is-invalid @enderror"
                                    value="{{ old('username') }}"
                                    id="username" name="username" 
                                    aria-describedby="usernameHelp" 
                                    placeholder="Username">
                                    @if ($errors->has('username'))
                                        <div id="usernameHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('username') }}</div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 mt-2">
                                <input 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}"
                                id="email" name="email" 
                                aria-describedby="emailHelp" 
                                placeholder="Email">
                                @if ($errors->has('email'))
                                    <div id="emailHelp" class="form-text text-danger">
                                        <div>{{ $errors->first('email') }}</div>
                                    </div>
                                @else
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> 
                                @endif
                            </div>

                            {{-- two col in a row input --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input 
                                    type="password" 
                                    class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" 
                                    aria-describedby="passwordHelp" 
                                    placeholder="Password">
                                    @if ($errors->has('password'))
                                        <div id="passwordHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('password') }}</div>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input 
                                    type="password" 
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    id="password_confirmation" name="password_confirmation" 
                                    aria-describedby="password_confirmationHelp" 
                                    placeholder="Confirm Password">
                                    @if ($errors->has('password_confirmation'))
                                        <div id="password_confirmationHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('password_confirmation') }}</div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        
                            <!-- referral id -->
                            <div class="mb-5">
                                <input 
                                type="text" 
                                name="referral_id" 
                                id="referral_id" 
                                class="form-control @error('referral_id') is-invalid @enderror"
                                placeholder="Referral ID">
                                @if ($errors->has('referral_id'))
                                    <div id="emailHelp" class="form-text text-danger">
                                        <div>{{ $errors->first('referral_id') }}</div>
                                    </div>
                                @endif
                            </div>
                                                        
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>
