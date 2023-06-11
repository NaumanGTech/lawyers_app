@extends('front-layouts.master-layout')
@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="layer">
            <div class="home-banner"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-search aos">
                            <h3>Find Best <span>Lawyers</span></h3>
                            <p>Discuss your problems by meeting and on online sessions</p>
                            <div class="search-box" style="z-index: 9999">
                                <form action="search.html">
                                    <div class="search-input line">
                                        <i class="fas fa-tv bficon"></i>
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control"
                                                placeholder="What are you looking for?">
                                        </div>
                                    </div>
                                    <div class="search-input">
                                        <i class="fas fa-location-arrow bficon"></i>
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" placeholder="Your Location">
                                            <a class="current-loc-icon current_location" href="javascript:void(0);"><i
                                                    class="fas fa-crosshairs"></i></a>
                                        </div>
                                    </div>
                                    <div class="search-btn">
                                        <button class="btn search_service" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- Category Section -->
    <section class="category-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading aos">
                                <h2 class="text-black">Categories</h2>
                                <span>What do you need to find?</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="viewall aos">
                                <h4><a href="categories.html">View All <i class="fas fa-angle-right"></i></a></h4>
                                <span>Featured Categories</span>
                            </div>
                        </div>
                    </div>
                    <div class="catsec">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <a href="search.html">
                                    <div class="cate-widget aos">
                                        <img src="{{ asset('front') }}/assets/img/category/category1.jpg" alt="">
                                        <div class="cate-title">
                                            <h3> Prosecutor</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <a href="search.html">
                                    <div class="cate-widget aos">
                                        <img src="{{ asset('front') }}/assets/img/category/Category2.jpg" alt="">
                                        <div class="cate-title">
                                            <h3> Public Defender</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <a href="search.html">
                                    <div class="cate-widget aos">
                                        <img src="{{ asset('front') }}/assets/img/category/category3.jpg" alt="">
                                        <div class="cate-title">
                                            <h3> Judge</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <a href="search.html">
                                    <div class="cate-widget aos">
                                        <img src="{{ asset('front') }}/assets/img/category/category4.jpg" alt="">
                                        <div class="cate-title">
                                            <h3> Immigration law</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <a href="search.html">
                                    <div class="cate-widget aos">
                                        <img src="{{ asset('front') }}/assets/img/category/category5.jpg" alt="">
                                        <div class="cate-title">
                                            <h3> Corporate lawyer</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <a href="search.html">
                                    <div class="cate-widget aos">
                                        <img src="{{ asset('front') }}/assets/img/category/category6.avif" alt="">
                                        <div class="cate-title">
                                            <h3> Family law</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Category Section -->

    <section class="popular-services">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="heading aos">
                        <h2 class="text-black">Most Popular Services</h2>
                        <span>Explore the greates our services. You won’t be disappointed</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="viewall aos">
                        <h4><a href="categories.html">View All <i class="fas fa-angle-right"></i></a></h4>
                        <span>Most Popular</span>
                    </div>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card cate-widget">
                                    <img src="{{ asset('front') }}/assets/img/services/Services1.jpg" class="card-img-top" alt="service-img">
                                    <div class="card-body px-1">
                                        <div class="service-content">
                                            <h3 class="title">
                                                <a href="service-details.html" class="text-black">Family law</a>
                                            </h3>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block average-rating">(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card cate-widget">
                                    <img src="{{ asset('front') }}/assets/img/services/Service2.jpg" class="card-img-top" alt="service-img">
                                    <div class="card-body px-1">
                                        <div class="service-content">
                                            <h3 class="title">
                                                <a href="service-details.html" class="text-black">Tax law</a>
                                            </h3>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block average-rating">(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card cate-widget">
                                    <img src="{{ asset('front') }}/assets/img/services/Service4.jpg" class="card-img-top" alt="service-img">
                                    <div class="card-body px-1">
                                        <div class="service-content">
                                            <h3 class="title">
                                                <a href="service-details.html" class="text-black">Immigration law</a>
                                            </h3>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block average-rating">(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cities">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between">
                    <div class="heading">
                        <h2>Cities</h2>
                        <span>We are here in your own city</span>
                    </div>
                    <div class="viewall-dark"
                        style="display: flex; flex-direction: column; align-items: end; justify-content: center;">
                        <h4><a href="categories.html">View All <i class="fas fa-angle-right"></i></a></h4>
                        <span>Featured Cities</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-4 cities_button">
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Islamabad
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Lahore
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Multan
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Bahawalpur
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Khanpur
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Rahim Yar Khan
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Karachi
                        </button>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-4 cities_button">
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Laiyah
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Sawat
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Faislabad
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Jhang
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Murree
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Kashmor
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Khibar
                        </button>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-4 cities_button">
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Laiyah
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Sawat
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Faislabad
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Jhang
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Murree
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Kashmor
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Khibar
                        </button>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-4 cities_button">
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Islamabad
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Islamabad
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Islamabad
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Islamabad
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Islamabad
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Islamabad
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary my-2 w-100">
                            Islamabad
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-work">
        <div class="container py-3 how-it-work-bg">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading howitworks aos">
                        <h2>How It Works</h2>
                    </div>
                    <div class="howworksec">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="howwork aos">
                                    <div class="iconround">
                                        <div class="steps">01</div>
                                        <img src="{{ asset('front') }}/assets/img/icon-1.png" alt="">
                                    </div>
                                    <h3>Find What you need</h3>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="howwork aos">
                                    <div class="iconround">
                                        <div class="steps">02</div>
                                        <img src="{{ asset('front') }}/assets/img/icon-2.png" alt="">
                                    </div>
                                    <h3>Find an Experienced Lawyer</h3>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="howwork aos">
                                    <div class="iconround">
                                        <div class="steps">03</div>
                                        <img src="{{ asset('front') }}/assets/img/icon-3.png" alt="">
                                    </div>
                                    <h3>Meet and Consult</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /How It Works -->
@endsection

@section('injected-scripts')
    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
@endsection
