@extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-md-4">
                
                <form class="shadow px-4 pt-1 pb-4" action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 class="py-3" style="font-style: normal; font-weight: 500; font-size: 16px; line-height: 160%;">Post Design Requirement</h4>
                  
                    <div class="form-group">
                        <input type="text" name="requirement_title" id="requirement_title" class="form-control" placeholder="Requirement Title" style="font-size: 14px">
                    </div>
                    {{-- Select design_service_type --}}
                    <div class="form-group">
                        <select name="design_service_type" id="design_service_type" class="form-control">
                            <option value="">Select Design Service Type</option>
                            <option value="1">Architectural Design</option>
                            <option value="2">Interior Design</option>
                            <option value="3">Landscape Design</option>
                            <option value="4">Building Design</option>
                            <option value="5">Structural Design</option>
                            <option value="6">Electrical Design</option>
                            <option value="7">Mechanical Design</option>
                            <option value="8">Civil Design</option>
                            <option value="9">Other</option>
                        </select>
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

            <div class="col-md-8">
                List of deigns sent to this plateform.
            </div>
        </div>
    @endsection