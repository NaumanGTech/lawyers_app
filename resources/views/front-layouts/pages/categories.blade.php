@extends('front-layouts.master-layout')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-title">
                        <h2>Categories</h2>
                    </div>
                </div>
                <div class="col-auto float-end ms-auto breadcrumb-menu">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Categories</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <div class="content">
        <div class="container">
            <div class="catsec clearfix">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <a href="{{route('lawyers.with.category', ['category'=>'all'])}}">
                            <div class="cate-widget">
                                <img src="{{asset('front')}}/assets/img/category/Category1.jpg" alt="">
                                <div class="cate-title category">
                                    <h3>Category One</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dicta iusto esse nesciunt ipsa pariatur, nemo vel sapiente excepturi quisquam! Debitis eligendi</p>
                                </div>
                                <div class="cate-count">
                                   <p class="mb-0">View Lawyers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="{{route('lawyers.with.category', ['category'=>'all'])}}">
                            <div class="cate-widget">
                                <img src="{{asset('front')}}/assets/img/category/Category1.jpg" alt="">
                                <div class="cate-title category">
                                    <h3>Category One</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dicta iusto esse nesciunt ipsa pariatur, nemo vel sapiente excepturi quisquam! Debitis eligendi</p>
                                </div>
                                <div class="cate-count">
                                    <p class="mb-0">View Lawyers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="{{route('lawyers.with.category', ['category'=>'all'])}}">
                            <div class="cate-widget">
                                <img src="{{asset('front')}}/assets/img/category/Category1.jpg" alt="">
                                <div class="cate-title category">
                                    <h3>Category One</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dicta iusto esse nesciunt ipsa pariatur, nemo vel sapiente excepturi quisquam! Debitis eligendi</p>
                                </div>
                                <div class="cate-count">
                                    <p class="mb-0">View Lawyers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="{{route('lawyers.with.category', ['category'=>'all'])}}">
                            <div class="cate-widget">
                                <img src="{{asset('front')}}/assets/img/category/Category1.jpg" alt="">
                                <div class="cate-title category">
                                    <h3>Category One</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dicta iusto esse nesciunt ipsa pariatur, nemo vel sapiente excepturi quisquam! Debitis eligendi</p>
                                </div>
                                <div class="cate-count">
                                    <p class="mb-0">View Lawyers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="{{route('lawyers.with.category', ['category'=>'all'])}}">
                            <div class="cate-widget">
                                <img src="{{asset('front')}}/assets/img/category/Category1.jpg" alt="">
                                <div class="cate-title category">
                                    <h3>Category One</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dicta iusto esse nesciunt ipsa pariatur, nemo vel sapiente excepturi quisquam! Debitis eligendi</p>
                                </div>
                                <div class="cate-count">
                                    <p class="mb-0">View Lawyers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="{{route('lawyers.with.category', ['category'=>'all'])}}">
                            <div class="cate-widget">
                                <img src="{{asset('front')}}/assets/img/category/Category1.jpg" alt="">
                                <div class="cate-title category">
                                    <h3>Category One</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dicta iusto esse nesciunt ipsa pariatur, nemo vel sapiente excepturi quisquam! Debitis eligendi</p>
                                </div>
                                <div class="cate-count">
                                    <p class="mb-0">View Lawyers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="{{route('lawyers.with.category', ['category'=>'all'])}}">
                            <div class="cate-widget">
                                <img src="{{asset('front')}}/assets/img/category/Category1.jpg" alt="">
                                <div class="cate-title category">
                                    <h3>Category One</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dicta iusto esse nesciunt ipsa pariatur, nemo vel sapiente excepturi quisquam! Debitis eligendi</p>
                                </div>
                                <div class="cate-count">
                                    <p class="mb-0">View Lawyers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="{{route('lawyers.with.category', ['category'=>'all'])}}">
                            <div class="cate-widget">
                                <img src="{{asset('front')}}/assets/img/category/Category1.jpg" alt="">
                                <div class="cate-title category">
                                    <h3>Category One</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dicta iusto esse nesciunt ipsa pariatur, nemo vel sapiente excepturi quisquam! Debitis eligendi</p>
                                </div>
                                <div class="cate-count">
                                    <p class="mb-0">View Lawyers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="{{route('lawyers.with.category', ['category'=>'all'])}}">
                            <div class="cate-widget">
                                <img src="{{asset('front')}}/assets/img/category/Category1.jpg" alt="">
                                <div class="cate-title category">
                                    <h3>Category One</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dicta iusto esse nesciunt ipsa pariatur, nemo vel sapiente excepturi quisquam! Debitis eligendi</p>
                                </div>
                                <div class="cate-count">
                                    <p class="mb-0">View Lawyers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="pagination">
                    <ul>
                        <li class="active"><a href="javascript:void(0);">1</a></li>
                        <li><a href="javascript:void(0);">2</a></li>
                        <li><a href="javascript:void(0);">3</a></li>
                        <li><a href="javascript:void(0);">4</a></li>
                        <li class="arrow"><a href="javascript:void(0);"><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
