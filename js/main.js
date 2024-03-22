$(function() {

    'use strict';

    // smooth scroll
    $("a").on("click", function(event) {

        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;

            $("html, body").animate({

                scrollTop: $(hash).offset().top - 50

            }, 850);

        }

    });

    // hide navbar on mobile after click
    $('.navbar-nav a').on('click', function() {
        $('.navbar-collapse').collapse('hide');
    });

    // navbar on scroll
    $(window).on("scroll", function() {

        var onScroll = $(this).scrollTop();

        if( onScroll > 50) {
            $(".navbar").addClass("navbar-fixed");

            $(".navbar-ng .navbar-collapse .current a").css({
                "color": "blue"
            });
        }
        else {
            $(".navbar").removeClass("navbar-fixed");
            $(".navbar-ng .navbar-collapse .current a").css({
                "background-color": "#ffc107"
            });

        }

    });


    // porfolio filterizr
    $('.filter-container').imagesLoaded( function() {
        var filterizr = $('.filter-container').filterizr();
    });

    // portfolio filter
    $('.portfolio-filter-menu li').on('click', function() {
        $('.portfolio-filter-menu li').removeClass('active');
        $(this).addClass('active');
    });

    // portfolio magnific popup
    $('.portfolio').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: '.portfolio-popup', // the selector for portfolio item
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });

});
