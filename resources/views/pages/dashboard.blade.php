@extends('layout.master')
@section('page', 'Dashboard')
@section('title', 'Dashboard')
@section('content')

<div class="alert alert-success alert-dismissible fade show" role="alert">
    Hello, @USERS. Welcome to SIMASDA UNESA powered by dev
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="card pb-5 px-3">
    <div>
        <h5 class="card-title m-0">Our recent activities <span>| Today</span></h5>
    </div>
    <!-- Carousel Start -->
    <!-- Slides with captions -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/masta-2021.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/pelantikan-2021.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/musykom2021.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div><!-- End Slides with captions -->

    <!-- Carousel End -->
</div>

<!-- Left side columns -->
<div class="col-lg-8">
    <div class="row">
        <div class="card">
            <div class="filter d-flex justify-content-end px-3 py-2">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>
            <div class="card-body">
                <h5 class="card-title m-0">Information and Articles <span>| Today</span></h5>
                <div class="row article-queue">
                    <div class="col-4 py-3 px-0">
                        <img src="assets/img/news-2.jpg" alt="news" style="width: 100%;">
                    </div>
                    <div class="col-8 py-3 px-2 d-flex justify-content-start">
                        <div class="news-fill news-fill-activity">
                            <div class="top-sec">
                                <h4 class="fw-semibold"><a href="/articlepage"> This is the article title</a></h4>
                                <p class="text-align-justify">
                                    This is the article news caption, you can text here at least 100 characters. please detail it to confirm the news or articles
                                </p>
                            </div>
                            <div class="bottom-sec">
                                <p class="passive-text p-0 m-0">Author : <span><a href="#">Author's Name</a></span></p>
                                <p class="passive-text p-0 m-0">Publish Date : 22-January-2023</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row article-queue">
                    <div class="col-4 py-3 px-0">
                        <img src="assets/img/news-2.jpg" alt="news" style="width: 100%;">
                    </div>
                    <div class="col-8 py-3 px-2 d-flex justify-content-start">
                        <div class="news-fill news-fill-activity">
                            <div class="top-sec">
                                <h4 class="fw-semibold"><a href="/articlepage"> This is the article title</a></h4>
                                <p class="text-align-justify">
                                    This is the article news caption, you can text here at least 100 characters. please detail it to confirm the news or articles
                                </p>
                            </div>
                            <div class="bottom-sec">
                                <p class="passive-text p-0 m-0">Author : <span><a href="#">Author's Name</a></span></p>
                                <p class="passive-text p-0 m-0">Publish Date : 22-January-2023</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row article-queue">
                    <div class="col-4 py-3 px-0">
                        <img src="assets/img/news-2.jpg" alt="news" style="width: 100%;">
                    </div>
                    <div class="col-8 py-3 px-2 d-flex justify-content-start">
                        <div class="news-fill news-fill-activity">
                            <div class="top-sec">
                                <h4 class="fw-semibold"><a href="/articlepage"> This is the article title</a></h4>
                                <p class="text-align-justify">
                                    This is the article news caption, you can text here at least 100 characters. please detail it to confirm the news or articles
                                </p>
                            </div>
                            <div class="bottom-sec">
                                <p class="passive-text p-0 m-0">Author : <span><a href="#">Author's Name</a></span></p>
                                <p class="passive-text p-0 m-0">Publish Date : 22-January-2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div><!-- End Left side columns -->

<!-- Right side columns -->
<div class="col-lg-4">
    <div class="card" style="background-color: yellow;">
        <div class="card-body pb-0">
            <h5 class="card-title">Announcement<span> | Account</span></h5>
            <p class="passive-text">anybody who need support to use this app can connect with admin <span><a href="#">here</a></span>. or call developer by mail <span><a href="#">here</a></span>.</p>
        </div>
    </div>
    <!-- News & Updates Traffic -->
    <div class="card">
        <div class="filter d-flex justify-content-end px-3 pt-2">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
        </div>

        <div class="card-body pb-0">
            <h5 class="card-title">Quick News<span> | Today</span></h5>

            <div class="news">
                <div class="post-item clearfix">
                    <img src="assets/img/news-5.jpg" alt="news image" class="news-images mb-2">
                    <h4><a href="/">This is News Title</a></h4>
                    <p class="mb-5">And this is the caption</p>
                    <div class="d-flex justify-content-end">
                        <p class="detail-text float-right"><a href="#">read more.....</a></p>
                    </div>
                </div>
            </div><!-- End sidebar recent posts-->

        </div>
    </div><!-- End News & Updates -->

</div><!-- End Right side columns -->


@endsection
