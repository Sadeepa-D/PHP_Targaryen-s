// main page

$(document).ready(function () {
    //code to scale in-out login and signup
    $('.logSign').mouseenter(function () {
        $(this).addClass('scale-in');
        $(this).removeClass('scale-out');
    });
    $('.logSign').mouseleave(function () {
        $(this).addClass('scale-out');
        $(this).removeClass('scale-in');
    });
    $('.logSign').on('animationend', function () {
        $(this).removeClass('scale-out');
    });
    //code to scale in-out gif
    $('.gif').mouseenter(function () {
        $(this).addClass('scale-in');
        $(this).removeClass('scale-out');
    });
    $('.gif').mouseleave(function () {
        $(this).addClass('scale-out');
        $(this).removeClass('scale-in');
    });
    $('.gif').on('animationend', function () {
        $(this).removeClass('scale-out');
    });
    //code to scale in-out h3_1
    $('.h3_1').mouseenter(function () {
        $(this).addClass('scale-in');
        $(this).removeClass('scale-out');
    });
    $('.h3_1').mouseleave(function () {
        $(this).addClass('scale-out');
        $(this).removeClass('scale-in');
    });
    $('.h3_1').on('animationend', function () {
        $(this).removeClass('scale-out');
    });
    //code to scale in-out paint of the week img
    $('.imgHome').mouseenter(function () {
        $(this).addClass('scale-in');
        $(this).removeClass('scale-out');
    });
    $('.imgHome').mouseleave(function () {
        $(this).addClass('scale-out');
        $(this).removeClass('scale-in');
    });
    $('.imgHome').on('animationend', function () {
        $(this).removeClass('scale-out');
    });
    //code to scale in-out paint of the week img
    $('.para1').mouseenter(function () {
        $(this).addClass('scale-in');
        $(this).removeClass('scale-out');
    });
    $('.para1').mouseleave(function () {
        $(this).addClass('scale-out');
        $(this).removeClass('scale-in');
    });
    $('.para1').on('animationend', function () {
        $(this).removeClass('scale-out');
    });
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var containerOffset = $('#container2').offset().top;
        var windowHeight = $(window).height();


        if (scroll + windowHeight > containerOffset + 50) {
            // desired animation class to elements within container2
            $('.paintOfTheWeek').addClass('slide-in-left');
            $('.description').addClass('slide-in-left');
        } else {
            // Remove the animation class if scrolling back up
            $('.paintOfTheWeek').removeClass('slide-in-left');
            $('.description').removeClass('slide-in-left');
        }
    });
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var containerOffset = $('.quote1').offset().top;
        var windowHeight = $(window).height();


        if (scroll + windowHeight > containerOffset + 50) {
            // desired animation class to elements within quote1
            $('.h3_1').addClass('slide-in-left');
        } else {
            // Remove the animation class if scrolling back up
            $('.h3_1').removeClass('slide-in-left');
        }
    });

});

$(document).ready(function () {
    $(".NewsImg1").mouseenter(function () {
        $(".P1").show(1000);

    });
    $(".NewsImg1").mouseleave(function () {
        $(".P1").hide(500);

    });

});

$(document).ready(function () {
    $(".NewsImg2").mouseenter(function () {
        $(".P2").show(1000);
    });
    $(".NewsImg2").mouseleave(function () {
        $(".P2").hide(500);

    });
});
$(document).ready(function () {
    $(".NewsImg3").mouseenter(function () {
        $(".P3").show(1000);
    });
    $(".NewsImg3").mouseleave(function () {
        $(".P3").hide(500);

    });
});
$(document).ready(function () {
    $(".NewsImg4").mouseenter(function () {
        $(".P4").show(1000);
    });
    $(".NewsImg4").mouseleave(function () {
        $(".P4").hide(500);

    });
});

// main hiding

$(document).ready(function () {
    // Hide all sections except the home section (assumed to be with class 'hide')
    function hideAll() {
        $(".container5, .feedform, .about_us, .log, .reji_css").hide();
    }

    // Show the home section by default
    function showHome() {
        hideAll();
        $(".hide").fadeIn(1000);
    }

    // Initialize the page with the home section visible
    showHome();

    // News button
    $(".news_btn").click(function () {
        hideAll();
        $(".container5").fadeIn(1000);
        $(".hide").fadeOut();
    });

    // Feedback button
    $(".feedback_btn").click(function () {
        hideAll();
        $(".feedform").fadeIn(1000);
        $(".hide").fadeOut();
    });

    // Home button
    $(".home_btn").click(function () {
        showHome();
    });

    // About Us button
    $(".about_btn").click(function () {
        hideAll();
        $(".about_us").fadeIn(1000);
        $(".hide").fadeOut();
    });

    // Login button
    $(".log2f").click(function () {
        hideAll();
        $(".log").fadeIn(1000);
        $(".hide").fadeOut();
    });

    // Sign-up button
    $(".sign2up").click(function () {
        hideAll();
        $(".reji_css").fadeIn(1000);
        $(".hide").fadeOut();
    });
});




// about us 

$(document).ready(function () {
    $('.des1').mouseenter(function () {
        $(this).addClass('scale-in');
        $(this).removeClass('scale-out');
    });
    $('.des1').mouseleave(function () {
        $(this).addClass('scale-out');
        $(this).removeClass('scale-in');
    });
    $('.des1').on('animationend', function () {
        $(this).removeClass('scale-out');
    });

    $('.des2').mouseenter(function () {
        $(this).addClass('scale-in');
        $(this).removeClass('scale-out');
    });
    $('.des2').mouseleave(function () {
        $(this).addClass('scale-out');
        $(this).removeClass('scale-in');
    });
    $('.des2').on('animationend', function () {
        $(this).removeClass('scale-out');
    });


    $('.first').mouseenter(function () {
        $(this).addClass('scale-in');
        $(this).removeClass('scale-out');
    });
    $('.first').mouseleave(function () {
        $(this).addClass('scale-out');
        $(this).removeClass('scale-in');
    });
    $('.first').on('animationend', function () {
        $(this).removeClass('scale-out');
    });
});

// News 

$(document).ready(function () {
    $(".NewsImg1").mouseenter(function () {
        $(".P1").show(1000);

    });
    $(".NewsImg1").mouseleave(function () {
        $(".P1").hide(500);

    });

});

$(document).ready(function () {
    $(".NewsImg2").mouseenter(function () {
        $(".P2").show(1000);
    });
    $(".NewsImg2").mouseleave(function () {
        $(".P2").hide(500);

    });
});
$(document).ready(function () {
    $(".NewsImg3").mouseenter(function () {
        $(".P3").show(1000);
    });
    $(".NewsImg3").mouseleave(function () {
        $(".P3").hide(500);

    });
});
$(document).ready(function () {
    $(".NewsImg4").mouseenter(function () {
        $(".P4").show(1000);
    });
    $(".NewsImg4").mouseleave(function () {
        $(".P4").hide(500);

    });
});



