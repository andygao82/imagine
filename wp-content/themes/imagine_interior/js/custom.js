jQuery(document).ready(function ($) {
   $('#sd-view').on('click', function (e) {
       e.preventDefault();
       $('html, body').animate({
           scrollTop: $("#project-listing").offset().top
       }, 1500);
   });

    $('#mobile-banner-slider').flexslider({
        animation: "fade"
    });

   $('.menu-icon').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('open');
        $('.header-wrapper-right').toggleClass('active');
        $('body').toggleClass('live-body');
   });

    inView('.banner').on('enter', function(){
        $('.banner').find('.loading-title').addClass('loaded-title');
    });

    inView('.about').on('enter', function(){
        $('.about').find('.loading-title').addClass('loaded-title');
        $('.about').find('.slide-in-image').addClass('slided-in-image');
    });

    inView('.featured').on('enter', function(){
        $('.featured').find('.loading-title').addClass('loaded-title');
    });

    inView('.service').on('enter', function(){
        $('.service').find('.loading-title').addClass('loaded-title');
    });

    inView('.service-1').on('enter', function(){
        $('.service-1').find('.bar').addClass('normal');
        $('.service-1').find('img').addClass('normal');
    });

    inView('.service-2').on('enter', function(){
        $('.service-2').find('.bar').addClass('normal');
        $('.service-2').find('img').addClass('normal');
    });

    inView('.service-3').on('enter', function(){
        $('.service-3').find('.bar').addClass('normal');
        $('.service-3').find('img').addClass('normal');
    });

    inView('.about-top').on('enter', function(){
        $('.about-top').find('.loading-title').addClass('loaded-title');
    });

    inView('.about-mid').on('enter', function(){
        $('.about-mid').find('.loading-title').addClass('loaded-title');
        $('.about-mid').find('.slide-in-image').addClass('slided-in-image');
    });

    inView('.about-bottom').on('enter', function(){
        $('.about-bottom').find('.loading-title').addClass('loaded-title');
        $('.about-bottom').find('.slide-in-image').addClass('slided-in-image');
    });

    inView('.service-top').on('enter', function(){
        $('.service-top').find('.loading-title').addClass('loaded-title');
    });


    inView('.service-mid').on('enter', function(){
        $('.service-mid').find('.loading-title').addClass('loaded-title');
        $('.service-mid').find('.slide-in-image').addClass('slided-in-image');
    });

    inView('.service-bottom').on('enter', function(){
        $('.service-bottom').find('.loading-title').addClass('loaded-title');
        $('.service-bottom').find('.slide-in-image').addClass('slided-in-image');
    });

    inView('.service-under').on('enter', function(){
        $('.service-under').find('.loading-title').addClass('loaded-title');
        $('.service-under').find('.slide-in-image').addClass('slided-in-image');
    });

    inView('.contact-top').on('enter', function(){
        $('.contact-top').find('.loading-title').addClass('loaded-title');
        $('.contact-top').find('.slide-in-image').addClass('slided-in-image');
    });

    inView('.contact-bottom').on('enter', function(){
        $('.contact-bottom').find('.loading-title').addClass('loaded-title');
        $('.contact-bottom').find('.slide-in-image').addClass('slided-in-image');
    });

    inView('.page-banner').on('enter', function(){
        $('.page-banner').find('.loading-title').addClass('loaded-title');
    });

});