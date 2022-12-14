@extends('layouts.dashboard')
    @section('content')
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Delete, Block/ban or unblock user</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sellers</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="d-flex justify-content-between card-header">
                        <h3 class="card-title">Sellers/Service Providers</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th class="wd-15p border-bottom-0">Full Name</th>
                                        <th class="wd-15p border-bottom-0">Username</th>
                                        <th class="wd-15p border-bottom-0">Email</th>
                                        <th class="wd-15p border-bottom-0">Service Provider Type</th>
                                        <th class="wd-15p border-bottom-0">Joined on</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @php
                                            $id = 1;
                                        @endphp
                                    @foreach ($sellers as $seller)
                                        <tr>
                                            <td>{{ $id++ }}</td>
                                            <td>{{ $seller->user->name }}</td>
                                            <td>{{ $seller->user->username }}</td>
                                            <td>{{ $seller->user->email }}</td>
                                            <td>{{ $seller->provider->title }}</td>
                                            <td>{{ $seller->created_at->diffForHumans() }}</td>
                                            <td>
                                                {{-- group edit and delete Icon --}}
                                                <div class="btn-group">
                                                    @if($seller->is_banned == 0)
                                                    <form method="post" action="{{ route('users.ban', $seller->id) }}">
                                                        @csrf
                                                        <button type="submit" onclick="return confirm('Are you sure you want to block this user?')" class="btn btn-sm btn-danger" style="border-top-right-radius: 0; border-bottom-right-radius: 0"><i class="fe fe-alert-triangle"></i></button>
                                                    </form>
                                                    @else
                                                    <form method="post" action="{{ route('users.unban', $seller->id) }}">
                                                        @csrf
                                                        <button type="submit" onclick="return confirm('Are you sure you want to unblock this user?')" class="btn btn-sm btn-success" style="border-top-right-radius: 0; border-bottom-right-radius: 0"><i class="fe fe-alert-triangle"></i></button>
                                                    </form>
                                                    @endif

                                                    <form method="post" action="{{ route('users.destroy', $seller->id) }}">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-sm btn-danger" style="border-top-left-radius: 0; border-bottom-left-radius: 0"><i class="fe fe-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>

                                           
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