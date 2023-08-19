@extends('layouts.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Document Details</h3>
                    </div>
                    <div class="col-auto text-end">
                        <h3>{{ $lawyer->name ?? '' }}</h3>
                    </div>
                </div>
            </div>
            <hr>
            <!-- /Page Header -->
            <div class="row justify-content-between">
                <div class="col-3">
                    <label>Degree</label>
                    <a href="{{ $lawyer->degree }}" data-lightbox="image-gallery">
                        <img class="img-fluid" src="{{ $lawyer->degree }}" alt="Degree">
                    </a>
                </div>
                <div class="col-3">
                    <label>Profile Picture</label><br>
                    <a href="{{ $lawyer->image }}" data-lightbox="image-gallery">
                        <img src="{{ $lawyer->image }}" alt="Profile Pic">
                    </a>
                </div>
            </div>
            <hr>
            <div class="row justify-content-evenly">
                <label>Certificates</label><br>
                @foreach ($certificates as $key => $certificate)
                    <div class="col-3">
                        <a href="{{ $baseURL . $certificate }}" data-lightbox="image-gallery">
                            <img class="img-fluid" src="{{ $baseURL . $certificate }}" alt="Certificate">
                        </a>
                    </div>
                @endforeach
            </div>
            <hr>
            <div class="adminDiv pb-3">
                <form action="{{ route('admin.lawyer.document.approval') }}" method="POST">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-7">
                            <input type="hidden" name="lawyer_id" value="{{ $lawyer->id }}">
                            <div class="form-group">
                                <label>Approval</label>
                                <select class="form-control" name="approval" id="approval">
                                    <option value="pending">Pending</option>
                                    <option value="approved">Approved</option>
                                    <option value="rejected">Reject</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="reason">Reason <small>(Optional for approval)</small></label>
                                <textarea class="form-control" name="reason" id="reason" cols="30" rows="10"></textarea>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
