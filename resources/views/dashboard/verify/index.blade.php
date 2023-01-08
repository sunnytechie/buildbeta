@extends('layouts.dashboard')
    @section('content')
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Unverified Users</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="d-flex justify-content-between card-header">
                        <h3 class="card-title">Unverified Sellers/Service Providers</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Verify</th>
                                        <th class="wd-15p border-bottom-0">Full Name</th>
                                        <th class="wd-15p border-bottom-0">Username</th>
                                        <th class="wd-15p border-bottom-0">Email</th>
                                        <th class="wd-15p border-bottom-0">Service Provider Type</th>
                                        <th class="wd-15p border-bottom-0">Business Name</th>
                                        <th class="wd-15p border-bottom-0">Joined on</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @php
                                            $id = 1;
                                        @endphp
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $id++ }}</td>
                                            <td style="text-align: center">
                                                {{-- group edit and delete Icon --}}
                                                <div class="btn-group">
                                                    <form method="POST" action="{{ route('users.approve', $user->id) }}">
                                                        @csrf
                                                        <button type="submit" onclick="return confirm('Are you sure you want to verified this user?')" class="btn btn-sm btn-danger"><ion-icon name="shield-checkmark-outline"></ion-icon></button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->seller->provider->title }}</td>
                                            <td>{{ $user->seller->business_name }}</td>
                                            <td>{{ $user->created_at->diffForHumans() }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    @endsection