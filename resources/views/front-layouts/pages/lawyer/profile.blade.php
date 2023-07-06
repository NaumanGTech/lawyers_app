@extends('front-layouts.master-lawyer-layout')
@section('injected-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-xxxxx" crossorigin="anonymous" />
    <style>
        .dropdown-toggle.btn-default {
            color: #292b2c;
            background-color: #fff;
            border-color: #ccc;
        }

        .bootstrap-select.show>.dropdown-menu>.dropdown-menu {
            display: block;
        }

        .bootstrap-select>.dropdown-menu>.dropdown-menu li.hidden {
            display: none;
        }

        .bootstrap-select>.dropdown-menu>.dropdown-menu li a {
            display: block;
            width: 100%;
            padding: 3px 1.5rem;
            clear: both;
            font-weight: 400;
            color: #292b2c;
            text-align: inherit;
            white-space: nowrap;
            background: 0 0;
            border: 0;
            text-decoration: none;
        }

        .bootstrap-select>.dropdown-menu>.dropdown-menu li a:hover {
            background-color: #f4f4f4;
        }

        .bootstrap-select>.dropdown-toggle {
            width: 100%;
        }

        .dropdown-menu>li.active>a {
            color: #fff !important;
            background-color: #337ab7 !important;
        }

        .bootstrap-select .check-mark {
            line-height: 14px;
        }

        .bootstrap-select .check-mark::after {
            font-family: "FontAwesome";
            content: "\f00c";
        }

        .bootstrap-select button {
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Make filled out selects be the same size as empty selects */
        .bootstrap-select.btn-group .dropdown-toggle .filter-option {
            display: inline !important;
        }

        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: -18px 10px;

            .avatar-edit {
                position: absolute;
                right: 0px;
                z-index: 1;
                top: 0px;

                input {
                    display: none;

                    +label {
                        display: inline-block;
                        width: 34px;
                        height: 34px;
                        margin-bottom: 0;
                        border-radius: 100%;
                        background: #FFFFFF;
                        border: 1px solid transparent;
                        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                        cursor: pointer;
                        font-weight: normal;
                        transition: all .2s ease-in-out;

                        &:hover {
                            background: #f1f1f1;
                            border-color: #d6d6d6;
                        }

                        &:after {
                            content: "\f040";
                            font-family: 'FontAwesome';
                            color: #757575;
                            position: absolute;
                            top: 10px;
                            left: 0;
                            right: 0;
                            text-align: center;
                            margin: auto;
                        }
                    }
                }
            }

            .avatar-preview {
                width: 160px;
                height: 160px;
                position: relative;
                border-radius: 30%;
                border: 5px solid black;
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);

                >div {
                    width: 100%;
                    height: 100%;
                    border-radius: 30%;
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                }
            }
        }

        .avatar-upload {
            position: relative;
            max-width: 200px;
        }

        .avatar-edit {
            position: absolute;
            right: 12px;
            bottom: 12px;
        }

        .avatar-edit label {
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: black;
            padding: 0.05rem 0.4rem;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 20px;
            text-align: center;
            line-height: 32px;
        }

        .avatar-preview {
            width: 200px;
            height: 200px;
            position: relative;
            overflow: hidden;
            border-radius: 50%;
        }

        .avatar-preview div {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .fa-pencil {
            margin-top: 7px;
        }
    </style>
@endsection
@section('content')
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
                                <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg" hidden />
                                <label for="imageUpload" class="btn btn-primary" class="pencil-lable"><i
                                        class="fas fa-pencil-alt"></i>
                                </label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);"></div>
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
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2 black_label">Email</label>
                <input class="form-control black_input" name="email" type="email" value="{!! $user->email !!}">
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2 black_label">Mobile Number</label>
                <input class="form-control black_input no_only" name="phone" type="text" value="{!! $user->phone !!}" required>
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2 black_label">Date of birth</label>
                <input type="date" class="form-control black_input white-date-input provider_datepicker" autocomplete="off"
                    onchange="validateBirthdate(event)" name="date_of_birth" value="{!! $user->date_of_birth !!}">
                <small id="birthdateError" class="form-text text-danger"></small>
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2 black_label">Gender</label>
                <select class="form-control form-select black_input" name="gender">
                    <option>Select Gender</option>
                    <option value="male" {{ $user->gender === 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $user->gender === 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ $user->gender === 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            <div class="col-xl-12">
                <h5 class="form-title">Address Information</h5>
            </div>
            <div class="form-group col-xl-12">
                <label class="me-sm-2 black_label">Address</label>
                <input type="text" name="address" class="form-control black_input" value="{{ $user->address ?? ""}}">
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2" for="country">Country</label>
                <input class="form-control black_input" type="text" name="country" value="{!! $user->country !!}">
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2 black_label" for="city">City</label>
                <input class="form-control black_input" type="text" name="city" value="{!! $user->city !!}">
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2 black_label" for="state">State</label>
                <input class="form-control black_input" type="text" name="state" value="{!! $user->city !!}">
            </div>
            <div class="form-group col-xl-6">
                <label class="me-sm-2 black_label" for="postal_code">Postal Code</label>
                <input type="text" class="form-control black_input" name="postal_code" value="{{ $user->postal_code ?? ""}}">
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
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
    </script>
@endsection
