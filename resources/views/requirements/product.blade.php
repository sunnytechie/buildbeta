@extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-md-6 offset-md-3">
                
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

                    <div class="form-group">
                        <button type="submit" class="btn bb-bg-btn w-100">Post</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection