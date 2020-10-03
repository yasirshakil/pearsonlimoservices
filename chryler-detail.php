<?php
include ('./header.php');
?>


<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center mb-5">
                <h1>chryler-300</h1>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 Cars-Detail-imgBox">
                <img src="images/cars/chryler-300.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <h4 class="mb-2">Chrysler 300 Limousine</h4>
                <p class="mb-2">
                    Chrysler 300 Stretch Limo is an ultra-modern and sleek addition to the Platinum Rides Limousine
                    fleet. This unique retro design is reminiscent and exceptional. The Chrysler 300 limo is very
                    impressive, spacious and elegant. With its interior and amenities,
                    this Chrysler Limo will turn heads. It was created amazingly and the result definitely impresses
                    everyone. It is affordable and will suit all your needs. It represents the pinnacle of style and
                    elegance. You cannot go wrong with choosing
                    this massive fleet limo to get you to your big event.
                    <hr> Platinum Rides is proud to offer this new exotic limousine for the price of a traditional
                    stretch limo. The Chrysler 300 is the perfect wedding vehicln when choosing one of our modern SUV
                    limousines or when you want to stand out from
                    the crowd. Allow Platinum Rides of Greater Toronto provide you with first class service on your
                    special day, special event or prom!
                </p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
                <p>
                    Platinum Rides limousine fleets also are daily inspected and maintained for your safety and comfort
                    in mind. Please call any time to set up an appointment or place your airport transportation request
                    online on the reservation page.
                </p>
                <hr>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <p>Airport transportation for departures and arrivals.<br> Corporate meetings and events transportation
                    services.<br> Comfortable, safe, convenient limousine services.<br> Door to Door transportation
                    Services.</p>
                    <hr>
                <ul>
                    <li>Up to 4 Passengers</li>
                    <li>Black Leather Interior</li>
                    <li>Heated Seats</li>
                    <li>XM Sirius Radio, AUX, DVD Player</li>
                    <li>iPhone/android Charger</li>
                    <li>Complimentary Bottled Water</li>
                    <li>Satellite GPS Vehicle Tracking</li>
                    <li>Electrical Outlet for laptops</li>
                    <li>Rear or Dual Climate Controls</li>
                    <li>Tinted privacy windows</li>
                    <li>All wheel drive, fit for any weather conditions</li>
                    <li>Daily Newspapers and Magazines</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 Cars-Detail p-5">
                <h5 class="ml-2">Chrysler 300 Details</h5>
                <p>
                <div class="About-Car">
                    <i class="fa fa-male mr-3" aria-hidden="true"></i>Max. Passenger: 4<br>
                </div>
                <div class="About-Car">
                    <i class=" fa fa-suitcase mr-2" aria-hidden="true "></i>Max. Baggage: 3<br>
                </div>
                <div class="About-Car">
                    <i class=" fa fa-play mr-2" aria-hidden="true "></i>CD player with AM / FM Surround Sound<br>
                </div>
                <div class="About-Car mb-4">
                    <i class=" fa fa-car mr-1" aria-hidden="true "></i> Tinted Windows
                </div>
                </p>
                <a class="Car-Detail-Btn ml-2 m-3" href=""> Make Reservation</a>
            </div>
            <div class="col-lg-12 col-12">
                <p>We will offer you the most appropriate package according to your desires. After the payment, the deal
                    will be done from both sides. Then, we will inform you officially that your request has been
                    accommodated.</p>
                    <hr>
                <p>
                    Don’t waste your time in searching of useless sites, go on Book now, <br> and reserve your desired
                    car, or Call us at +1 (437) 370-7407 or Tollfree +1 (888) 921-1116.
                </p>
            </div>
        </div>
    </div>
    <script>
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 250) {
                $(".Cars-Detail").addClass("animate__animated animate__backInLeft");
            } else {
                $(".Cars-Detail").removeClass("animate__animated animate__backInLeft");
            }
        });
    </script>
</body>
<div class="scroll-top"></div>
</div>
<?php
    include ('./footer.php');
?>
<!-- End Footer -->