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
                <div class="d-flex justify-content-between">
                    {{-- Arrow Back to welcome --}}
                    <div class="pt-5 pb-1">
                        <a href="{{ route('welcome') }}" class="border border-primary text-primary">
                            <i class="fe fe-arrow-left" style="font-size: 20px"></i>
                        </a>
                    </div>
                    <div class="pt-5 pb-1">
                        <p class="text-center">Already have an account? <a href="{{ route('login') }}" class="border border-primary text-primary">Log in</a></p>
                    </div>
                </div>
            {{-- end text and button to the right --}}
            
            {{-- form --}}
                <div class="col-md-6 offset-md-3">
                    <div class="py-3">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            {{-- hidden user_type --}}
                            <input type="hidden" name="user_type" value="bbforce">
                            {{-- header --}}
                            <div class="justify-content-start mb-5">
                                <h4 style="color: #0080E6"><span style="font-weight: 700; line-height: 160%; font-style: normal; font-size: 25px;">Welcome to Build</span><span>Beta</span></h4>
                                <p>Thank you for being here</p>
                            </div>

                            {{-- two col in a row input name and username --}}
                            <div class="row">
                                    <div class="col-md-6 mb-3">
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

                            {{-- Country select --}}
                            <div class="mb-3">
                                <select class="form-control @error('country') is-invalid @enderror" name="country" id="country">
                                    <option selected disabled>Country</option>
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
                                    <option value="Spain">Spain</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Finland">Finland</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="Ireland">Ireland</option>
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
                                    <option value="Belarus">Belarus</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Turkey">Turkey</option>
                                </select>
                                @if ($errors->has('country'))
                                    <div id="textHelp" class="form-text text-danger">
                                        <div>{{ $errors->first('country') }}</div>
                                    </div>
                                @endif
                            </div>

                            {{-- Phone --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input 
                                    type="tel" 
                                    name="phone" 
                                    id="phone" 
                                    class="form-control @error('phone') is-invalid @enderror">
                                    @if ($errors->has('phone'))
                                        <div id="textHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('phone') }}</div>
                                        </div>
                                    @endif
                                </div>
                            
                                <!-- referral id -->
                                <div class="col-md-6 mb-3">
                                    <input 
                                    type="text" 
                                    name="referral_id" 
                                    id="referral_id" 
                                    class="form-control @error('referral_id') is-invalid @enderror"
                                    placeholder="Referral ID">
                                    @if ($errors->has('referral_id'))
                                        <div id="textHelp" class="form-text text-danger">
                                            <div>{{ $errors->first('referral_id') }}</div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Privacy policy checkbox --}}
                            <div class="form-group bb-check-link">
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-checkbox-md">
                                            <input type="checkbox" class="custom-control-input" name="agree" value="designers" required>
                                            <span class="custom-control-label" style="font-style: normal; font-weight: 400; font-size: 12px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">Yes, I understand and agree to the Buildbeta <a href="#">terms of service</a>, <a href="#">privacy policy</a>, <a href="#">privacy protection</a>, and <a href="#">permission introduction</a>.</span>
                                    </label>
                                </div>
                            </div>
                                                        
                            <button type="submit" class="btn bb-bg-btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>
