@extends('layouts.app')
@section('content')

<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-abouts py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4">Log<span style="color: #F0530D;">in</span></h2>
        </div>
        <div class="hero-overlay"></div>
    </div>
</section>

<!-- //LOGIN -->

<section class="w3l-contact-main" id="contact">
    <div class="contact-infhny py-5">
        <div class="container py-lg-3">
            <div class="top-map">
                <div class="map-content-9">
                    <div class="card" style="border-radius: 25px; box-shadow: 5px 10px rgb(
                        240, 83, 13); border-color: #F0530D; background: transparent;">
            <form action="{{ route('admin-login') }}" method="post" style="padding: 15px; margin: 25px;">
                @csrf
                <div class="form-top1">
                    <h1 ><b >LOG<span style="color:#F0530D">IN</span></b></h1><br>
                    <div class="form-top">
                        <div class="form-top-left">
                            <input type="text"  id="#" placeholder=" Enter Your Username" required="" name="username">

                            <input type="password"  placeholder=" Enter Your Password" required="" name="password">

                        </div>

                        <div class="text-lg-left text-center"><br>
                            <p style="padding-left: 60px;">Forget Password?</p><br>
                            <button type="submit" class="btn btn-style btn-primary">Submit Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</section>


@endsection
