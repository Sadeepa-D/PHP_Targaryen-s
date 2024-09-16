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
        $(".hide").show();
        $(".container5").hide();
        $(".feedform").hide();
        $(".about_us").hide();
        $(".log").hide();
        $(".reji_css").hide();
    $(".news_btn").click(function () {
        $(".hide").hide();
        $(".feedform").hide();
        $(".container5").show(1000);
        $(".about_us").hide();
        $(".log").hide();
        $(".reji_css").hide();
    })
    $(".feedback_btn").click(function(){
        $(".hide").hide();
        $(".container5").hide();
        $(".feedform").show(1000);
        $(".about_us").hide();
        $(".parent_log_form").hide();
        $(".reji_css").hide();

    });
    $(".home_btn").click(function(){
        $(".hide").show(1000);
        $(".container5").hide(1000);
        $(".feedform").hide(1000);
        $(".about_us").hide();
        $(".parent_log_form").hide();
        $(".reji_css").hide();
    });
    $(".about_btn").click(function(){
        $(".hide").hide();
        $(".container5").hide();
        $(".feedform").hide();
        $(".about_us").show(1000);
        $(".parent_log_form").hide();
        $(".reji_css").hide();
    });
    $(".log2f").click(function(){
        $(".hide").hide();
        $(".container5").hide();
        $(".feedform").hide();
        $(".about_us").hide();
        $(".log").show(1000);
        $(".reji_css").hide();
    });
        $(".sign2up").click(function() {
        $(".hide").hide();
        $(".container5").hide();
        $(".feedform").hide();
        $(".about_us").hide();
        $(".parent_log_form").hide();
        $(".reji_css").show(1000);
});

})

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



