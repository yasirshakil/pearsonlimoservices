$(document).ready(function () {
    $(".gg").waypoint(function (direction) {
        $(".Our-fleet").addClass("animate__animated animate__backInUp");
    });
    $(".Home-point-2").waypoint(function (direction) {
        $(".Get-Class").addClass("animate__animated animate__backInUp");
    });
    $(".Home-point-2").waypoint(function (direction) {
        $(".howItWorks-ImgBox").addClass(
            "animate__animated animate__fadeInLeftBig"
        );
    });
    $(".Home-point-2").waypoint(function (direction) {
        $(".Works-Imformation").addClass(
            "animate__animated animate__fadeInRightBig"
        );
    });
    $(".Services-Animated-point").waypoint(function (direction) {
        $(".Services-animate").addClass("animate__animated animate__backInUp");
    });
    $(".Services-Animated-point").waypoint(function (direction) {
        $(".Animate-row-1-services").addClass(
            "animate__animated animate__fadeInRightBig"
        );
    });
    $(".Services-Animated-point").waypoint(function (direction) {
        $(".Animate-row-2-services").addClass(
            "animate__animated animate__fadeInLeftBig"
        );
    });
});




var placeSearch = [], autocompletes = [];
    
function initialize() {

    for(var i=1; i<= $('[id^="street_address"]').length; i++){
        autocompletes[i] = new google.maps.places.Autocomplete(
            document.getElementById('street_address_'+i), {types: ['geocode']}
        );
        autocompletes[i].street_address = 'street_address_'+i;
        autocompletes[i].address_city = 'address_city_'+i;
        autocompletes[i].address_postal_code = 'address_postal_code_'+i;
        autocompletes[i].addListener('place_changed', fillInAddress);
    }
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = this.getPlace();

  (document.getElementById(this.address_city) != null) ? document.getElementById(this.address_city).value = '' : '';
  (document.getElementById(this.address_postal_code) != null) ? document.getElementById(this.address_postal_code).value = '' : '';
    
  for (var i = 0; i < place.address_components.length; i++) {
    var addressComponent = place.address_components[i];
    var street_no   = place.address_components[0]['long_name'];
    var street_name = place.address_components[1]['short_name'];
    document.getElementById(this.street_address).value = street_no + ' ' + street_name;
    if(addressComponent.types[0] == 'locality' && document.getElementById(this.address_city) != null)
        document.getElementById(this.address_city).value = addressComponent['long_name'];
    if(addressComponent.types[0] == 'postal_code' && document.getElementById(this.address_postal_code) != null)
        document.getElementById(this.address_postal_code).value = addressComponent['long_name'];
  }
    
}

google.maps.event.addDomListener(window, 'load', initialize);



// About page start

// About page end

$(document).ready(function(){
    $(".About-Services-point").waypoint(function (direction) {
        $(".About-Services").addClass("animate__animated animate__backInUp");
    });
    $(".About-Point-1").waypoint(function (direction) {
        $(".about-row-1-services").addClass(
            "animate__animated animate__fadeInLeftBig"
        );
    });
    $(".About-Point-2").waypoint(function (direction) {
        $(".about-row-2-services").addClass(
            "animate__animated animate__fadeInRightBig"
        );
    });
});
