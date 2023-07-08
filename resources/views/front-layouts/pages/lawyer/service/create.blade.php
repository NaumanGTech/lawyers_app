@extends('front-layouts.master-lawyer-layout')
@section('injected-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-xxxxx" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/custom.css">
@endsection
@section('content')
    @if (session('message'))
        <div id="flash-message" class="mb-3">
            @include('flash::message')
        </div>
    @endif
    <form action="{{ route('lawyer.profile.submit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="widget">
            <div class="row">
                <div class="col-xl-6">
                    <h4 class="widget-title">Profile</h4>
                </div>
                <div class="form-group col-xl-6">
                    <div class="media align-items-center mb-3 d-flex">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type="file" id="imageUpload" name="image" accept=".png, .jpg, .jpeg" hidden />
                                <label for="imageUpload" class="btn btn-primary" class="pencil-lable"><i
                                        class="fas fa-pencil-alt"></i>
                                </label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url({{ $user->image ?? '' }});"></div>
                            </div>
                        </div>
                        <div class="media-body">
                            <p class="mb-0">Advocate</p>
                            <h5 class="mb-0">{!! $user->name !!}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <h5 class="form-title">Personal Information</h5>
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2 black_label">Name</label>
                <input class="form-control black_input" name="name" type="text" value="{!! $user->name !!}">
                @error('name')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2 black_label">Email</label>
                <input class="form-control black_input" name="email" type="email" value="{!! $user->email !!}">
                @error('email')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2 black_label">Mobile Number</label>
                <input class="form-control black_input no_only" name="phone" type="text"
                    value="{!! $user->phone !!}" required>
                @error('phone')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2 black_label">Date of birth</label>
                <input type="date" class="form-control black_input white-date-input provider_datepicker"
                    autocomplete="off" onchange="validateBirthdate(event)" name="date_of_birth"
                    value="{!! $user->date_of_birth !!}">
                <small id="birthdateError" class="form-text text-danger"></small>
                @error('date')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2 black_label">Gender</label>
                <select class="form-control form-select black_input" name="gender">
                    <option>Select Gender</option>
                    <option value="male" {{ $user->gender === 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $user->gender === 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ $user->gender === 'other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('gender')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-xl-12">
                <h5 class="form-title">Address Information</h5>
            </div>
            <div class="form-group col-xl-12">
                <label class="me-sm-2 black_label">Address</label>
                <input type="text" name="address" class="form-control black_input" value="{{ $user->address ?? '' }}">
                @error('address')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2" for="country">Country</label>
                <input class="form-control black_input" type="text" name="country" value="{!! $user->country !!}">
                @error('country')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2 black_label" for="city">City</label>
                <input class="form-control black_input" type="text" name="city" value="{!! $user->city !!}">
                @error('city')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2 black_label" for="state">State</label>
                <input class="form-control black_input" type="text" name="state" value="{!! $user->state !!}">
                @error('state')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2 black_label" for="postal_code">Postal Code</label>
                <input type="text" class="form-control black_input" name="postal_code"
                    value="{{ $user->postal_code ?? '' }}">
                @error('postal_code')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-xl-12">
                <button class="btn btn-primary ps-5 pe-5 update_button" type="submit">Update</button>
            </div>
        </div>
    </form>
@endsection
@section('injected-scripts')
    <script>
        $('.countrypicker').countrypicker();
    </script>
    <script>
        setTimeout(function() {
            document.getElementById('flash-message').style.display = 'none';
        }, 3000);
    </script>
    <script>
        $(document).ready(function() {
            var currentDate = new Date();
            // Format the date as "YYYY-MM-DD"
            var formattedDate = currentDate.toISOString().split('T')[0];
            // Set the max attribute of the birthdate input field
            document.getElementById('provider_datepicker').max = formattedDate;
        });

        function validateBirthdate(event) {
            let date = event.target.value;
            var birthdateError = document.getElementById('birthdateError');

            var currentDate = new Date();
            var selectedDate = new Date(date);

            // Calculate the minimum allowed birthdate (18 years ago)
            var minBirthdate = new Date();
            minBirthdate.setFullYear(currentDate.getFullYear() - 18);

            if (selectedDate > minBirthdate) {
                birthdateError.textContent = 'You must be at least 18 years old.';
                $('.update_button').prop('disabled', true);
            } else {
                birthdateError.textContent = '';
                $('.update_button').prop('disabled', false);
                // Date is valid, continue with further processing or form submission
            }
        }
    </script>
    <script src="{{ asset('front') }}/assets/js/custom.js"></script>
@endsection
