<?php
include ('./header.php');
?>


<!-- Start Header -->
<!-- End Header -->
<!-- Start Top Title -->
<!-- End Top Title -->
<!-- Start Accordion Area -->
<section>
  <div class="container mt-5">
    <div class="col-md-12">
      <section class="template-title center">
        <h1 class="title has-over">Reservation</h1>
        <span>Reservation</span>
        <div class="co-lg-12 col-md-12 col-sm-12 col-12 mb-1 mt-1">
          <div class="Borders m-auto co-lg-4 col-md-4 col-sm-6 col-6"></div>
        </div>
      </section>
    </div>
  </div>
</section>
<!-- Used some part of the code from Chris Wright (https://codepen.io/chriswrightdesign/)'s Pen  -->
<div class="container my-5">
  <dt>
    <!-- accordion tab 2 - Shipping Info -->
    <a href="#accordion1" aria-expanded="false" aria-controls="accordion1"
      class="accordion-title hov accordionTitle js-accordionTrigger accordian-heading">Information</a>
  </dt>
  <dd class="" id="accordion1" aria-hidden="true">
    <div class="container-fluid" style="">
      <!-- <p class="headings">Information</p> -->
      <form class="main-container my-4">
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <Label for="">Pickup time</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
            <input name="Pickup-time" id="Pickup-time" class="reservation-form info-field" type="time">
            <i class="i-icon">i</i>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">Pickup Date</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
            <input name="Pickup-Date" id="Pickup-Date" class="reservation-form info-field" type="date">
            <i class="i-icon">i</i>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">Your Location</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
            <input name="Your-ocation" id="Your-ocation" class="reservation-form info-field" type="text">
            <i class="i-icon">i</i>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">Drop Location</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
            <input name="Pickup Date" id="Pickup Date" class="reservation-form info-field" type="text">
            <i class="i-icon">i</i>
          </div>
        </div>
      </form>
    </div>
  </dd>
  <dt>
    <!-- accordion tab 2 - Shipping Info -->
    <a href="#accordion2" aria-expanded="false" aria-controls="accordion2"
      class="accordion-title hov accordionTitle js-accordionTrigger accordian-heading">Passengers Details</a>
  </dt>
  <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
    <div class="container-fluid" style="">
      <!-- <p class="headings">Passengers Details</p> -->
      <form class="main-container my-4">
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">Name</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
            <input name="Drop-Your-Name" id="Drop-Your-Name" placholder="Name" class="reservation-form passenger-field" type="text">
            <i class="i-icon">i</i>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">Contact</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
            <input name="Contact" id="Contact" placholder="123456789" class="reservation-form passenger-field" type="text">
            <i class="i-icon">i</i>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">Drop Your Email</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
            <input name="Drop-Your-Email" id="Drop-Your-Email" placholder="example@gmail.com" class="reservation-form passenger-field" type="Email">
            <i class="i-icon">i</i>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">No. Of Passengers</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
              <select class="reservation-form passenger-field" name="No-Of-Passengers" id="No Of Passengers">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            <i class="i-icon">i</i>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">No. Of Luggage</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
              <select class="reservation-form passenger-field" name="Luggage" id="Luggage">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            <i class="i-icon">i</i>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">No Of Kids</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
              <select class="reservation-form passenger-field" name="No-Of-Kids" id="No-Of-Kids">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            <i class="i-icon">i</i>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">Child Seat Required</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
              <select class="reservation-form passenger-field" name="Child-Seat-Required" id="Child-Seat-Required">
                <option value="No">No</option>
                <option value="Yes">Yes</option>
              </select>
            <i class="i-icon">i</i>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">Child Seat Count</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
              <select class="reservation-form passenger-field" name="Child-Seat-Count" id="Child-Seat-Count">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            <i class="i-icon">i</i>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">Child Seat type</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
              <select class="reservation-form passenger-field" name="Child-Seat-type" id="Child-Seat-type">
                <option value="Infant">Infant</option>
                <option value="Toddler">Toddler</option>
                <option value="Booster Seat">Booster Seat</option>
              </select>
            <i class="i-icon">i</i>
          </div>
        </div>
      </form>
    </div>
  </dd>
  <div class="accordion3">
    <dl>
      <!-- description list -->
      <dt>
        <!-- accordion tab 1 - Select Car Options -->
        <a href="#accordion3" aria-expanded="false" aria-controls="accordion3"
          class="accordion-title accordionTitle js-accordionTrigger accordian-heading">Select Car</a>
      </dt>
      <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
        <div class="container-fluid">
          <div class="row">
            <input type="hidden" name="cars[]" id="cars">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/chryler-300.jpg" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">Chryler 300</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/2017_cadillac_xts_angularfront.jpg" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">Cadillac XTS</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/bmw 7.png" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">BMW 75i</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/Executive-Mercedes.jpg" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">Mercedes S550</h5>
                <button>Select Car</button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/bentlet.png" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">Bentley Flying Spur</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/Rolls Royce.png" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">Rolls Royce Phantom</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/chevrolet-sub.jpg" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">Chevrolet Suburban</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/Gmc.png" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">GMC Yukon XL</h5>
                <button>Select Car</button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/CADILLAC-ESCALADE2.jpg" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">Cadillac Escalade</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/lincolin.jpeg" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">Lincoln MKT Strech Limousine</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/SUV-Limousines-1.jpg" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">Lincoln Navigator</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/Black-Hummer-Limo-Up-to-16-passengers.jpg" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">Hummer Stretch Limousine</h5>
                <button>Select Car</button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/4.jpeg" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">Mercedes Benz Sprinter</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/24.jpeg" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">20 Passengers Mini Limo bus</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/36.jpg" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">30 Passengers Mini Limo Bus</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/55.jpg" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">40 Passengers Limo Bus</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/55.jpg" alt="">
              </div>
              <div class="reservation-cars-select">
                <h5 class="mb-1 Reservation-cars-name">50 Passengers Limo Bus</h5>
                <button>Select Car</button>
              </div>
            </div>
          </div>
        </div>
  </div>
  </dd>
  <dt>
    <!-- accordion tab 3 - Payment Info -->
    <a href="#accordion4" aria-expanded="false" aria-controls="accordion4"
      class="accordion-title accordionTitle js-accordionTrigger accordian-heading">Payment Information</a>
  </dt>
  <dd class="accordion-content accordionItem is-collapsed" id="accordion4" aria-hidden="true">
    <div class="container-fluid" style="">
      <!-- <p class="headings">Billing Information</p> -->
      <form class="main-container my-4">
        <form class="main-container my-4">
          <div class="row mb-3">
            <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
              <label class="" for="">Payment Method</label>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
              <select name="Payment-Method" id="Payment-Method">
                <option value="Cash">Cash</option>
                <option value="credit-card">Credit Card</option>
                <option value="Account">Account</option>
              </select>
              <i class="i-icon">i</i>
            </div>
          </div>
          <div id="credit-card" style="display: none">
            <div class="row mb-3">
              <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
                <label class="" for="">Card Type</label>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
                  <select name="Card-Type" id="Card-Type">
                    <option value="Visa ">Visa</option>
                    <option value="Mastercard">Mastercard</option>
                    <option value="American-Express">American Express </option>
                    <option value="Discover">Discover</option>
                  </select>
                <i class="i-icon">i</i>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
                <label class="" for="">Name on card</label>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
                  <input type="text" class="form-control" name="name-on-card" id="name-on-card" />
                <i class="i-icon">i</i>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
                <label class="" for="">Credit Card #</label>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
                  <input type="text" class="form-control" name="credit-card-no" id="credit-card-no" />
                <i class="i-icon">i</i>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
                <label class="" for="">Expiry Date</label>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
                  <input type="text" class="form-control" name="expiry-date" id="expiry-date" />
                <i class="i-icon">i</i>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
                <label class="" for="">CVV</label>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
                  <input type="text" class="form-control" name="cvv" id="cvv" />
                <i class="i-icon">i</i>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
                <label class="" for="">Billing Details As Same Pickup</label>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
                  <select name="Billing-Detail" id="Billing-Detail">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                <i class="i-icon">i</i>
              </div>
            </div>
          </div>

          <div id="billing-detail-yes" style="display:none">
            <div class="row mb-3">
              <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
                <label name="Pickup Date" id="" class="" for="">Name</label>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
                <input name="Name" id="Name" class="reservation-form" type="text">
                <i class="i-icon">i</i>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
                <label class="" for="">Address</label>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
                <input name="Address " id="Address" class="reservation-form" type="text">
                <i class="i-icon">i</i>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
                <label class="" for="">City</label>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
                <input name="Write-City" id="city" class="reservation-form" type="text">
                <i class="i-icon">i</i>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
                <label class="" for="">Province</label>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
                <input name="Province" id="province" class="reservation-form" type="text">
                <i class="i-icon">i</i>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
                <label class="" for="">Zip Code / Postal</label>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
                <input name="Zip-Code" id="Zip-Code" class="reservation-form" type="text">
                <i class="i-icon">i</i>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
                <label class="" for="">Country</label>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
                <input name="Country" id="Country" class="reservation-form" type="text">
                <i class="i-icon">i</i>
              </div>
            </div>
          </div>
          <div id="account-selected" style="display: none;">
            <div class="row mb-3">
              <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
                <label name="Pickup Date" id="" class="" for="">Name</label>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
                <input name="account-name" id="account-name" class="reservation-form" type="text">
                <i class="i-icon">i</i>
              </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
                  <label name="Pickup Date" id="" class="" for="">Company</label>
                </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
                <input name="company-name" id="company-name" class="reservation-form" type="text">
                <i class="i-icon">i</i>
              </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
                  <label name="Pickup Date" id="" class="" for="">Account No</label>
                </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
                <input name="account-no" id="account-no" class="reservation-form" type="text">
                <i class="i-icon">i</i>
              </div>
            </div>
          </div>
        </form>
        <div class="button-container">
          <button class="Contact-Btn mr-5" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </dd>
  <!-- end accordion tab 3 -->
  </dl>
  <!-- end description list -->
</div>
<!-- end accordion -->
</div>
<!-- end container -->

<?php
	include ('./footer.php');
?>

<script>
  (function () {
    var d = document,
      accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
      setAria,
      setAccordionAria,
      switchAccordion,
      touchSupported = ('ontouchstart' in window),
      pointerSupported = ('pointerdown' in window);

    skipClickDelay = function (e) {
      e.preventDefault();
      e.target.click();
    }

    setAriaAttr = function (el, ariaType, newProperty) {
      el.setAttribute(ariaType, newProperty);
    };
    setAccordionAria = function (el1, el2, expanded) {
      switch (expanded) {
        case "true":
          setAriaAttr(el1, 'aria-expanded', 'true');
          setAriaAttr(el2, 'aria-hidden', 'false');
          break;
        case "false":
          setAriaAttr(el1, 'aria-expanded', 'false');
          setAriaAttr(el2, 'aria-hidden', 'true');
          break;
        default:
          break;
      }
    };
    //function
    switchAccordion = function (e) {
      e.preventDefault();
      var thisAnswer = e.target.parentNode.nextElementSibling;
      var thisQuestion = e.target;
      if (thisAnswer.classList.contains('is-collapsed')) {
        setAccordionAria(thisQuestion, thisAnswer, 'true');
      } else {
        setAccordionAria(thisQuestion, thisAnswer, 'false');
      }
      thisQuestion.classList.toggle('is-collapsed');
      thisQuestion.classList.toggle('is-expanded');
      thisAnswer.classList.toggle('is-collapsed');
      thisAnswer.classList.toggle('is-expanded');

      thisAnswer.classList.toggle('animateIn');
    };
    for (var i = 0, len = accordionToggles.length; i < len; i++) {
      if (touchSupported) {
        accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
      }
      if (pointerSupported) {
        accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
      }
      accordionToggles[i].addEventListener('click', switchAccordion, false);
    }
  })();

  function passenger () {
    var respone = true;
      $(".passenger-field").each(function (i, ele){
            if ( $(ele).val().trim().length < 1)
              response = false;
      })
      return true;
  }

  $(".passenger-field").blur(function() {
      if(passenger())
      {
          $("#accordion3").removeClass("accordion-content accordionItem is-collapsed");
      }
  });

  function checkInfoSecValidity()
  {
      let response = true;
      $(".info-field").each( function(i, ele){
          if($(ele).val().trim().length < 1)
              response =  false;
      })
      return response
  }

  $(".info-field").blur( function(){
    if(checkInfoSecValidity())
        $("#accordion2").removeClass("accordion-content accordionItem is-collapsed")
  })


  $(".Select-Cars button").click( function(){
    cars = [];
    if($(this).hasClass('disselect')) {
        $(this).parents('.Select-Cars').removeClass('active-car')
        $(this).text('Select Car').removeClass('disselect')
    } else {
        $(this).parents('.Select-Cars').addClass('active-car')
        $(this).text('Unselect Car').addClass('disselect')
    }
    $(".active-car").each( function(){
        cars.push($(this).find(".Reservation-cars-name").text())
    })
    $("#cars").val(cars)
})

$(document).ready(function() {

  $("#Payment-Method").change(function() {
    var creditCard = $("#Payment-Method option:selected").val();
    if (creditCard == "credit-card")
    {
        $("#credit-card").css("display", "block")
    } else {
         $("#credit-card").css("display", "none")
         $("#billing-detail-yes").css("display", "none")
    }
  });

  $("#Billing-Detail").change(function() {
      var no = $("#Billing-Detail option:selected").val()

      if(no == "No")
      {
          $("#billing-detail-yes").css("display", "block")
      }else {
          $("#billing-detail-yes").css("display", "none")
      }
  });

    $("#Payment-Method").change(function() {
    var account = $("#Payment-Method option:selected").val()

    if(account == "Account")
    {
        $("#account-selected").css("display", "block")
    } else {
        $("#account-selected").css("display", "none")
    }
});
});

</script>
<!-- End Footer -->
