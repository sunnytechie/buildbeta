@extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-md-6 offset-md-3">
                
                <form class="shadow px-4 pt-1 pb-4" action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 class="py-3" style="font-style: normal; font-weight: 500; font-size: 16px; line-height: 160%;">Post Design Requirement</h4>
                  
                    <div class="form-group">
                        <input type="text" name="requirement_title" id="requirement_title" class="form-control" placeholder="Requirement Title" style="font-size: 14px">
                    </div>
                    <div class="form-group">
                        <input type="text" name="design_service_type" id="design_service_type" class="form-control" placeholder="Design Service Type" style="font-size: 14px">
                    </div>
                    <div class="form-group">
                        <input type="text" name="grade_of_decoration" id="grade_of_decoration" class="form-control" placeholder="Grade of Decoration" style="font-size: 14px">
                    </div>
                    <div class="form-group">
                        <input type="text" name="no_of_intensions" id="no_of_intensions" class="form-control" placeholder="Number of intensions" style="font-size: 14px">
                    </div>
                    <div class="form-group">
                        <input type="text" name="submission_deadline" id="submission_deadline" class="form-control" placeholder="Submission Deadline" style="font-size: 14px">
                    </div>
                    <div class="form-group">
                        <input type="text" name="project_location" id="project_location" class="form-control" placeholder="Project Location" style="font-size: 14px">
                    </div>
                   
                    <div class="form-group">
                        <input type="file" name="attachment" id="attachment" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn bb-bg-btn w-100">Post</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection