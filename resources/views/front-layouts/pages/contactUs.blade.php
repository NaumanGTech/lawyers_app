@extends('front-layouts.master-layout')
@section('content')
    @if (session('message'))
        <div id="flash-message" class="mb-3">
            @include('flash::message')
        </div>
    @endif
    <div class="breadcrumb-bar" style="padding: 1.5rem 0;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-title">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-auto float-end ms-auto breadcrumb-menu">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('front') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <section class="contact-us">
        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="contact-queries">
                            <h4 class="mb-4 text-center">Drop your Queries</h4>
                            <form action="{{ route('contact.us.submit') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-xl-6">
                                        <label class="me-sm-2 black_label">Full Name</label>
                                        <input class="form-control black_input" name="name" type="text" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group col-xl-6">
                                        <label class="me-sm-2 black_label">Email</label>
                                        <input class="form-control black_input" name="email" type="email" required>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group col-xl-12">
                                        <label class="me-sm-2 black_label">Message</label>
                                        <textarea class="form-control black_input" name="message" rows="5" required></textarea>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="col-xl-12 mb-4">
                                        <button class="btn btn-primary btn-lg ps-5 pe-5" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('injected-scripts')
    <script>
        setTimeout(function() {
            document.getElementById('flash-message').style.display = 'none';
        }, 3000);
    </script>
@endsection
