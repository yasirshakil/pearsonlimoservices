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
      class="accordion-title accordionTitle js-accordionTrigger">Information</a>
  </dt>
  <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
    <div class="container-fluid" style="padding-top: 20px;">
      <p class="headings">Information</p>
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
                <img src="images/cars/bentlet.png" alt="">
              </div>
              <div class="reservation-cars-select">
                  <h5 class="mb-1">Benlet</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/bentlet.png" alt="">
              </div>
              <div class="reservation-cars-select">
                  <h5 class="mb-1">Benlet</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/bentlet.png" alt="">
              </div>
              <div class="reservation-cars-select">
                  <h5 class="mb-1">Benlet</h5>
                <button>Select Car</button>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-2 Select-Cars">
              <div class="reservation-cars">
                <img src="images/cars/bentlet.png" alt="">
              </div>
              <div class="reservation-cars-select">
                  <h5 class="mb-1">Benlet</h5>
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
      <form class="main-container">
        <div class="row">
          <div class="col-xs-4">
            <label for="fullname" class="label-style">Full Name</label>
          </div>
          <div class="form-group col-lg-4">
            <input type="text" id="fullname" class="form-control" placeholder="Enter your full name" required>
          </div>
          <div class="hint">
            <i class="hint-icon">i</i>
            <p class="hint-description">Enter your full name</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4">
            <label for="companyname" class="label-style">Company Name</label>
          </div>
          <div class="form-group col-lg-4">
            <input type="text" id="companyname" class="form-control" placeholder="Enter Company Name (optional)"
              required>
          </div>
          <div class="hint">
            <i class="hint-icon">i</i>
            <p class="hint-description">Enter your Company name</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4">
            <label for="phonenumber" class="label-style">Phone Number</label>
          </div>
          <div class="form-group col-lg-4">
            <input type="text" id="phonenumber" class="form-control" placeholder="Enter Phone Number" required>
          </div>
          <div class="hint">
            <i class="hint-icon">i</i>
            <p class="hint-description">In (555)5555-555 Format</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4">
            <label for="address-line1" class="label-style">Address Line 1</label>
          </div>
          <div class="form-group col-lg-4">
            <input type="text" id="address-line1" class="form-control" placeholder="Enter Address" required>
          </div>
          <div class="hint">
            <i class="hint-icon">i</i>
            <p class="hint-description">Address Line 1</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4">
            <label for="address-line2" class="label-style">Line 2</label>
          </div>
          <div class="form-group col-lg-4">
            <input type="text" id="address-line2" class="form-control" placeholder="Apt, Suite, Bldg (optional)"
              required>
          </div>
          <div class="hint">
            <i class="hint-icon">i</i>
            <p class="hint-description">Address Line 2</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4">
            <label for="city" class="label-style">City</label>
          </div>
          <div class="form-group col-lg-4">
            <input type="text" id="city" class="form-control" placeholder="Enter City" required>
          </div>
          <div class="hint">
            <i class="hint-icon">i</i>
            <p class="hint-description">Enter your City</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4">
            <label for="state" class="label-style">State</label>
          </div>
          <div class="form-group col-lg-4">
            <input type="text" id="state" class="form-control" placeholder="Enter State" required>
          </div>
          <div class="hint">
            <i class="hint-icon">i</i>
            <p class="hint-description">Ex: Indiana as IN</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4">
            <label for="country" class="label-style">Country</label>
          </div>
          <div class="form-group col-lg-4">
            <input type="text" id="country" class="form-control" placeholder="Enter Country" required>
          </div>
          <div class="hint">
            <i class="hint-icon">i</i>
            <p class="hint-description">Enter your country</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4">
            <label for="zipcode" class="label-style">Zip Code</label>
          </div>
          <div class="form-group col-lg-4">
            <input type="text" id="address-line2" class="form-control" placeholder="Enter Zip Code" required>
          </div>
          <div class="hint">
            <i class="hint-icon">i</i>
            <p class="hint-description">Enter ZipCode.</p>
          </div>
        </div>
        <div class="button-container">
          <button class="btn btn-success" type="submit">Submit</button>
          <button class="btn btn-warning" type="reset">Reset</button>
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