@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
<!-- Blog breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4">Blog Posts</h2>
            <p class="inner-page-para mt-2">Find all our latest news, insights, and events</p>
        </div>
        <div class="hero-overlay"></div>
    </div>
</section>
<!-- //Blog breadcrumb -->
<section class="w3l-blog">
    <div class="blog py-5" id="Newsblog">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="blog-single.html" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="{{ asset('assets/images/blog2.jpg') }}"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body blog-details">
                            <div class="price-review d-flex justify-content-between mb-1 align-items-center">
                                <p>Startup Business</p>
                            </div>
                            <a href="blog-single.html" class="blog-desc">Companies in NY launched a joint project on three-tower hall
                            </a>
                        </div>
                        <div class="card-footer">
                            <div class="author align-items-center">
                                <a href="#author" class="post-author">
                                    <img src="{{ asset('assets/images/team1.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <span class="meta-value">by</span><a href="#author"> Jessica</a>
                                    </li>
                                </ul>
                                <div class="date">
                                    <p>20 March, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 item mt-md-0 mt-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="blog-single.html" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="{{ asset('assets/images/blog2.jpg') }}"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body blog-details">
                            <div class="price-review d-flex justify-content-between mb-1 align-items-center">
                                <p>Marketing Strategy</p>
                            </div>
                            <a href="blog-single.html" class="blog-desc">Design breakthrough upgrades the product and ready to launch</a>
                        </div>
                        <div class="card-footer">
                            <div class="author align-items-center">
                                <a href="#author" class="post-author">
                                    <img src="{{ asset('assets/images/team2.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <span class="meta-value">by</span><a href="#author"> Elizabeth</a>
                                    </li>
                                </ul>
                                <div class="date">
                                    <p>20 March, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 item mt-lg-0 mt-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="blog-single.html" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="{{ asset('assets/images/blog2.jpg') }}"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body blog-details">
                            <div class="price-review d-flex justify-content-between mb-1 align-items-center">
                                <p>Web Development</p>
                            </div>
                            <a href="blog-single.html" class="blog-desc">The fledgling company builds its business around AC motors</a>
                        </div>
                        <div class="card-footer">
                            <div class="author align-items-center">
                                <a href="#author" class="post-author">
                                    <img src="{{ asset('assets/images/team3.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <span class="meta-value">by</span><a href="#author"> Charlotte</a>
                                    </li>
                                </ul>
                                <div class="date">
                                    <p>20 March, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 item mt-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="blog-single.html" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="{{ asset('assets/images/blog1.jpg') }}"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body blog-details">
                            <div class="price-review d-flex justify-content-between mb-1 align-items-center">
                                <p>Startup Business</p>
                            </div>
                            <a href="blog-single.html" class="blog-desc">Business opportunity in developing a reliable electric motor.
                            </a>
                        </div>
                        <div class="card-footer">
                            <div class="author align-items-center">
                                <a href="#author" class="post-author">
                                    <img src="{{ asset('assets/images/team4.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <span class="meta-value">by</span><a href="#author"> Emma</a>
                                    </li>
                                </ul>
                                <div class="date">
                                    <p>20 March, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 item mt-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="blog-single.html" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="{{ asset('assets/images/blog3.jpg') }}"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body blog-details">
                            <div class="price-review d-flex justify-content-between mb-1 align-items-center">
                                <p>Marketing Strategy</p>
                            </div>
                            <a href="blog-single.html" class="blog-desc">How to start a profitable home-based business within mins?</a>
                        </div>
                        <div class="card-footer">
                            <div class="author align-items-center">
                                <a href="#author" class="post-author">
                                    <img src="{{ asset('assets/images/team1.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <span class="meta-value">by</span><a href="#author"> Jessica</a>
                                    </li>
                                </ul>
                                <div class="date">
                                    <p>20 March, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 item mt-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="blog-single.html" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="{{ asset('assets/images/s1.jpg') }}"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body blog-details">
                            <div class="price-review d-flex justify-content-between mb-1 align-items-center">
                                <p>Web Development</p>
                            </div>
                            <a href="blog-single.html" class="blog-desc">Simple Business Solutions has generated thousands of dollars</a>
                        </div>
                        <div class="card-footer">
                            <div class="author align-items-center">
                                <a href="#author" class="post-author">
                                    <img src="{{ asset('assets/images/team2.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <span class="meta-value">by</span><a href="#author"> Elizabeth</a>
                                    </li>
                                </ul>
                                <div class="date">
                                    <p>20 March, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- pagination -->
            {{-- <div class="pagination-style text-center">
                <ul>
                    <li> <a href="#none"> <span class="fa fa-chevron-left" aria-hidden="true"></span> </a> </li>
                    <li><a class="active" href="#page">1</a></li>
                    <li> <a href="#page">2</a> </li>
                    <li> <a href="#page">3</a> </li>
                    <li> <a href="#page">...</a> </li>
                    <li> <a href="#page"><span class="fa fa-chevron-right" aria-hidden="true"></span> </a> </li>
                </ul>
            </div> --}}
            <!-- //pagination -->
        </div>
    </div>
</section>
@endsection
