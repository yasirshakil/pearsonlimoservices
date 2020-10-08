<?php
	include('./header.php');
?>
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
	<div class="row mt-5">
		<div id="collapse-div" class="col-lg-12 collapse-box mb-5">
			<button class="mb-4" onclick="Collapse(1)">Reservation Form</button>
		</div>
	</div>
</div>

<div id="collapse-div2" class="container collapse-box mb-5">
	<button class="mb-4" onclick="Collapse(2)">Select Cars</button>
	<div class="row">
		<div class="col-lg-3 SelectCars"></div>
		<div class="col-lg-3 SelectCars"></div>
		<div class="col-lg-3 SelectCars"></div>
		<div class="col-lg-3 SelectCars"></div>
		<div class="col-lg-3 SelectCars"></div>
		<div class="col-lg-3 SelectCars"></div>
		<div class="col-lg-3 SelectCars"></div>
		<div class="col-lg-3 SelectCars"></div>
		<div class="col-lg-3 SelectCars"></div>
		<div class="col-lg-3 SelectCars"></div>
		<div class="col-lg-3 SelectCars"></div>
		<div class="col-lg-3 SelectCars"></div>
		<div class="col-lg-3 SelectCars"></div>
		<div class="col-lg-3 SelectCars"></div>
		<div class="col-lg-3 SelectCars"></div>
		<div class="col-lg-3 SelectCars"></div>
	</div>
</div>

<div class="container">
	<div class="row mb-5">
		<div id="collapse-div3" class="col-lg-12 collapse-box mb-5">
			<button class="mb-4" onclick="Collapse(3)">Payment Mathods</button>
		</div>
		<div id="collapse-div4" class="col-lg-12 collapse-box mb-5">
			<button class="mb-4" onclick="Collapse(4)">Select Cars</button>
		</div>
	</div>
</div>
<script>
	let Collapse_div = document.getElementById("collapse-div")
	let Collapse_div2 = document.getElementById("collapse-div2")
	let Collapse_div3 = document.getElementById("collapse-div3")
	let Collapse_div4 = document.getElementById("collapse-div4")


	Collapse_div.style.height = "500px"
	Collapse_div2.style.height = "40px"
	Collapse_div3.style.height = "40px"
	Collapse_div4.style.height = "40px"
	function Collapse(x, v) {
		if (x == 1) {
			if (Collapse_div.style.height == "500px") {
				Collapse_div.style.height = "40px"
			}
			else {
				Collapse_div.style.height = "500px"
			}
		}
		if (x == 2) {
			if (Collapse_div2.style.height == "768px") {
				Collapse_div2.style.height = "40px"
			}
			else {
				Collapse_div2.style.height = "768px"
			}
		}
		if (x == 3) {
			if (Collapse_div3.style.height == "500px") {
				Collapse_div3.style.height = "40px"
			}
			else {
				Collapse_div3.style.height = "500px"
			}
		}
		if (x == 4) {
			if (Collapse_div4.style.height == "500px") {
				Collapse_div4.style.height = "40px"
			}
			else {
				Collapse_div4.style.height = "500px"
			}
		}
	}
</script>

<?php
    include ('./footer.php');
?>