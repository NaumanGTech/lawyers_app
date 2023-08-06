@extends('front-layouts.master-layout')
@section('content')
    <!-- Breadcrumb -->
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-title">
                        <h2>Find a Professional</h2>
                    </div>
                </div>
                <div class="col-auto float-end ms-auto breadcrumb-menu">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Find a Professional</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 theiaStickySidebar h-100">
                    <div class="card filter-card" style="border: none !important;">
                        <div class="card-body" style="background: dimgrey; border-radius: 20px;">
                            <h4 class="card-title mb-4">Search Filter</h4>
                            <form id="search_form">
                                <div class="filter-widget">
                                    {{-- <div class="filter-list">
                                        <h4 class="filter-title">Keyword</h4>
                                        <input type="text" class="form-control" placeholder="What are you looking for?">
                                    </div> --}}
                                    <div class="filter-list">
                                        <h4 class="filter-title">Sort By</h4>
                                        <select class="form-control selectbox select form-select">
                                            <option>Sort By</option>
                                            <option>Price Low to High</option>
                                            <option>Price High to Low</option>
                                            <option>Newest</option>
                                        </select>
                                    </div>
                                    <div class="filter-list">
                                        <h4 class="filter-title">Categories</h4>
                                        <select class="form-control form-control selectbox select form-select">
                                            @foreach ($categories as $category)
                                                <a href="{{ route('lawyers.online', $category->id) }}">
                                                    <option value="{{$category->id}}">
                                                        {{ $category->title }}
                                                    </option>
                                                </a>
                                            @endforeach

                                            {{-- <option><a href="my-services.html">Real estate lawyer</a></option>
                                            <option><a href="provider-bookings.html">Constitutional law</a></option>
                                            <option><a href="provider-settings.html">Property law</a></option>
                                            <option><a href="provider-wallet.html">Entertainment law</a></option>
                                            <option><a href="provider-subscription.html">Divorce lawyer</a></option>
                                            <option><a href="provider-availability.html">Civil Rights Lawyer</a></option>
                                            <option><a href="provider-reviews.html">Solicitor</a></option>
                                            <option><a href="provider-payment.html">Barrister</a></option>
                                            <option><a href="provider-dashboard.html">Judge</a></option>
                                            <option><a href="my-services.html">Patent attorney</a></option>
                                            <option><a href="provider-bookings.html">Advocate</a></option>
                                            <option><a href="provider-settings.html">Prosecutor</a></option>
                                            <option><a href="provider-wallet.html">Public Defender</a></option>
                                            <option><a href="provider-subscription.html">Admiralty law</a></option>
                                            <option><a href="provider-availability.html">Financial law</a></option>
                                            <option><a href="provider-reviews.html">Aviation law</a></option>
                                            <option><a href="provider-payment.html">Labour Lawyer</a></option>
                                            <option><a href="my-services.html">Tax law</a></option>
                                            <option><a href="provider-bookings.html">Immigration law</a></option>
                                            <option><a href="provider-settings.html">Labour law</a></option>
                                            <option><a href="provider-wallet.html">Personal injury lawyer</a></option>
                                            <option><a href="provider-subscription.html">Corporate lawyer</a></option> --}}
                                        </select>
                                    </div>
                                    <div class="filter-list">
                                        <h4 class="filter-title">Location</h4>
                                        <input class="form-control" type="text" placeholder="Search Location">
                                    </div>
                                </div>
                                <button class="btn btn-primary pl-5 pr-5 btn-block get_services w-100"
                                    type="button">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div>
                        <div class="row">
                            @foreach ($lawyersByCategories as $lawyersByCategory)
                                <div class="col-lg-4 col-md-6">
                                    <a href="{{ route('lawyers.with.category',$lawyersByCategory->id) }}">
                                        <div class="cate-widget">
                                            <img src="{{ asset('front') }}/assets/img/customer/lawyer-01.png"
                                                alt="">
                                            <div class="cate-title online">
                                                <h3>{{ $lawyersByCategory->category->title }}</h3>
                                                <div class="lawyerDetails">
                                                    <p class="mb-1">{{ $lawyersByCategory->name }}</p>
                                                    <p class="mb-1">Masters In {{ $lawyersByCategory->degree }}</p>
                                                    <ul>
                                                        <li style="color: white">Certificate 1</li>
                                                        <li style="color: white">Certificate 2</li>
                                                        <li style="color: white">Certificate 3</li>
                                                    </ul>
                                                </div>
                                                <div class="w-100 d-flex justify-content-between">
                                                    <div class="price text-light w-100">
                                                        <span>Rs 2000</span>
                                                    </div>
                                                    <div class="OnlineLawyersRatings text-end">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination">
                            <ul>
                                <li class="active"><a href="javascript:void(0);">1</a></li>
                                <li><a href="javascript:void(0);">2</a></li>
                                <li><a href="javascript:void(0);">3</a></li>
                                <li><a href="javascript:void(0);">4</a></li>
                                <li class="arrow"><a href="javascript:void(0);"><i class="fas fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.get_services').on('click', function() {
                var keyword = $('#search_form input[name="keyword"]').val();
                var sortBy = $('#search_form select[name="sort_by"]').val();
                var category = $('#search_form select[name="category"]').val();
                var location = $('#search_form input[name="location"]').val();
    
                var url = '{{ route('advance.search') }}' + '?keyword=' + keyword + '&sort_by=' + sortBy + '&category=' + category + '&location=' + location;
    
                // Redirect to the search URL
                window.location.href = url;
            });
        });
    </script>
    
@endsection
