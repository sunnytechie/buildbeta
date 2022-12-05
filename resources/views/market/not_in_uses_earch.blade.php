@extends('layouts.app')
@section('content')
<form action="#" method="get">
    <div class="header-search-wrapper">
        <input type="search" class="form-control bg-white" name="q" id="qq" placeholder="Search..." required>
        <div class="select-custom bg-white">
            <select id="category" name="cat">
                <option>All Categories</option>
                <option>Constructions</option>
            </select>
        </div>
        <!-- End .select-custom -->
        <button class="btn icon-magnifier pb-1 bg-white" type="submit" title="Search"></button>
    </div>
    <!-- End .header-search-wrapper -->
</form>
@endsection