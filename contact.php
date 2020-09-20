<?php
include ('./header.php');
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
					<form id="contact-form">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
							<h3 class="Form-Tital">Please fulfil the form below.</h3>
						</div>
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
									<select class="Select" name="" id="" required="" name="hours">
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
								<input class="Contact-detail" type="tel" maxlength="15" name="number" required="">
							</div>
							<div class=" BtnBox col-lg-12 col-md-12 col-sm-12 col-12 mt-3 text-right">
								<!-- <div class="">
									<button type="submit submit-after">Submit</button>
								</div> -->
								<button type="submit" class="Contact-Btn"> Submit </button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-4 pl-md-5">
					<div class="address-box">
						<h4>Melbourne, Australia</h4>
						<p>329 Queensberry Street, North Melbourne VIC 3051, Australia. </p>
						<div class="contact">
							<p><span>Email: </span><a style="color:#000;" href="mailto:info@pearsonlimoservices.ca">info@pearsonlimoservices.ca</a></p>
							<p><span>Skype: </span>prodrive</p>
						</div>
					</div>
					<div class="address-box style1">
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
								<li>
									<a href="#" title="">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#" title="">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#" title="">
										<i class="fa fa-linkedin" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#" title="">
										<i class="fa fa-instagram" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#" title="">
										<i class="fa fa-envelope-open" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#" title="">
										<i class="fa fa-google-plus" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
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
	<script type="text/javascript">
		$("#contact-form").validate({ 	
		    errorClass: "validate-error"
		});
	</script>
<!-- End Footer -->