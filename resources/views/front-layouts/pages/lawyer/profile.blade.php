@extends('front-layouts.master-lawyer-layout')
@section('content')
    <form>
        <div class="widget">
            <div class="row">
                <div class="col-xl-6">
                    <h4 class="widget-title">Profile</h4>
                </div>
                <div class="form-group col-xl-6">
                    <div class="media align-items-center mb-3 d-flex">
                        <img class="user-image" src="{{ asset('front') }}/assets/img/provider/provider-01.jpg" alt="">
                        <div class="media-body">
                            <p class="mb-0">Advocate</p>
                            <h5 class="mb-0">{!! $user->name !!}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xl-6">
                <label class="me-sm-2">Name</label>
                <input class="form-control" type="text" value="{!! $user->name !!}" readonly="">
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2">Email</label>
                <input class="form-control" type="email" value="{!! $user->email !!}" readonly="">
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2">Country Code</label>
                <input class="form-control" type="text" value="+1" readonly="">
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2">Mobile Number</label>
                <input class="form-control no_only" type="text" value="{!! $user->phone !!}" readonly="" required="">
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2">Date of birth</label>
                <input type="text" class="form-control provider_datepicker" autocomplete="off" value="17-01-1996">
            </div>
            <div class="col-xl-12">
                <h5 class="form-title">Service Info</h5>
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2">What Service do you Provide?</label>
                <select class="form-control select provider_category form-select" title="Category">
                    <option>Automobile</option>
                    <option>Construction</option>
                    <option>Interior</option>
                    <option>Cleaning</option>
                    <option>Electrical</option>
                    <option>Carpentry</option>
                    <option>Computer</option>
                </select>
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2">Sub Category</label>
                <select class="form-control select provider_subcategory form-select" title="Sub Category">
                    <option>House Cleaning</option>
                    <option>Full Car Wash</option>
                    <option>Roofing</option>
                    <option>Indoor Glass</option>
                    <option>Convertible Fridge</option>
                    <option>Fridge</option>
                    <option>Car Wash</option>
                    <option>Others</option>
                </select>
            </div>
            <div class="col-xl-12">
                <h5 class="form-title">Address</h5>
            </div>
            <div class="form-group col-xl-12">
                <label class="me-sm-2">Address</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2">Country</label>
                <select class="form-control form-select">
                    <option>Select Country</option>
                    <option>Australia (+61)</option>
                    <option>France (+33)</option>
                    <option>Germany (+49)</option>
                    <option>Iceland (+354)</option>
                    <option>India (+91)</option>
                    <option>Romania (+40)</option>
                    <option>Russia (+7)</option>
                    <option>Spain (+34)</option>
                    <option>UK (+44)</option>
                    <option selected="">USA (+1)</option>
                </select>
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2">State</label>
                <select class="form-control form-select"></select>
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2">City</label>
                <select class="form-control form-select"></select>
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2">Postal Code</label>
                <input type="text" class="form-control" value="654587">
            </div>
            <div class="form-group col-xl-12">
                <button class="btn btn-primary ps-5 pe-5" type="submit">Update</button>
            </div>
        </div>
    </form>
@endsection
