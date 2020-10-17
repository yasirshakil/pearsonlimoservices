$(document).ready(function () {
    $(".gg").waypoint(function (direction) {
        $(".Our-fleet").addClass("animate__animated animate__backInUp");
    });
    $(".Home-point-2").waypoint(function (direction) {
        $(".Get-Class").addClass("animate__animated animate__backInUp");
    });
    $(".Home-point-3").waypoint(function (direction) {
        $(".howItWorks-ImgBox").addClass(
            "animate__animated animate__fadeInLeftBig"
        );
    });
    $(".Home-point-3").waypoint(function (direction) {
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
