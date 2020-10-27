<?php
include ('./header.php');
?>
<!-- Start About Area -->
<section class="about">
	<div class="">
		<div class="col-md-12">
			<section class="template-title center">
				<h1 class="title has-over animate__animated animate__zoomInDown animate__delay-1s 1s">About Us</h1>
				<span>About us</span>
				<div class="co-lg-12 col-md-12 col-sm-12 col-12 mb-1 mt-1">
					<div class="Borders m-auto co-lg-2 col-md-2 col-sm-6 col-6"></div>
				</div>
			</section>
		</div>
	</div>
	<section>
		<div class="container">
		<div class="">
			<div style="float:right;" class="col-lg-5 col-md-12 col-sm-12 col-12 Modal p-0 animate__animated animate__fadeInLeftBig animate__delay-1s 1s">
				<div class="sdl-booking add-box AddBox adjust-modal-about">
					<div class="top-modal">
						<a class="Get-a-quote" href="#bk-1">Get A Quote</a>
						<a class="Book" href="Reservation.php">Book Now</a>
					</div>
					<div id="bk-1" class="schedule-booking">
						<form class="form-booking px-3" method="post" id="get-a-quote" action="/functions.php">
							<input type="hidden" name="form_of" value="get-a-quote">
							<div class="pick-date">
								<label>Pick Up Date</label>
								<div class=" date form_date" data-date="" data-date-format="dd MM yyyy"
									data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
									<input size="16" name="pickup-date" type="text" value=""
										placeholder="Wed 19 July, 2017" readonly="">
									<span class="add-on"><i class="icon-remove"></i></span>
									<span class="add-on"><i class="icon-th"></i></span>
								</div>
								<input type="hidden" id="dtp_input2" value=""><br>
							</div>
							<div class="pick-time">
								<label>Pick Up Time</label>
								<div class="controls input-append date form_time" data-date=""
									data-date-format="hh:ii p" data-link-field="dtp_input3"
									data-link-format="hh:ii">
									<input size="16" type="text" value="" name="pickup-time" placeholder="12:25 am"
										readonly="">
									<span class="add-on"><i class="icon-remove"></i></span>
									<span class="add-on"><i class="icon-th"></i></span>
								</div>
								<input type="hidden" id="dtp_input3" value=""><br>
							</div>
							<div class="pick-address">
								<label>Name</label>
								<input type="text" name="name" placeholder=" Name">
							</div>
							<div class="pick-address">
								<label>Email</label>
								<input type="email" name="email" placeholder="Email">
							</div>
							<div class="pick-address">
								<label>Phone-No</label>
								<input type="text" name="contact" placeholder="Contact">
							</div>
							<div class="pick-address">
								<label>PickUp Address</label>
								<input type="text" name="pickup" placeholder="PickUp Address">
							</div>
							<div class="pick-dropday">
								<label>Drop Off Address</label>
								<input type="text" name="drop-off" placeholder="From: address">
							</div>
							<div class="btn-submit">
								<a href="javascript:void(0)" id="form-submit-link" class="About-Point-2">
									Submit
									<img src="images/icon/arrow-white.png" alt="">
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
			<div class="">
				<div class="col-lg-7 col-md-12 col-sm-12 col-12 padding">
					<p class="mb-2  text-justify">
						At Pearson Limo Service we believe our client is our priority. We strive in serving you as per
						your requirement.
						We focus on differentiating our service quality to make your limousine ride a memorable
						experience. Our dedicated
						and trained team of professionals are always there to help you find the best limousine solution
						for your travel needs.
						Pearson Limo Service, is the name you can rely on as we believe in giving superior quality
						service and placing our customers
						as our priority. <br>
						We have devised a system which ensures a comfortable and luxurious limo ride each time you book
						with us. Pearson Limo service is dedicated toward achieving the best industry standards. We
						focus on limousines rental solutions which match your needs, we provide what you require.
					</p>
					<h3 style="color:#d9c77e;font-weight:bold;" class="mb-2 text-justify About-Services-point">Approach:
					</h3>
					<p class="mb-2">
						Our approach is simple, understanding your needs is our main focus. We have a wide range of limo
						fleet with multiple standard packages for limousine rentals. What makes us different from others
						is that we dont tell you which limousine ride is available, we cater your choice of a limo and
						make it available at your doorstep. That is why we always say:
					</p>
					<h3 class="mb-4 text-center"><b>“A limousine experience that is hard to forget”</b></h3>
					<h3 style="color:#d9c77e;font-weight:bold;" class="About-Point-1">Call To Action:</h3>
					<p class="mb-2 text-justify">
						If you want to feel the difference and you are looking for a quality limo rental solution, we
						are the right fit for you. Our three step solution makes it easier for you to have a limo ride
						on your doorstep within no time. Information, confirmation and you are all set for your
						destination. Booking a Limousine is as simple as that with Pearson Limousines services. We would
						cater all your needs: airport transfers. Wedding limo rental, Niagara Limo rentals, corporate
						limo services, out of town and special occasion limo service, and personalized limo solutions.
					</p>
				</div>			
			</div>
		</div>
	</section>
</section>
<section class="template-title has-over ovvs">
	<div class="container">
		<h3 class="title About-Services">Our Services</h3>
		<div class="row">
			<div class="co-lg-12 col-md-12 col-sm-12 col-12 mb-2 mt-2">
				<div class="Borders m-auto co-lg-3 col-md-3 col-sm-6 col-6"></div>
			</div>
		</div>
		<p class="subtitle">Our services is what makes the difference</p>
	</div>
</section>
<section>
	<div class="container Animation-About">
		<div class="row about-row-1-services ">
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 Col-Box">
				<img class="Box-Image" src="images/FleetBox_images/fleet1.jpg" alt="">
				<div class="Content-Box">
					<h2 class="mb-3">Airport Limo Service</h2>
					<div class="borderr"></div>
					<p style="margin-bottom:48px;" class="bb-descr mt-3">
						Looking to book a limo for the airport transfer. We are here to help with the best service
						and luxurious fleet. We have a dedicated fleet for airport transfers which covers all
						international and domestic airports of GTA. Call us at <a class="Highlight"
							href="tel:437-800-1547">437-800-1547</a> for your perfect ride to
						airport.
					</p>
					<div>
						<div class="LinksBox">
							<a class="Box-Links" href="Reservation.php">BOOK NOW</a>
							<div class="LinkBorder"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 Col-Box">
				<img class="Box-Image" src="images/FleetBox_images/fleet5.jpeg" alt="">
				<div class="Content-Box">
					<h2 class="mb-3">Corporate Limo Service</h2>
					<div class="borderr"></div>
					<p style="margin-bottom:24px;" class="bb-descr mt-3">
						Limo Service for the corporate world is specifically designed to attend professional
						needs of the corporate world. This service includes limousines rentals for corporate
						meetings and recreational activities.
						You can also book this service for airport transfers. Have an important meeting? you
						need a reliable limo service.
					</p>
					<div class="LinksBox">
						<a class="Box-Links" href="Reservation.php">BOOK NOW</a>
						<div class="LinkBorder"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 Col-Box">
				<img class="Box-Image" src="images/FleetBox_images/Wedding-Limo.jpeg" alt="">
				<div class="Content-Box">
					<h2 class="mb-3">Wedding Limo Rentals</h2>
					<div class="borderr"></div>
					<p class="bb-descr mt-3">
						Planning for the big day, make it grand by planning on booking a limo. Imagine bringing her
						home in stretch limo with luxury interior and comfort. We would love to be a part of your
						special day by offering you the best limo service. We have a range of limo rides for you to
						choose from. Visit our fleet for more information or Call us at <a class="Highlight"
							href="tel:437-800-1547">437-800-1547</a> for your special
						ride.
					</p>
					<div class="LinksBox">
						<a class="Box-Links" href="Reservation.php">BOOK NOW</a>
						<div class="LinkBorder"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row about-row-2-services">
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 Col-Box">
				<img class="Box-Image" src="images/FleetBox_images/fleet3.jpg" alt="">
				<div class="Content-Box">
					<h2 class="mb-3">Special Occasion Limo</h2>
					<div class="borderr"></div>
					<p style="margin-bottom:20px;" class="bb-descr mt-3">
						Looking to plan a party, a special event or even a date with a special someone. If you want
						to feel confident and amazing you need a luxury limo ride to reach that occasion. We
						understand the power of first impressions, therefore we would make sure you have a great
						first impression on your special occasion. Call us at <a class="Highlight"
							href="tel:437-800-1547">437-800-1547</a> for a limo ride.
					</p>
					<div class="LinksBox">
						<a class="Box-Links" href="Reservation.php">BOOK NOW</a>
						<div class="LinkBorder"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 Col-Box">
				<img class="Box-Image" src="images/FleetBox_images/Niggra-Falls.jpeg" alt="">
				<div class="Content-Box">
					<h2 class="mb-3">Niagara Falls Tours</h2>
					<div class="borderr"></div>
					<p style="margin-bottom:43px;" class="bb-descr mt-3">
						Planning a day at Niagara fall makes it as memorable as seeing the falls through booking a
						luxury limo for your ride to niagara. We guarantee a comfortable trip to the wonder of the
						world Niagara falls. Call us at <a class="Highlight" href="tel:437-800-1547">437-800-1547</a>
						for special Niagara Limo Deals.
					</p>
					<div class="LinksBox">
						<a class="Box-Links" href="Reservation.php">BOOK NOW</a>
						<div class="LinkBorder"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 Col-Box mb-5">
				<img class="Box-Image" src="images/FleetBox_images/fleet6.png" alt="">
				<div class="Content-Box">
					<h2 class="mb-3">Pearson For You <br>( Custom Solutions)</h2>
					<div class="borderr"></div>
					<p style="margin-bottom:36px;" class="bb-descr mt-3">
						If you think you have a certain set of requirements not covered in our standard packages. We
						are more than willing to help you with a customized limousine rental solution. Call us at
						<a class="Highlight" href="tel:437-800-1547">437-800-1547</a> for custom limo solutions.
					</p>
					<div class="LinksBox">
						<a class="Box-Links" href="Reservation.php">BOOK NOW</a>
						<div class="LinkBorder"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<section class="testimonial testimonial-Dummy parallax">
		<div class="container">
			<div class="fleet-carousel" data-columns="1">
				<div class="owl-carousel">
					<div class="items">
						<div class="content">
							<img src="images/icon/qteleft.png" class="first" alt="">
							<p> Our experience was awesome! Our plane was earlier than even the updates showed so we were at baggage claim slightly before the driver arrived but he took our bags to the car for us and provided an excellent smooth ride to our hotel! I would totally recommend it to a friend!</p>
							<img src="images/icon/qteright.png" class="last" alt="">
						</div>
						<div class="info">
							<h4 class="name">Alma Patterson</h4>
							<!-- <p class="company">General Manager, Coca Co.</p> -->
						</div>
					</div>
					<div class="items">
						<div class="content">
							<img src="images/icon/qteleft.png" class="first" alt="">
							<p>We used Pearson Limo service to pick up at Toronto Pearson Airport and deliver to a hotel in midtown. Our flight arrived about 20 mins early and our driver was there to meet us for early arrival. Car was clean, driver nice and professional, trip uneventful. Had a different driver returned to Toronto Pearson Airport, again the driver was able to respond to an earlier pickup within 10 mins of request, professional and calm. Car clean. I would use it again. Price comparable to other companies.</p>
							<img src="images/icon/qteright.png" class="last" alt="">
						</div>
						<div class="info">
							<h4 class="name">Michael Cooke</h4>
							<!-- <p class="company">General Manager, Coca Co.</p> -->
						</div>
					</div>
					<div class="items">
						<div class="content">
							<img src="images/icon/qteleft.png" class="first" alt="">
							<p>I would highly recommend it! Our driver Malik was so nice. Communication was on spot. We were so pleased with our service; we booked another car to pick up our friends when they arrived in YTZ. Also, some other friends of ours booked as well. It took the stress and hassle out of trying to find a ride into Toronto. The peace of mind was worth it!! Thank you again for superb and friendly service. Will use again!!</p>
							<img src="images/icon/qteright.png" class="last" alt="">
						</div>
						<div class="info">
							<h4 class="name">Cherie Brown</h4>
						</div>
					</div>
					<div class="items">
						<div class="content">
							<img src="images/icon/qteleft.png" class="first" alt="">
							<p>We celebrated our wedding last week and the transportation was excellent thanks to Pearson Limo Service. Our 52 guests traveled in a large bus (all of them said it was very comfortable) and we did it in a very nice limo, Hummer. The company gave us a simple but elegant decoration of the vehicle, which my wife and I loved. We really appreciate the punctuality that the drivers had, since it was a very special day for us and we didn't want to be worried about anything. Thanks also to the coordinator Paul who was attentive to our requests all the time.</p>
							<img src="images/icon/qteright.png" class="last" alt="">
						</div>
						<div class="info">
							<h4 class="name">Amy Adam</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
	include ('./footer.php');
?>

<script>
	$("#form-submit-link").click(function (e) {
		e.preventDefault()
		if ($("#get-a-quote").valid()) {
			$(".loader-div").removeClass("d-none").addClass('loader-background')
			$.ajax({
				url: $("#get-a-quote").attr('action'),
				type: 'post',
				data: $('#get-a-quote').serialize(),
				success: function (json) {
					if (json['status_code'] == 200) {
						$("#contact-form")[0].reset();

						$("select").each(function () {
							$(this).children('option:eq(0)').trigger('change');
						});

						$('#get-a-quote').before('<div class="alert alert-success alert-dismissible">' + json['message'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
					}
					$(".alert-success").fadeTo(2000, 500).slideUp(500, function () {
						$(".alert-success").slideUp(500);
						$(".alert-success").remove()
					});
				},
				error: function (xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			}).done(function () {
				$(".loader-div").addClass("d-none").removeClass('loader-background')
			});
		}
	})

	$("#get-a-quote").validate({
		errorClass: "validate-error"
	});
</script>
<!-- End Footer -->