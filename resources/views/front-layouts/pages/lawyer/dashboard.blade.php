@extends('front-layouts.master-lawyer-layout')
@section('content')
    <h4 class="widget-title">Dashboard</h4>
    <div class="row">
        <div class="col-lg-4">
            <a href="provider-bookings.html" class="dash-widget dash-bg-2">
                <span class="dash-widget-icon">{{$booking ?? 0}}</span>
                <div class="dash-widget-info">
                    <span>My Bookings</span>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="my-services.html" class="dash-widget dash-bg-2">
                <span class="dash-widget-icon">{{$service ?? 0}}</span>
                <div class="dash-widget-info">
                    <span>My Services</span>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="notifications.html" class="dash-widget dash-bg-2">
                <span class="dash-widget-icon">{{$category ?? 0}}</span>
                <div class="dash-widget-info">
                    <span>My Categories</span>
                </div>
            </a>
        </div>
    </div>
@endsection
