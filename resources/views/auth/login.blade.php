<x-guest-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 bg-primary text-white" style="height: 100vh">Design</div>

            <div class="col-md-8" style="height: 100vh">
            {{-- text and button to the right --}}
                <div class="d-flex justify-content-end">
                    <div class="p-5">
                        <p class="text-center">Don't have an account? <a href="{{ route('register') }}" class="border border-primary text-primary">Sign up</a></p>
                    </div>
                </div>
            {{-- end text and button to the right --}}
            {{-- form --}}
                <div class="col-md-6 offset-md-3">
                    <div class="pt-2 pb-2">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            {{-- header --}}
                            <div class="justify-content-start mb-5">
                                <h4 style="color: #0080E6"><span style="font-weight: 700; line-height: 160%; font-style: normal; font-size: 20px;">Welcome to Build</span><span>Beta</span></h4>
                                <p>Thank you for being here</p>
                            </div>

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
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>
