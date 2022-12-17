@extends('layouts.dashboard')
    @section('content')
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Delete, Block/ban or unblock user</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Escrows</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="d-flex justify-content-between card-header">
                        <h3 class="card-title">Transaction Table</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th class="wd-15p border-bottom-0">Transaction Status</th>
                                        <th class="wd-15p border-bottom-0">Transaction Reference Id</th>

                                        <th class="wd-15p border-bottom-0">Depositor Name</th>
                                        <th class="wd-15p border-bottom-0">Depositor Email</th>
                                        <th class="wd-15p border-bottom-0">Depositor Phone</th>
                                        <th class="wd-15p border-bottom-0">Depositor Address</th>
                                        <th class="wd-15p border-bottom-0">Depositor Country</th>
                                        <th class="wd-15p border-bottom-0">Depositor State</th>
                                        <th class="wd-15p border-bottom-0">Depositor City</th>
                                        <th class="wd-15p border-bottom-0">Depositor Zip</th>

                                        <th class="wd-15p border-bottom-0">beneficiary Name</th>
                                        <th class="wd-15p border-bottom-0">beneficiary Email</th>
                                        <th class="wd-15p border-bottom-0">beneficiary Phone</th>
                                        <th class="wd-15p border-bottom-0">beneficiary Address</th>
                                        <th class="wd-15p border-bottom-0">beneficiary Country</th>
                                        <th class="wd-15p border-bottom-0">beneficiary State</th>
                                        <th class="wd-15p border-bottom-0">beneficiary City</th>
                                        <th class="wd-15p border-bottom-0">beneficiary Zip</th>

                                        <th class="wd-15p border-bottom-0">Amount</th>
                                        <th class="wd-15p border-bottom-0">Currency</th>
                                        <th class="wd-15p border-bottom-0">Payment Method</th>

                                        <th class="wd-15p border-bottom-0">Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @php
                                            $id = 1;
                                        @endphp
                                    @foreach ($escrows as $escrow)
                                        <tr>

                                            <td>{{ $id++ }}</td>
                                            <td>{{ $escrow->status }}</td>
                                            <td>{{ $escrow->transaction_id }}</td>

                                            <td>{{ $escrow->depositor_name }}</td>
                                            <td>{{ $escrow->depositor_email }}</td>
                                            <td>{{ $escrow->depositor_phone }}</td>
                                            <td>{{ $escrow->depositor_address }}</td>
                                            <td>{{ $escrow->depositor_country }}</td>
                                            <td>{{ $escrow->depositor_state }}</td>
                                            <td>{{ $escrow->depositor_city }}</td>
                                            <td>{{ $escrow->depositor_zip }}</td>

                                            <td>{{ $escrow->beneficiary_name }}</td>
                                            <td>{{ $escrow->beneficiary_email }}</td>
                                            <td>{{ $escrow->beneficiary_phone }}</td>
                                            <td>{{ $escrow->beneficiary_address }}</td>
                                            <td>{{ $escrow->beneficiary_country }}</td>
                                            <td>{{ $escrow->beneficiary_state }}</td>
                                            <td>{{ $escrow->beneficiary_city }}</td>
                                            <td>{{ $escrow->beneficiary_zip }}</td>

                                            <td>{{ $escrow->amount }}</td>
                                            <td>{{ $escrow->currency }}</td>
                                            <td>{{ $escrow->payment_method }}</td>

                                            <td>{{ $escrow->created_at->diffForHumans() }}</td>
                                            
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