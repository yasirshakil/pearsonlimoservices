<?php
include ('./header.php');
require_once('recaptchalib.php');

$publickey = "6LfYC88ZAAAAALDFxQp0cQUNfw3fljwfQOzx8Fee";
?>
	<!-- Start contact Area -->
	<section class="contact-area">
		<div class="container">
			<div class="template-title center has-over">
				<h1>Contact Us</h1>
				<span>Contact Us</span>
				<div class="row">
					<div class="co-lg-12 col-md-12 col-sm-12 col-12 mb-2 mt-2">
						<div class="Borders m-auto co-lg-12 col-md-4 col-sm-6 col-6"></div>
					</div>
				</div>
			</div>
			<div class="mt-5 py-3 row">
				<div class="col-md-8 Form-bg h-100 py-3">
					<form id="contact-form" method="POST" action="/functions.php">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
							<h3 class="Form-Tital">Please fulfil the form below.</h3>
						</div>
						<input type="hidden" name="form_of" value="contact">
						<div class="row mt-5">
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<div style="width=:100%;" class="field-Box">
									<label for="">Reservation Date</label>
									<input class="data-time" type="date" required="" name="date">
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-12 col-12">
								<div class="field-Box">
									<label for="">Hours</label>
									<select class="Select" id="" required="" name="hours">
										<option value="">Hours</option>
										<option value="01">01</option>
										<option value="02">02</option>
										<option value="03">03</option>
										<option value="04">04</option>
										<option value="05">05</option>
										<option value="06">06</option>
										<option value="07">07</option>
										<option value="08">08</option>
										<option value="09">09</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-12 col-12">
								<div class="field-Box">
									<label for="">Minuts</label>
									<select class="Select" id="" required="" name="minutes">
										<option value="">MM</option>
										<option value="05">05</option>
										<option value="10">10</option>
										<option value="15">15</option>
										<option value="20">20</option>
										<option value="25">25</option>
										<option value="30">30</option>
										<option value="35">35</option>
										<option value="40">40</option>
										<option value="45">45</option>
										<option value="50">50</option>
										<option value="55">55</option>
										<option value="60">60</option>
									</select>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-12 col-12">
								<div class="field-Box">
									<label for="">Am/Pm</label>
									<select class="Select" name="period" id="">
										<option value="AM">AM</option>
										<option value="PM">PM</option>
									</select>
								</div>
							</div>
						</div>
						<hr>
						<div class="row mt-2">
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<label for="">Select Car</label>
								<select name="select-car" class="Select">
								    <option value="CHRYSLER 300">CHRYSLER 300</option>
								    <option value="BMW 750I">BMW 750I</option>
								    <option value="CADDILAC XTS">CADDILAC XTS</option>
								    <option value="MERCEDES S550">MERCEDES S550</option>
								    <option value="CHEVROLET SUBURBAN">CHEVROLET SUBURBAN</option>
								    <option value="CADDILAC ESCLADE PLATINUM">CADDILAC ESCLADE PLATINUM</option>
								    <option value="ROLLS ROYCE PHANTOM">ROLLS ROYCE PHANTOM</option>
								    <option value="LINCOLN MKT STRETCH LIMOUSINE">LINCOLN MKT STRETCH LIMOUSINE</option>
								    <option value="HUMMER STRETCH LIMOUSINE">HUMMER STRETCH LIMOUSINE</option>
								    <option value="MERCEDES BENZ SPRINTER">MERCEDES BENZ SPRINTER</option>
								    <option value="24 PASSENGER MINIBUS">24 PASSENGER MINIBUS</option>
								    <option value="36 PASSENGER BUS">36 PASSENGER BUS</option>
								    <option value="LIMO BUS">LIMO BUS</option>
								    <option value="55 PASSENGER LIMO BUS">55 PASSENGER LIMO BUS</option>
								</select>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<label for="">Name</label>
								<input class="Contact-detail" name="name" minlength="3" maxlength="70" type="text" required="">
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<label for="">Email</label>
								<input class="Contact-detail" type="email" name="email" minlength="3" maxlength="64"  required="">
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<label for="">Phone Number</label>
								<input class="Contact-detail" type="tel" maxlength="15" name="telephone" required="">
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<?php echo recaptcha_get_html($publickey, $error); ?>
							</div>
							<div class=" BtnBox col-lg-12 col-md-12 col-sm-12 col-12 mt-3 text-right">
								<!-- <div class="">
									<button type="submit submit-after">Submit</button>
								</div> -->
								<input type="submit" name="submit" class="Contact-Btn" value="submit" />
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-4 pl-md-5">
					<div class="address-box">
						<p class="mb-2">Let’s get in touch and here out your requirements. We have a dedicated line to answer all your questions. Following are the ways you can contact us.</p>
						<p class="mb-2"><b>32 English Lane Brantford, ON N3T 5L5</b></p>
						<div class="contact">
							<p class="makeReservation"><a href="mailto:info@pearsonlimoservices.ca"><i class="fa fa-envelope"></i>info@pearsonlimoservices.ca</a></p>
							<p class="makeReservation"><a href="tel:+18889003001"><i class="fa fa-phone"></i>+1888-900-3001</a></p>
                    		<p class="makeReservation"><a href="tel:+19059749873"><i class="fa fa-mobile-phone"></i>+1905-974-9873</a></p>
						</div>
					</div>
					<!-- <div class="address-box style1">
						<h4>Call directly</h4>
						<p><a style="color: #d9c77e;" href="tel:+14373707407">+1 (437) 370-7407</a></p>
						<div class="hours">
							<h5>Work Hours</h5>
							<ul>
								<li>Monday - Friday : 08h00 - 17h30</li>
								<li>Saturday: 08h00 - 12h00, Sunday off work</li>
							</ul>
						</div>
						<div class="follow">
							<h5>Follow Us</h5>
							<ul>

							</ul>
						</div>
					</div> -->
				</div>
			</div>
		</div>
		<hr>
	</section>
	<div class="w-100">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5771.065461733466!2d-79.813125!3d43.678687!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b1489f9bd91c3%3A0xac6fe621a7d305c1!2s17%20Willick%20Pl%2C%20Brampton%2C%20ON%20L6X%204Z5%2C%20Canada!5e0!3m2!1sen!2sus!4v1600577310613!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>



	<!-- End contact Area -->
<!-- Start Footer -->
<?php
	include ('./footer.php');
?>
<!-- <script>
	$("#contact-form").submit( function(e){
		e.preventDefault()
		if( $(this).valid() ) {
			$(".loader-div").removeClass("d-none").addClass('loader-background')
			$.ajax({
	          url     : $(this).attr('action'),
	          type    : 'post',
	          dataType: 'json',
	          data    : $('#contact-form input').serialize(),
	          success : function(json) {
	            if(json['status_code'] == 200) {
	              $("#contact-form")[0].reset();

	              $("select").each( function(){
	                    $(this).children('option:eq(0)').trigger('change');
	              });

	              $('.Form-bg').prepend('<div class="alert alert-success alert-dismissible">' + json['message'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
	            }
	            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
	              $(".alert-success").slideUp(500);
	              $(".alert-success").remove()
	            });
	          },
	          error: function(xhr, ajaxOptions, thrownError) {
	            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
	          }
	        }).done(function() {
	          $(".loader-div").addClass("d-none").removeClass('loader-background')
	        });
		}
	})

	$("#contact-form").validate({
	    errorClass: "validate-error"
	});
</script> -->
<!-- End Footer -->
<!-- <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//echo "<script> alert("working"); </script>";
echo "Start";

die('hello');

// if(isset($_POST['submit'])) {
// 	die('hello');
// }
	// if (isset($_POST['submit']))
	// {
	// 	$date      = $_POST['date'];
	// 	$hours     = $_POST['hours'];
	// 	$minutes   = $_POST['minutes'];
	// 	$period    = $_POST['period'];
	// 	$selectcar = $_POST['select-car'];
	// 	$name      = $_POST['name'];
	// 	$email     = $_POST['email'];
	// 	$number    = $_POST['number'];
	// 	if ($date == '' || $hours == '' || $minutes == '' || $period == '' || $selectcar == '' || $name == '' || $email == '' || $number == '') {
	// 			//echo "<script> alert("all fields required"); </script>";
	// 		echo "Required";
	// 	}

	// 	$form      = "Pearson Limo Service";
	// 	$webmaster = "info@pearsonlimoservice.ca"
	// 	$to        = "m.yasirshakil@gmail.com";
	// 	$subject   = "Contact Us form Pearsonlimoservice"
	// 	$headers   = "From: " . $from . "<" . $webmaster . ">\r\n";
	// 	$headers   .= "X-Mailer: PHP/". phpversion() . "\r\n";
	// 	$headers   .= "MIME-Version: 1.0" . "\r\n";
	// 	$headers   .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	// 	$message   = "<html><body>";
	// 	$message   .= "<p> Date:". $_POST['date'] . "<p>";
	// 	$message   .= "<p> Hours:". $_POST['hours'] . "<p>";
	// 	$message   .= "<p> Minutes:". $_POST['minutes'] . "<p>";
	// 	$message   .= "<p> Period:". $_POST['period'] . "<p>";
	// 	$message   .= "<p> Select Car:". $_POST['select-car'] . "<p>";
	// 	$message   .= "<p> Name:". $_POST['name'] . "<p>";
	// 	$message   .= "<p> Email:". $_POST['email'] . "<p>";
	// 	$message   .= "<p> Phone Number:". $_POST['number'] . "<p>";
	// 	$sendmail  = mail($to, $subject, $message, $headers);
	// 	//echo "<script> alert("Thank you") </script>";
	// 	echo "End";
	// }
?> -->
