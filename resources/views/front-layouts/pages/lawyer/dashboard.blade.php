@extends('front-layouts.master-lawyer-layout')
@section('content')
    <h4 class="widget-title">Dashboard</h4>
    <div class="row">
        <div class="col-lg-4">
            <a href="{{route('lawyer.all.orders')}}" class="dash-widget dash-bg-2">
                <span class="dash-widget-icon">{{$booking ?? 0}}</span>
                <div class="dash-widget-info">
                    <span>My Order</span>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="{{route('lawyer.service.list')}}" class="dash-widget dash-bg-2">
                <span class="dash-widget-icon">{{$service ?? 0}}</span>
                <div class="dash-widget-info">
                    <span>My Services</span>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="{{route('lawyer.wallet')}}" class="dash-widget dash-bg-2">
                <span class="dash-widget-icon">{{$earning ?? 0}}</span>
                <div class="dash-widget-info">
                    <span>My Earnings</span>
                </div>
            </a>
        </div>
    </div>
@endsection
