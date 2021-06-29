@extends('layouts.app')
@section('content')

<!-- Contact breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4"><b>Contact <span style="color: #F0530D;">Us</span></b></h2>
        </div>
        <div class="hero-overlay"></div>
    </div>
</section>
<!-- //Contact breadcrumb -->



<!----Contact Form--->
<section class="w3l-contact-main" id="contact">
  <div class="contact-infhny py-5">
    <div class="container py-lg-3">
      <div class="top-map">
        <div class="map-content-9">
          <div class="card" style="border-radius: 25px; box-shadow: 5px 10px rgb(
          240, 83, 13); border-color: #F0530D; background: transparent;">
            <form action="#" method="post" style="padding: 15px; margin: 25px;">
            <div class="form-top1">
              <h1 ><b >Contact<span style="color:#F0530D"> Us</span></b></h1><br>
              <div class="form-top">
                <div class="form-top-left">
                  <input type="text"  id="#" placeholder=" First Name" required="">

                  <input type="text"  placeholder=" Last Name" required="">

                  <input type="email"  id="#" placeholder=" Enter Your Email" required="">

                  <input type="text"  placeholder=" Enter Your Contact" required="">

                  <textarea id="subject" name="subject" placeholder="Enter Your Message." style=" width: 400px; "></textarea>

                </div>

              <div class="text-lg-left text-center"><br>
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





<!-- contact map -->
<section class="w3l-contact-main" id="contact" >
    <div class="container" >
        <div class="map pt-lg-3" >
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3059445135!2d-74.25986613799748!3d40.69714941774136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e3!4m0!4m0!5e0!3m2!1sen!2sin!4v1570181661801!5m2!1sen!2sin"
                allowfullscreen="" ></iframe>
        </div>
    </div>
</section>

<section class="w3l-contact-main py-5" id="contact">
    <div class="container pt-lg-5 pt-md-3">
        <div class="title-content text-center mb-md-5 mb-4">
            <h3 class="title-big mx-lg-5">Feel Free to contact us.</h3>
            <p class="text-para mt-2"> </p>
        </div>
        <div class="w3l-contact-info">
            <div class="row contact-infos">
                <div class="col-lg-6 col-md-6">
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-map-marker"></span></div>
                        <div class="text-box">
                            <h3 class="mb-2">Official's Customer</h3>
                            <h5>Support Line: <span><a href="tel:09055163716">09055163716</a></span></h5>
                            <h5>Official Email: <span><a href="mailto:info@feedwellpeople.com">info@feedwellpeople.com</a></span></h5>
                            <h5>Whatsapp Contact: <span><a href="https://wa.me/2349072555310">+234 907 255 5310 </a></span></h5>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mt-lg-0 mt-4">
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-briefcase"></span></div>
                        <div class="text-box">
                            <h3 class="mb-2">Working Days</h3>
                            <h5>Monday-Friday <span style="color: #f0530d;" > 9am - 5pm</span></h5>
                            <h5>Saturday: <span style="color: #f0530d;"> 10am - 3pm</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
