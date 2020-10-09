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
    <a href="#accordion2" aria-expanded="false" aria-controls="accordion2"
      class="accordion-title accordionTitle js-accordionTrigger">Shipping Information</a>
  </dt>
  <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
    <div class="container-fluid" style="padding-top: 20px;">
      <p class="headings">Shipping Address</p>
      <form class="main-container my-4">
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">Pickup time</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
            <input class="reservation-form" type="time">
            <i class="i-icon">i</i>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">Pickup Date</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
            <input class="reservation-form" type="date">
            <i class="i-icon">i</i>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">Your Location</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
            <input class="reservation-form" type="text">
            <i class="i-icon">i</i>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
            <label class="" for="">Drop Location</label>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
            <input class="reservation-form" type="text">
            <i class="i-icon">i</i>
          </div>
        </div>
      </form>
    </div>
  </dd>
  <div class="accordion">
    <dl>
      <!-- description list -->
      <dt>
        <!-- accordion tab 1 - Delivery and Pickup Options -->
        <a href="#accordion1" aria-expanded="false" aria-controls="accordion1"
          class="accordion-title accordionTitle js-accordionTrigger">Delivery and Pickup Options</a>
      </dt>
      <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
        <div class="container-fluid">
          <div class="row">
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
                <img src="images/cars/gmc.png" alt="">
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
    <a href="#accordion3" aria-expanded="false" aria-controls="accordion3"
      class="accordion-title accordionTitle js-accordionTrigger">Payment Information</a>
  </dt>
  <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
    <div class="container-fluid" style="padding-top: 20px;">
      <p class="headings">Billing Information</p>
      <form class="main-container my-4">
        <form class="main-container my-4">
          <div class="row mb-3">
            <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
              <label class="" for="">Full Name</label>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
              <input class="reservation-form" type="text">
              <i class="i-icon">i</i>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
              <label class="" for="">Phone Number</label>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
              <input class="reservation-form" type="text">
              <i class="i-icon">i</i>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
              <label class="" for="">Address Line 1</label>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
              <input class="reservation-form" type="text">
              <i class="i-icon">i</i>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
              <label class="" for="">Line 2</label>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
              <input class="reservation-form" type="text">
              <i class="i-icon">i</i>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
              <label class="" for="">Write City</label>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
              <input class="reservation-form" type="text">
              <i class="i-icon">i</i>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
              <label class="" for="">Write State</label>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
              <input class="reservation-form" type="text">
              <i class="i-icon">i</i>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
              <label class="" for="">Write Country</label>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
              <input class="reservation-form" type="text">
              <i class="i-icon">i</i>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-2 col-md-3 col-sm-12 col-12 Label-Box">
              <label class="" for="">Zip Code</label>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 Form-section">
              <input class="reservation-form" type="text">
              <i class="i-icon">i</i>
            </div>
          </div>
        </form>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
            <h1>Payment Option</h1>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label> Payment Option</label><br><span class="">
              <span class="">
                <span class="">
                  <input class="mr-1" type="radio" name="payment-option" value="In car payment Cash/Debit/Credit"
                    checked="checked">
                  <span class="mr-2">
                    In car payment Cash/Debit/Credit</span>
                </span>
                <span class="mx-2">
                  <input type="radio" name="payment-option" value="Credit Card">
                  <span class="mx-2">Credit Card</span>
                </span>
                <span class="">
                  <input type="radio" name="payment-option" value="Account">
                    <span class="">Account</span>
                </span>
              </span>
            </span>
          </div>
        </div>
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
</script>
<!-- end container -->

<?php
	include ('./footer.php');
?>
<!-- End Footer -->