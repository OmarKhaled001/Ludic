$(function () {

    var wind = $(window);

    // WOW.js initialization for large screens
    if (wind.width() > 768) {
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 200,
            mobile: false,
            live: false
        });
        wow.init();
    }

    // Background change based on data attribute
    var pageSection = $(".bg-img");
    pageSection.each(function () {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });

    // Scroll to top button functionality
    wind.on("scroll", function () {
        var bodyScroll = wind.scrollTop(),
            toTop = $("#to_top");

        if (bodyScroll > 700) {
            toTop.addClass("show");
        } else {
            toTop.removeClass("show");
        }
    });

    $('#to_top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 600); // Smooth scroll duration set to 600ms
        return false;
    });

    // Counter animation
    $('.counter').countUp({
        delay: 10,
        time: 2000
    });

    // Floating box effect in a container
    $(".float_box_container").mousemove(function (e) {
        var parentOffset = $(this).offset();
        var relX = e.pageX - parentOffset.left;
        var relY = e.pageY - parentOffset.top;
        $(".float_box").css({ "left": relX, "top": relY });
        $(".float_box").addClass("show");
    });

    $(".float_box_container").mouseleave(function () {
        $(".float_box").removeClass("show");
    });

    // Favorite button toggle
    $(".fav-btn").on("click", function () {
        $(this).toggleClass("active");
    });

    // Close button functionality
    $(".cls").on("click", function () {
        $(this).parent().fadeOut();
    });

    // Parallax effect for larger screens
    if (wind.width() > 991) {
        $('.parallaxie').parallaxie();
    }

    // Tooltip initialization
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Scroll to top (repeated code for class-based to_top button)
    wind.on("scroll", function () {
        var bodyScroll = wind.scrollTop(),
            toTop = $(".to_top");

        if (bodyScroll > 700) {
            toTop.addClass("show");
        } else {
            toTop.removeClass("show");
        }
    });
});
$(function () {
    var wind = $(window);

    // Preloader animation with GSAP
    const svg = document.getElementById("svg");
    const tl = gsap.timeline();
    const curve = "M0 502S175 272 500 272s500 230 500 230V0H0Z";
    const flat = "M0 2S175 1 500 1s500 1 500 1V0H0Z";

    tl.to(".loader-wrap-heading .load-text , .loader-wrap-heading .cont , .loader-wrap-heading .logo", {
        delay: 1.5,
        y: -100,
        opacity: 0
    });
    tl.to(svg, {
        duration: 0.5,
        attr: { d: curve },
        ease: "power2.easeIn"
    }).to(svg, {
        duration: 0.5,
        attr: { d: flat },
        ease: "power2.easeOut"
    });
    tl.to(".loader-wrap", {
        y: -1500
    });
    tl.to(".loader-wrap", {
        zIndex: -1,
        display: "none"
    });
    tl.from("header , .header", {
        y: 200
    }, "-=1.5");
    tl.from("header .container , .header .container", {
        y: 40,
        opacity: 0,
        delay: 0.3
    }, "-=1.5");

    // Preloader end on window load
    $(window).on("load", function () {
        var body = $('body');
        body.addClass('loaded');
        setTimeout(function () {
            body.removeClass('loaded');
        }, 1500);
    });

    // Adjust font sizes and paddings based on screen size for responsiveness
    function adjustForDevice() {
        if (wind.width() < 300) {
            // Extra small devices (phones)
            $('h1, h2, h3, p').css('font-size', '12px');
            $('.bg-img').css('background-size', 'cover');
        } else if (wind.width() >= 576 && wind.width() < 768) {
            // Small devices (phones in landscape)
            $('h1, h2, h3, p').css('font-size', '14px');
        } else if (wind.width() >= 768 && wind.width() < 992) {
            // Medium devices (tablets)
            $('h1, h2, h3, p').css('font-size', '16px');
        } else if (wind.width() >= 992 && wind.width() < 1200) {
            // Large devices (desktops)
            $('h1, h2, h3, p').css('font-size', '18px');
        } else {
            // Extra large devices (large desktops)
            $('h1, h2, h3, p').css('font-size', '20px');
        }
    }

    // Run the function on page load and resize
    adjustForDevice();
    wind.resize(function () {
        adjustForDevice();
    });
});
