@extends('layouts.app')
@section('content')

    <!-- hero slider Start -->
@include('frontend.inc.slider')
<!-- hero slider end -->
<section id="how">
    <h1 style="text-align: center;">HOW <span style="color: #F0530D; font-weight: bold;">IT WORK</span></h1><br>
    <div style=" padding-left: 25vw; padding-right: 15vw;">
    <h5>Feedwellpeople international is a passionate and dynamic Multi Level Marketing (MLM) organization on a mission to eradicating Hunger and bringing contentment to families through provision of food items and giving them an opportunity to leverage on technology and e-commerce We offer various incentives to members which includes people from all work of life. (Civil/Public Servants, Traders, Students, Politicians and NGOs). Our system makes sure that as soon as anyone registers on our portal and meet the requirements; they are rewarded with various incentives ranging from food items, household appliances, cash and cars. This help to reduce their feeding expenses to the barest minimum and also create comfortable living and wealth.. Every member in the community is referred by an existing member “SPONSOR”. It is expected that Every Member refers a minimum of three (3) persons to qualify for the Welcome Commissions and Bonus.</h5>
    </div>
</section>

 <!-- galerry section -->
@include('frontend.inc.gallery')
<!--galery-->


 <!-- home page about section -->
@include('frontend.inc.aboutus')
<!-- //home page about section -->

 <!-- features section -->
@include('frontend.inc.featured')
<!-- features section -->
<!--  services section -->
@include('frontend.inc.services')

<!-- testimonials -->
@include('frontend.inc.testimonials')
<!-- //testimonials -->



<script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>
  <!-- //magnific popup -->

  <!-- script for tesimonials carousel slider -->
  <script src="assets/js/owl.carousel.js"></script>

  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          768: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false,
            loop: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <!-- Search -->
  <script>
    $('.control').click(function () {
      $('body').addClass('search-active');
      $('.input-search').focus();
    });

    $('.icon-close').click(function () {
      $('body').removeClass('search-active');
    });
  </script>
  <script type="text/javascript">
      var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
  </script>
  <!-- //Search -->

  <script src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $( document ).ready(function() {
    url = 'get_country.php';

  // Send the data using post

  //Ajax Function to send a get request
  $.ajax({
    type: "POST",
    url: url,
    success: function(response){
        //if request if made successfully then the response represent the data

        if (response != 'UNKNOWN') {
            $( "#country" ).html('you are accessing from &nbsp;'+response);
        }
    }
  });

});

  </script>

@endsection
