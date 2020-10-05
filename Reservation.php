<?php
include ('./header.php');
?>
<!-- End Header -->
<div class="container">
	<div class="row my-5">
		<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
			<section class="template-title center">
				<h1 class="title has-over">Reservation</h1>
				<span>Reservation</span>
			</section>
		</div>
		<div class="co-lg-12 col-md-12 col-sm-12 col-12">
			<div class="Borders m-auto co-lg-3 col-md-3 col-sm-6 col-6"></div>
		</div>
	</div>
	<!-- <div class="row mb-5">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<h1 class="Limousine-Reservation mb-5">Limousine Reservation:</h1>
					<hr />
					<h1 class="Limousine-Reservation mt-3">Making a Reservation</h1>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 px-4 Detail-Or-Contact mt-4">
					<p style="margin-top: 10px; font-size: 16px">
						<i class="fa fa-info-circle text-warning"></i> If you require
						limousine service within the next 8 hours, or you wish to modify
						an existing reservation, please call
						<a style="color: #d9c77e" href="tel:1905-974-9873">905-974-9873</a>
					</p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 my-4">
					<p class="lead">Thank You for choosing Platinum Rides Limousine!</p>
					<hr />
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<label>Reservation Date</label><br />
					<span class="reservation-date">
						<input type="date" name="reservation-date" value="" class="form-control/" />
					</span>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<label>Hours</label>
					<span class="form-control-wrap">
						<select name="HH" class="required">
							<option value="">HH</option>
						</select>
					</span>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<label>Minuts</label><br />
					<span class="form-control-wrap">
						<select name="MM" class="required">
							<option value="">MM</option>
						</select>
					</span>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<label>AM/PM</label><br />
					<span class="form-control-wrap">
						<select name="AM/PM" class="required">
							<option value="">AM</option>
							<option value="01">PM</option>
						</select>
					</span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<label>No. of passenger</label><br />
					<span class="form-control-wrap">
						<select name="select_pessenger" class="required">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<label>No. of kids</label><br />
					<span class="form-control-wrap">
						<select name="select_kids" class="required">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<label>Child Seat Count</label><br />
					<span class="form-control-wrap">
						<select name="select_child" class="required">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<label># of Pax:</label><br />
					<span class="form-control-wrap">
						<select name="select_pessenger" class="required">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<label>Luggage:</label><br />
					<span class="form-control-wrap">
						<select name="Luggage" class="required">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</span>
				</div>
			</div> -->
	<!-- <div class="row mb-5">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h1 class="From mb-5">From:</h1>
					<hr />
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<label>Pickup From</label><br />
					<span class="form-control-wrap">
						<select name="pickup-from" class="required">
							<option value="Airport">Airport</option>
							<option value="Other">Other</option>
						</select>
					</span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<label>Airport</label><br>
					<span class="form-control-wrap">
						<input type="text" name="pickup-from-name"
							class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control required"
							aria-required="true" aria-invalid="false"></span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<label>Airline</label><br>
					<span class="wpcf7-form-control-wrap pickup-from-airline"><input type="text"
							name="pickup-from-airline" value="" size="40"
							class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control required"
							aria-required="true" aria-invalid="false"></span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<label>Flight No#</label><br>
					<span class="wpcf7-form-control-wrap pickup-from-flightno"><input type="text"
							name="pickup-from-flightno" value="" size="40"
							class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control required"
							id="flightno" aria-required="true" aria-invalid="false"></span>
				</div>
			</div> -->
	<div class="row mb-5">
		<div class="col-lg-12 col-md-12 sm-12 col-12">
			<h3>Information</h3>
		</div>
		<div class="col-lg-6 col-md-6 sm-12 col-12">
			<label for="">Full Name:</label>
			<input type="text" />
		</div>
		<div class="col-lg-6 col-md-6 sm-12 col-12">
			<label for="">Company:</label>
			<input type="text" />
		</div>
		<div class="col-lg-6 col-md-6 sm-12 col-12">
			<label for="">Phone Number:</label>
			<input type="text" />
		</div>
		<div class="col-lg-6 col-md-6 sm-12 col-12">
			<label for="">Company:</label>
			<input type="text" />
		</div>
		<div class="col-lg-3 col-md-3 sm-6 col-6">
			<label for="">Payment Method:</label>
			<select name="" id=""></select>
		</div>
		<div class="col-lg-3 col-md-3 sm-6 col-6">
			<label for="">Vehicle</label>
			<select name="" id=""></select>
		</div>
		<div class="col-lg-12">
			<hr>
			<h3>Reservation</h3>
		</div>
		<div class="col-lg-5 col-md-5 sm-12 col-12">
			<label for="">Date:</label>
			<input type="date" />
		</div>
		<div class="col-lg-3 col-md-3 sm-12 col-12">
			<label for="">Occasion:</label>
			<select name="" id=""></select>
		</div>
		<div class="col-lg-3 col-md-3 sm-6 col-6">
			<label for="">Time:</label>
			<select name="" id=""></select>
			( i.e. 12:00 )
		</div>
		<div class="col-lg-1 col-md-1 sm-6 col-6">
			<label for="">AM/PM</label>
			<select name="" id="">
				<option value="AM">AM</option>
				<option value="PM">PM</option>
			</select>
		</div>
		<div class="col-lg-12">
			<hr>
			<h3>Form:</h3>
			<p>
				<b>Are you arriving at a Toronto Airport?</b>
				<input type="radio" name="ResFromChoice" value="Yes" onclick=""> Yes
				<input type="radio" name="ResFromChoice" value="No" onclick="" checked=""> No
			</p>
		</div>
	</div>
</div>

<?php
    include ('./footer.php');
?>
<!-- End Footer -->