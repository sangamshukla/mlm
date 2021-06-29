@extends('layouts.app')
@section('content')
    <!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-abouts py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4">Reg<span style="color: #F0530D;">ister</span></h2>
        </div>
        <div class="hero-overlay"></div>
    </div>
</section>

<!-- //about breadcrumb -->
<section class="w3l-contact-main" id="contact">
  <div class="contact-infhny py-5">
    <div class="container py-lg-3">
      <div class="top-map">
        <div class="map-content-9">
          <div class="card" style="border-radius: 25px; box-shadow: 5px 10px rgb(
          240, 83, 13); border-color: #F0530D; background: transparent;">
            <form action="#" method="post" style="padding: 15px; margin: 25px;">
            <div class="form-top1">
              <h1 ><b >REG<span style="color:#F0530D">ISTER</span></b></h1><br>
              <div class="form-top">
                <div class="form-top-left">
                  <input type="text"  id="#" placeholder=" Enter Your Sponsor ID" required="" name="sponsor_id">

                  <input type="text"  placeholder=" Enter Your Upline ID" required="" name="upline_id">

                  <select name="state" id="cars" style="border-radius: 10px; border:none;">
                            <option value="" >Placement</option>
                            <option value="right">Right</option>
                            <option value="left">Left</option>
                          </select>

                  <input type="email"  id="#" placeholder="Enter Your Email" required="" name="email">

                  <input type="text"  id="#" placeholder="Enter Your First Name" required="" name="first_name">

                  <input type="text"  placeholder="Enter Your Middle Name" required="" name="middle_name">

                  <input type="text"  id="#" placeholder="Enter Your Last Name" required="" name="last_name">

                  <input type="text" value="+234" id="#" placeholder="Enter Your Phone" required="" name="phone_no">

                  <input type="text"  id="#" placeholder="Enter Your Address" required="" name="address">

                          <select name="state" id="cars" style="border-radius: 10px; border:none;">
                            <option value="volvo">State / Region / Province</option>
                            <option value="lorem1">Lorem Ipsum 1</option>
                            <option value="lorem2">Lorem Ipsum 2</option>
                            <option value="lorem3">Lorem Ipsum 3</option>
                            <option value="lorem4">Lorem Ipsum 4</option>
                            <option value="lorem5">Lorem Ipsum 5</option>
                          </select>

                  <input type="date" id="dob" placeholder="Enter Your DOB" required="" name="dob">
                </div>

              </div> <br>
              <h2><b>KIN <span style="color:#F0530D;">INFORMATION</span></b></h2>

                <div class="form-top-left">
                  <input type="text"  id="#" placeholder=" Kin First Legal Name" required="" name="kin_first_name">

                  <input type="text"  placeholder=" Kin Last Legal Name" required="" name="kin_last_name">

                  <select name="state" id="cars" style="border-radius: 10px; border:none;">
                            <option value="volvo">Select Relationship</option>
                            <option value="son">Son</option>
                            <option value="daughter">Daughter</option>
                            <option value="sibling">Sibling</option>
                            <option value="uncle">Uncle</option>
                            <option value="aunty">Aunty</option>
                            <option value="nephew">Nephew</option>
                            <option value="niece">Niece</option>
                          </select>

                  <input type="text"  id="#" placeholder="Enter Your Phone" required="" name="kin_phone_no">

                  <input type="text"  id="#" placeholder="Enter Your Address" required="" name="kin_address">


                </div><br>
                <h2><b>BANK <span style="color:#F0530D;">INFORMATION</span></b></h2>

                <div class="form-top-left">
                  <input type="text"  id="#" placeholder=" Beneficiary Bank Name" required="" name="bank_name">

                  <input type="text"  placeholder=" Beneficiary Account Number" required="" name="bank_accountno">

                  <input type="text"  id="w3lSender" placeholder=" Enter Purchased Pin" required="" name="epin">

                  <div>
                    <a href="#">You Don't have Epin? Purchase Epin.</a>
                  </div>

                  <input type="email"  id="#" placeholder="Enter Your Username" required="" name="bank_username">

                  <input type="text"  id="#" placeholder="Enter Your Password" required="" name="bank_password">

                  <div><br>
                    <input type="checkbox" name="" style="max-width: 4px; max-height: 20px;" name="terms"><span>   Agree Terms & conditions</span>
                  </div>

                </div><br>
              <div class="text-lg-left text-center">
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
