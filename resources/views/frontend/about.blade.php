@extends('layouts.app')
@section('content')
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4">About <span style="color: #F0530D;" > Us</span></h2>
        </div>
        <div class="hero-overlay"></div>
    </div>
</section>
<!-- //about breadcrumb -->
<section class="w3l-aboutblock1" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-6 left-wthree-img">
                    <img src="assets/images/10.jpg" alt="" class="img-fluid radius-image-full">
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self">

                    <h3 class="title-big">Who Are We.</h3>

                    <p class="mt-4">Feedwellpeople international is passionate about People Where others see challenges, we provide solutions. Feedwellpeople international is passionate about empowering Africans to enable them meet basic need which is food. Feedwellpeople international believe complete diet and abundant food is not an exclusive preserve of a few; but should be readily available to all regardless of creed, status, income or geographical divides. Join us and together we would make hunger, poverty, food shortages and malnutrition in Africa a history!</p>

                    <a class="btn btn-primary btn-style mt-md-5 mt-4 mr-md-4 mr-3" href="#about"> Read More </a>

                    <a href="#small-dialog1" class="popup-with-zoom-anim play-view text-center position-absolute mt-md-4 mt-3 pt-md-3">
                        <span class="video-play-icon">
                            <span class="fa fa-play"></span>
                        </span>
                    </a>
                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                        <iframe width="900" height="506" src="https://www.youtube.com/embed/TcUm6vkvPRY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
