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
					<div class="col-lg-3 theiaStickySidebar">
						<div class="card filter-card">
							<div class="card-body">
								<h4 class="card-title mb-4">Search Filter</h4>
								<form id="search_form">
									<div class="filter-widget">
										<div class="filter-list">
											<h4 class="filter-title">Keyword</h4>
											<input type="text" class="form-control" placeholder="What are you looking for?">
										</div>
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
												<option>All Categories</option>
												<option>Computer</option>
												<option selected="">Automobile</option>
												<option>Car Wash</option>
												<option>Cleaning</option>
												<option>Electrical</option>
												<option>Construction</option>
											</select>
										</div>
										<div class="filter-list">
											<h4 class="filter-title">Location</h4>
											<input class="form-control" type="text" placeholder="Search Location">
										</div>
									</div>
									<button class="btn btn-primary pl-5 pr-5 btn-block get_services w-100" type="button">Search</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
						<div>
							<div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <a href="{{route('lawyers.with.category', ['category'=>'all'])}}">
                                        <div class="cate-widget">
                                            <img src="{{asset('front')}}/assets/img/category/Category1.jpg" alt="">
                                            <div class="cate-title category">
                                                <h3>Category One</h3>
                                                <p>Name of the Lawyer</p>
                                                <div class="w-100 d-flex justify-content-between">
                                                    <span>Price</span>
                                                    <span>Rating</span>
                                                </div>
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
                                                <p>Name of the Lawyer</p>
                                                <div class="w-100 d-flex justify-content-between">
                                                    <span>Price</span>
                                                    <span>Rating</span>
                                                </div>
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
                                                <p>Name of the Lawyer</p>
                                                <div class="w-100 d-flex justify-content-between">
                                                    <span>Price</span>
                                                    <span>Rating</span>
                                                </div>
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
                                                <p>Name of the Lawyer</p>
                                                <div class="w-100 d-flex justify-content-between">
                                                    <span>Price</span>
                                                    <span>Rating</span>
                                                </div>
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
                                                <p>Name of the Lawyer</p>
                                                <div class="w-100 d-flex justify-content-between">
                                                    <span>Price</span>
                                                    <span>Rating</span>
                                                </div>
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
                                                <p>Name of the Lawyer</p>
                                                <div class="w-100 d-flex justify-content-between">
                                                    <span>Price</span>
                                                    <span>Rating</span>
                                                </div>
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
                                                <p>Name of the Lawyer</p>
                                                <div class="w-100 d-flex justify-content-between">
                                                    <span>Price</span>
                                                    <span>Rating</span>
                                                </div>
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
                                                <p>Name of the Lawyer</p>
                                                <div class="w-100 d-flex justify-content-between">
                                                    <span>Price</span>
                                                    <span>Rating</span>
                                                </div>
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
                                                <p>Name of the Lawyer</p>
                                                <div class="w-100 d-flex justify-content-between">
                                                    <span>Price</span>
                                                    <span>Rating</span>
                                                </div>
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
			</div>
		</div>﻿
@endsection
