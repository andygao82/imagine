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
});