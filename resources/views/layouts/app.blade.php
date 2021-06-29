
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>FeedWellPeople</title>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/gif" sizes="16x16">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-starter.css') }}">
  <style type="text/css">
      .itemr img{
        height: 190px;
        width: auto;
        margin: 8px;
        border-radius: 20px;
      }
  </style>
  </head>
  <body>
<!--header-->
    @include('frontend.inc.header')
  <!--/header-->
    @yield('content')
<!-- footer -->
@include('frontend.inc.footer')
  <!-- //footer -->


  <!-- Template JavaScript -->
  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/theme-change.js') }}"></script>

  <!-- libhtbox -->
  <script src="{{ asset('assets/js/lightbox-plus-jquery.min.js') }}"></script>
  <!-- libhtbox -->

  <!-- banner slick slider -->
  <script src="{{ asset('assets/js/slick.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <!-- //banner slick slider -->

  <!-- magnific popup -->
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>



  </body>

  </html>
