
// console.log("ssss")
    // $(window).scroll(function() {
        
    //     var scroll = $(window).scrollTop();

    //     if (scroll >= 220) {
    //         $(".Our-fleet").addClass("animate__animated animate__backInUp ");
    //     } else {
    //         $(".Our-fleet").removeClass("animate__animated animate__backInUp ");
    //     }
    // });

    // $(window).scroll(function() {
        
    //     // var scroll = $(window).scrollTop();
    //     var scroll = $(window).scrollTop();
    //     if (scroll >= 2200) {
    //         $(".Services-animate").addClass("animate__animated animate__backInUp ");
    //     } else {
    //         $(".Services-animate").removeClass("animate__animated animate__backInUp ");
    //     }
    // });

    // $(window).scroll(function() {
        
    //     var scroll = $(window).scrollTop();

    //     if (scroll >= 1350) {
    //         $(".Get-Class").addClass("animate__animated animate__backInUp ");
    //     } else {
    //         $(".Get-Class").removeClass("animate__animated animate__backInUp ");
    //     }
    //     console.log(scroll)
    // });

    // $(window).scroll(function() {
    //     var scroll = $(window).scrollTop();

    //     if (scroll >= 2200) {
    //         $(".Animate").addClass("animate__animated animate__fadeInLeftBig");
    //     } else {
    //         $(".Animate").removeClass("animate__animated animate__fadeInLeftBig");
    //     }
        
    // });
    // $(window).scroll(function() {
    //     var scroll = $(window).scrollTop();

    //     if (scroll >= 670) {
    //         $(".Animation-About").addClass("animate__animated animate__fadeInLeftBig");
    //     } else {
    //         $(".Animation-About").removeClass("animate__animated animate__fadeInLeftBig");
    //     }
    // });

    // var waypoint = new Waypoint({
    //     element: document.getElementById('waypoint'),
    //     handler: function(direction) {
    //       console.log('Scrolled to waypoint!')
    //     }
    //   })

      $(document).ready(function(){
        $('.gg').waypoint(function(direction){
            $('.Our-fleet').addClass('animate__animated animate__backInUp')
          })
      })
      $(document).ready(function(){
        $('.point').waypoint(function(direction){
            $('.Get-Class').addClass('animate__animated animate__backInUp')
          })
      })
      $(document).ready(function(){
          $('.point').waypoint(function(direction){
              $('.howItWorks-ImgBox').addClass('animate__animated animate__fadeInLeftBig')
          })
      })
      $(document).ready(function(){
        $('.point').waypoint(function(direction){
            $('.Works-Imformation').addClass('animate__animated animate__fadeInRightBig')
        })
    })
    $(document).ready(function(){
        $('.Services-Animated-point').waypoint(function(direction){
            $('.Services-animate').addClass('animate__animated animate__backInUp')
          })
      })
    $(document).ready(function(){
      $('.Services-Animated-point').waypoint(function(direction){
          $('.Animate-row-1-services').addClass('animate__animated animate__fadeInRightBig')
      })
  })
  $(document).ready(function(){
    $('.Services-Animated-point').waypoint(function(direction){
        $('.Animate-row-2-services').addClass('animate__animated animate__fadeInLeftBig')
    })
})
