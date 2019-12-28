jQuery(document).ready(function ($) {
   $('#sd-view').on('click', function (e) {
       e.preventDefault();
       $('html, body').animate({
           scrollTop: $("#project-listing").offset().top
       }, 1500);
   })

    inView('.about').on('enter', function(){
        $('.about-col__left').addClass('normal');
        $('.about-col__mid').addClass('normal');
        $('.about-col__right').addClass('normal');
    });

    inView('.featured').on('enter', function(){
        $('.featured-col').each(function(){
            $(this).addClass('normal');
        })
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
});