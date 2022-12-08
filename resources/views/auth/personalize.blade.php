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
            
                <div class="col-md-7 offset-md-2">
                    <div class="personalize py-3">
                        <p class="py-4" style="font-style: normal; font-weight: 400; font-size: 16px; line-height: 160%; letter-spacing: -0.3px; color: #000000;">What are you looking for?</p>
                        <form action="{{ route('store.personalize') }}" method="POST">
                            @csrf
                            {{-- many select radio button --}}

                            <div class="form-group">
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-checkbox-md">
                                            <input type="checkbox" class="custom-control-input" name="designers" value="1" checked>
                                            <span class="custom-control-label">Designers (Architectural Designers, Interior Designers, 3D Model Makers etc)</span>
                                    </label>
                                    <label class="custom-control custom-checkbox-md">
                                            <input type="checkbox" class="custom-control-input" name="contractors" value="1">
                                            <span class="custom-control-label">Contractors (Builders, Furniture Makers, etc.)</span>
                                    </label>
                                    <label class="custom-control custom-checkbox-md">
                                            <input type="checkbox" class="custom-control-input" name="buildings" value="1">
                                            <span class="custom-control-label">Building Materials (Tiles, Furniture and Accessories, Sanitary Wares, etc.)</span>
                                    </label>
                                    <label class="custom-control custom-checkbox-md">
                                            <input type="checkbox" class="custom-control-input" name="services" value="1">
                                            <span class="custom-control-label">Service Providers (CCTV Installation, Janitors, and Cleaning Services, etc.)</span>
                                    </label>
                                    <label class="custom-control custom-checkbox-md">
                                            <input type="checkbox" class="custom-control-input" name="artisans" value="1">
                                            <span class="custom-control-label">Artisans (Carpenters, Plumbers, Painters, Ceiling POP, Bricklayers, Site Workers, etc.)</span>
                                    </label>
                                    <label class="custom-control custom-checkbox-md">
                                            <input type="checkbox" class="custom-control-input" name="wares" value="1">
                                            <span class="custom-control-label">Home and Office Wares (Furniture, Tables, Electronics, etc.)</span>
                                    </label>
                                    <label class="custom-control custom-checkbox-md">
                                            <input type="checkbox" class="custom-control-input" name="properties" value="1">
                                            <span class="custom-control-label">Properties (To Buy, To Let, To Lease, etc.)</span>
                                    </label>
                                    <label class="custom-control custom-checkbox-md">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox12" value="option12" id="myCheck" onclick="myFunction()">
                                            <span class="custom-control-label">Others</span>
                                    </label>

                                    <div id="text" style="display:none">
                                        <input type="text" class="form-control" name="others" placeholder="Enter your service">
                                    </div>

                                    <button class="btn bb-bg-btn mt-2 text-white">Personalize</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function myFunction() {
              var checkBox = document.getElementById("myCheck");
              var text = document.getElementById("text");
              if (checkBox.checked == true){
                text.style.display = "block";
              } else {
                 text.style.display = "none";
              }
            }
            </script>
</x-guest-layout>
