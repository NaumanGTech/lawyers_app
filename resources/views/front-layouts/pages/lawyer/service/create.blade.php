@extends('front-layouts.master-lawyer-layout')
@section('injected-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-xxxxx" crossorigin="anonymous" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.16/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/custom.css">
    <style>
        .multiselect-container {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            max-height: 200px;
            overflow-y: auto;
        }

        .multiselect-container li a label {
            display: flex;
            align-items: center;
            margin-bottom: 0;
        }

        .multiselect-container li a .checkbox {
            margin-right: 10px;
        }

        .multiselect-container li.active a .checkbox:before {
            content: '\2713';
            font-size: 12px;
            color: #ffffff;
            background-color: #007bff;
            padding: 2px;
            border-radius: 3px;
        }
    </style>
@endsection
@section('content')
    @if (session('message'))
        <div id="flash-message" class="mb-3">
            @include('flash::message')
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-header text-center">
                    <h2>Add Service</h2>
                </div>
                <form action="{{ route('lawyer.service.store', $id) }}" method="POST">
                    @csrf
                    <div class="service-fields mb-3">
                        <h3 class="heading-2">Service Information</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="black_label">Service Title <span class="text-danger">*</span></label>
                                    <input class="form-control black_input" type="text" name="title" required>
                                    @error('title')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="black_label">Service Location <span class="text-danger">*</span></label>
                                    <input class="form-control black_input" type="text" name="location" required>
                                    @error('location')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="me-sm-2 black_label">Select a Category for this service</label>
                                    <select class="form-control form-select black_input" name="category_id" id="categories"
                                        required multiple="multiple">
                                        <option>Select Category</option>
                                        <option>Select Category</option>
                                        <option>Select Category</option>
                                        <option>Select Category</option>
                                        <option>Select Category</option>
                                        <option>Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="black_label">Service Amount <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"
                                        style="background-color: #393a3c; color:white; border: 1px solid #393a3c;">PKR</span>
                                    <input type="text" class="form-control black_input" name="amount" aria-label="PKR"
                                        required>
                                    @error('amount')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-fields mb-3">
                        <h3 class="heading-2">Service Timming</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="black_label">Starting Day of the week<span
                                            class="text-danger ">*</span></label>
                                    <select class="form-control form-select black_input" name="starting_day"
                                        id="starting_day">
                                        <option selected disabled>Select A Day</option>
                                        <option value="monday">Monday</option>
                                        <option value="tuesday">Tuesday</option>
                                        <option value="wednessday">Wednessday</option>
                                        <option value="thursday">Thursday</option>
                                        <option value="friday">Friday</option>
                                        <option value="saturday">Saturday</option>
                                        <option value="sunday">Sunday</option>
                                    </select>
                                    @error('starting_day')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="black_label">Ending Day of the week<span
                                            class="text-danger ">*</span></label>
                                    <select class="form-control form-select black_input" name="ending_day" id="ending_day">
                                        <option selected disabled>Select A Day</option>
                                        <option value="monday">Monday</option>
                                        <option value="tuesday">Tuesday</option>
                                        <option value="wednessday">Wednessday</option>
                                        <option value="thursday">Thursday</option>
                                        <option value="friday">Friday</option>
                                        <option value="saturday">Saturday</option>
                                        <option value="sunday">Sunday</option>
                                    </select>
                                    @error('ending_day')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="black_label">Start Time<span class="text-danger ">*</span></label>
                                    <input class="form-control black_input" type="text" name="start_time" required>
                                    @error('start_time')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="black_label">End Time<span class="text-danger ">*</span></label>
                                    <input class="form-control black_input" type="text" name="end_time" required>
                                    @error('end_time')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-0">
                                    <label class="black_label">Do you want to add an extra day?<span
                                            class="text-danger ">*</span></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input black_input" type="radio" name="add_extra_day"
                                        id="Yes" value="1">
                                    <label class="form-check-label black_label" for="Yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input black_input" type="radio" name="add_extra_day"
                                        id="No" value="0">
                                    <label class="form-check-label black_label" for="No">No</label>
                                </div>
                            </div>
                            <div class="col-lg-6" id="extra_day_div">
                                <div class="form-group">
                                    <label class="black_label">Select Day<span class="text-danger ">*</span></label>
                                    <select class="form-control form-select black_input" name="extra_day" id="extra_day">
                                        {{-- <option value="monday">Monday</option>
                                        <option value="tuesday">Tuesday</option>
                                        <option value="wednessday">Wednessday</option>
                                        <option value="thursday">Thursday</option>
                                        <option value="friday">Friday</option>
                                        <option value="saturday">Saturday</option>
                                        <option value="sunday">Sunday</option> --}}
                                    </select>
                                    @error('extra_day')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6" id="extra_day_start_time_div">
                                <div class="form-group">
                                    <label class="black_label">Start Time<span class="text-danger ">*</span></label>
                                    <input class="form-control black_input" type="text" name="extra_day_start_time"
                                        required id="extra_day_start_time">
                                    @error('extra_day_start_time')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6" id="extra_day_end_time_div">
                                <div class="form-group">
                                    <label class="black_label">End Time<span class="text-danger ">*</span></label>
                                    <input class="form-control black_input" type="text" name="extra_day_end_time"
                                        required id="extra_day_end_time">
                                    @error('extra_day_end_time')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-fields mb-3">
                        <h3 class="heading-2">Cover Image</h3>
                        <div class="col-8 mb-4">
                            <label for="cover_image" class="black_label"><b>Upload Your Service Cover</b></label>
                            <input type="file" name="cover_image" class="degree-dropify"
                                data-default-file="{{ asset('front') }}/assets/img/document.png">
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('injected-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.16/js/bootstrap-multiselect.min.js">
    </script>
    <script src="{{ asset('front') }}/assets/js/custom.js"></script>
    <script>
        $(document).ready(function() {
            $('#categories').multiselect({
                buttonClass: 'form-control',
                templates: {
                    li: '<li><a tabindex="0"><label class="m-0"></label></a></li>'
                }
            });

            $('.multiselect-container li').on('mousedown', function(event) {
                event.preventDefault();
                $(this).toggleClass('active');

                var checkbox = $(this).find(':checkbox');
                checkbox.prop('checked', !checkbox.prop('checked'));
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Store the original options of the "ending-day" dropdown
            var originalOptions = $('#ending_day').html();

            $('#starting_day').change(function() {
                var selectedDay = $(this).val();

                // Reset the "ending-day" dropdown with the original options
                $('#ending_day').html(originalOptions);

                // Remove the selected day from the "ending-day" dropdown
                $('#ending_day option[value="' + selectedDay + '"]').remove();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#extra_day_div').hide();
            $('#extra_day_start_time_div').hide();
            $('#extra_day_end_time_div').hide();
            $('input[name="add_extra_day"]').change(function() {
                var selectedValue = $(this).val();

                if (selectedValue === '1') {
                    updateExtraDayOptions();
                    $('#extra_day_div').show();
                    $('#extra_day_start_time_div').show();
                    $('#extra_day_end_time_div').show();
                } else {
                    $('#extra_day_div').hide();
                    $('#extra_day_start_time_div').hide();
                    $('#extra_day_end_time_div').hide();
                }
            });

            function updateExtraDayOptions() {
                var startingDay = $('#starting_day').val();
                var endingDay = $('#ending_day').val();
                var extraDaySelect = $('#extra_day');

                // Clear previous options
                extraDaySelect.empty();

                // Populate options
                var days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

                var excludedDays = [startingDay, endingDay];

                for (var i = 0; i < days.length; i++) {
                    if (!excludedDays.includes(days[i])) {
                        extraDaySelect.append($('<option></option>').attr('value', days[i]).text(days[i]));
                    }
                }
            }

            // Event listener for starting day change
            $('#starting_day').change(function() {
                updateExtraDayOptions();
            });

            // Event listener for ending day change
            $('#ending_day').change(function() {
                updateExtraDayOptions();
            });
        });
    </script>
@endsection
