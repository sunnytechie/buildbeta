@extends('layouts.app')
    @section('content')
    <style>
        .mobile-tab {
            display: none !important;
        }
    </style>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                
                <form class="shadow px-4 pt-1 pb-4" action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 class="py-3" style="font-style: normal; font-weight: 500; font-size: 16px; line-height: 160%;">Post Job</h4>
                  
                    <div class="form-group">
                        <input type="text" name="title" id="title" class="form-control" placeholder="Job Title" style="font-size: 14px">
                    </div>
                    <div class="form-group">
                            <textarea class="form-control border border-primary" placeholder="Job description..." name="description" id="description" cols="10" rows="3" style="font-size: 14px"></textarea>
                    </div>
                    <div class="form-group">
                        {{-- select job type --}}
                        <select name="job_type" id="job_type" class="form-control py-2" style="height: 40px">
                            <option value="">Select Job Type</option>
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                            <option value="Contract">Contract</option>
                            <option value="Internship">Internship</option>
                            <option value="Temporary">Temporary</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="locatiion" id="locatiion" class="form-control" placeholder="Location" style="font-size: 14px">
                    </div>
                    <div class="form-group">
                        {{-- select experience level --}}
                        <select name="experience_level" id="experience_level" class="form-control py-2" style="height: 40px">
                            <option value="">Select Experience Level</option>
                            <option value="Entry Level">Entry Level</option>
                            <option value="Intermediate Level">Intermediate Level</option>
                            <option value="Senior Level">Senior Level</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control border border-primary" name="responsibilities" id="responsibilities" cols="10" rows="3" placeholder="Responsibilities" style="font-size: 14px;"></textarea>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control border border-primary" placeholder="Requirements" name="requirements" id="requirements" cols="10" rows="3" style="font-size: 14px"></textarea>
                    </div>
                   

                    <div class="form-group">
                        <button type="submit" class="btn bb-bg-btn w-100">Post</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection