
console.log("ssss")
    $(window).scroll(function() {
        
        var scroll = $(window).scrollTop();

        if (scroll >= 220) {
            $(".Our-fleet").addClass("animate__animated animate__backInUp ");
        } else {
            $(".Our-fleet").removeClass("animate__animated animate__backInUp ");
        }
    });

    $(window).scroll(function() {
        
        var scroll = $(window).scrollTop();

        if (scroll >= 1350) {
            $(".Get-Class").addClass("animate__animated animate__backInUp ");
        } else {
            $(".Get-Class").removeClass("animate__animated animate__backInUp ");
        }
        console.log(scroll)
    });

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 2000) {
            $(".Animate").addClass("animate__animated animate__fadeInLeftBig");
        } else {
            $(".Animate").removeClass("animate__animated animate__fadeInLeftBig");
        }
        
    });
