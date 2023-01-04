<div class="border-0 py-4 px-5 d-flex justify-content-between show-only-mobile" style="box-shadow: 0px -1px 10px rgba(0, 0, 0, 0.25); position: fixed; bottom: 0; width: 100%; z-index: 999; background: #ffffff">
    <div class="sticky-info border-0" style="width: auto">
        <a href="/">
            <img style="margin: 0 auto" height="26" width="26" src="{{ asset('general/imgs/icons/home-blue.svg') }}" alt=""><span style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 10px; line-height: 120%; letter-spacing: -0.3px; color: #000000;">Home</span>
        </a>
    </div>

    <div class="sticky-info border-0" style="width: auto">
        <a href="{{ route('browse') }}">
            <img style="margin: 0 auto" height="26" width="26" src="{{ asset('general/imgs/icons/product.svg') }}" alt=""><span style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 10px; line-height: 120%; letter-spacing: -0.3px; color: #000000;">Products</span>
        </a>
    </div>

    {{-- If not quest --}}
    @if (Auth::check())
    @if (Auth::user()->is_seller == 1)
    <div class="sticky-info border-0" style="width: auto">
        <a href="{{ route('product.dashboard') }}">
            <img style="margin: 0 auto" height="26" width="26" src="{{ asset('general/imgs/icons/post.svg') }}" alt=""><span class="pl-1" style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 10px; line-height: 120%; letter-spacing: -0.3px; color: #000000;">Post</span>
        </a>
    </div>
    @endif
    @endif

    <div class="sticky-info border-0" style="width: auto">
        <a href="{{ route('job') }}">
            <img style="margin: 0 auto" height="26" width="26" src="{{ asset('general/imgs/icons/job.svg') }}" alt=""><span style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 10px; line-height: 120%; letter-spacing: -0.3px; color: #000000;">Jobs</span>
        </a>
    </div>

    <div class="sticky-info border-0" style="width: auto">
        <a href="{{ route('seller.dashboard') }}">
            <img style="margin: 0 auto" height="26" width="26" src="{{ asset('general/imgs/icons/dashboard.svg') }}" alt=""><span style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 10px; line-height: 120%; letter-spacing: -0.3px; color: #000000;">Dashboard</span>
        </a>
    </div>
</div>