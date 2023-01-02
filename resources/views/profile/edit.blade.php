@extends('layouts.user') 
{{-- layouts.user is only used on the profile --}}
@section('content')
<div class="row">
    <div class="col-md-8">
        @include('profile.partials.update-profile-information-form')
    </div>
    <div class="col-md-8 col-offset-2">
        @include('profile.partials.update-password-form')
    </div>
    {{-- <div class="col-md-8 col-offset-2">
        @include('profile.partials.delete-user-form')
    </div> --}}
</div>

@endsection
