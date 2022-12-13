@extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-md-7">
                
                <form class="shadow px-4 pt-1 pb-4" action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 class="py-3" style="font-style: normal; font-weight: 500; font-size: 16px; line-height: 160%;">Post Product Requirement</h4>
                    <div class="form-group">
                        <input type="text" name="purpose" id="purpose" class="form-control" placeholder="Purchase Purpose" style="font-size: 14px">
                    </div>
                    <div class="form-group">
                        <input type="text" name="requirement_title" id="requirement_title" class="form-control" placeholder="Requirement Title" style="font-size: 14px">
                    </div>
                    <div class="form-group">
                        <input type="text" name="qoutation_deadline" id="qoutation_deadline" class="form-control" placeholder="Qoutation deadline" style="font-size: 14px">
                    </div>
                    <div class="form-group">
                        <input type="text" name="terms_of_payment" id="terms_of_payment" class="form-control" placeholder="Terms of Payment" style="font-size: 14px">
                    </div>
                    <div class="form-group">
                        <input type="text" name="delivery_address" id="delivery_address" class="form-control" placeholder="Delivery Address" style="font-size: 14px">
                    </div>
                    <div class="form-group">
                        <input type="text" name="delivery_city" id="delivery_city" class="form-control" placeholder="Delivery City" style="font-size: 14px">
                    </div>
                    <div class="form-group">
                        <input type="text" name="no_of_qoutations" id="no_of_qoutations" class="form-control" placeholder="No of Qoutations" style="font-size: 14px">
                    </div>
                    <div class="form-group">
                        <input type="text" name="product_you_inquire" id="product_you_inquire" class="form-control" placeholder="Product you Inquire" style="font-size: 14px">
                    </div>
                    <div class="form-group">
                        <input type="file" name="attachment" id="attachment" class="form-control">
                    </div>

                    {{-- Add more --}}
                    <div class="more-btn mb-3 mt-3">
                        <label for="more" id="moreBtn" onclick="myFunction()" style="font-style: normal; font-weight: 400; font-size: 14px; line-height: 160%; color: #0080E6; cursor: pointer; user-select: none">Add More Needs</label>
                    </div>

                    <div class="more-div" style="display: none" id="moreDiv">
                        <div class="form-group">
                            {{-- Select --}}
                            <select name="product_you_inquire2" id="product_you_inquire2" class="form-control" style="font-size: 14px; height: 4.5rem">
                                <option value="">Product you Inquire</option>
                                <option value="">Select</option>
                                <option value="">Select</option>
                                <option value="">Select</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Quantity" style="font-size: 14px">
                        </div>
                        <div class="form-group">
                            <input type="text" name="unit_of_measurement" id="unit_of_measurement" class="form-control" placeholder="Unit of Measurement" style="font-size: 14px">
                        </div>
                        <div class="form-group">
                            <input type="text" name="budget" id="budget" class="form-control" placeholder="Budget" style="font-size: 14px">
                        </div>
                        <div class="form-group">
                            <input type="text" name="total_budget" id="total_budget" class="form-control" placeholder="Total Budget" style="font-size: 14px">
                        </div>

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn bb-bg-btn w-100">Post</button>
                    </div>
                </form>
            </div>

            <div class="col-md-5">
                List of Requirements sent last 30 days
            </div>
        </div>

        <script>
            function myFunction() {
              var moreBtn = document.getElementById("moreBtn");
              var moreDiv = document.getElementById("moreDiv");
              //if moreDiv is clicked
                if (moreDiv.style.display === "none") {
                    moreDiv.style.display = "block";
                    moreBtn.style.display = "block";
                } else {
                    moreDiv.style.display = "none";
                    moreBtn.style.display = "block";
                }
            }
            </script>
    @endsection