<?php
    /* Template Name: Home Page */
get_header();

    $img_path = get_template_directory_uri('/');
?>
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper">
                    <h1 class="page-title section-title"><span><?= get_field('section_1_title') ?></span></h1>
                    <div class="section-content"><?= get_field('section_1_content')?></div>
                    <a href="#" class="link-btn"><span>Learn More</span><img src="<?= get_template_directory_uri('/')?>/images/arrow.svg" alt="Imagine Interior"></a>
                    <ul class="social-media">
                        <li><a href="#" class="social-media__instagram" target="_blank"><?php echo file_get_contents($img_path."/images/instagram-icon.svg"); ?></a></li>
                        <li><a href="#" class="social-media__linkedin" target="_blank"><?php echo file_get_contents($img_path."/images/linkedin-icon.svg"); ?></a></li>
                        <li><a href="#" class="social-media__fb" target="_blank"><?php echo file_get_contents($img_path."/images/fb-icon.svg"); ?></a></li>
                    </ul>
                </div>
                <div class="home-slider">
                    <div class="home-slider-wrapper" id="home-banner-slider">
                        <ul class="slider">
                            <li><img src="<?= $img_path?>/images/slide_img_1.png" alt="Imagine Interior"></li>
                            <li><img src="<?= $img_path?>/images/slide_img_1.png" alt="Imagine Interior"></li>
                            <li><img src="<?= $img_path?>/images/slide_img_1.png" alt="Imagine Interior"></li>
                            <li><img src="<?= $img_path?>/images/slide_img_1.png" alt="Imagine Interior"></li>
                        </ul>
                    </div>
                    <div class="home-slider-nav">
                            <span class="home-slider-nav-prev">
                                <img src="<?= $img_path?>/images/arrow-left.svg" alt="Imagine Interior">
                            </span>
                        <span class="home-slider-nav-next">
                            <img src="<?= $img_path?>/images/arrow-right.svg" alt="Imagine Interior">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    jQuery(window).load(function() {
        calcUlWidth();
    });

    jQuery(window).resize(function() {
        calcUlWidth();
    });

    function calcUlWidth(){
        var slider = jQuery('.slider');
        var sliderLi = jQuery('.slider li');
        var numberOfLi = sliderLi.length;
        var liWidth = sliderLi.width() + 50;
        var ulWidth = liWidth * numberOfLi;
        var ulWidthMove = liWidth * (numberOfLi - 1);

        slider.width(ulWidth);
        console.log(ulWidthMove);

        jQuery('.home-slider-nav-next').on('click', function () {
            var mLeft = Math.abs(parseInt(slider.css('marginLeft'), 10));
            console.log(mLeft);
            if(mLeft >= ulWidthMove ){
            }else{
                jQuery('.slider').filter(':not(:animated)').animate({ marginLeft : '-='+liWidth});
            }
        });

        jQuery('.home-slider-nav-prev').on('click', function () {
            var mLeft = parseInt(slider.css('marginLeft'), 10);
            console.log(mLeft);
            if(mLeft == 0 ){
            }else{
                jQuery('.slider').filter(':not(:animated)').animate({ marginLeft : '+='+liWidth});
            }
        });
    }
</script>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="wrapper">
                    <div class="about-col__left">
                        <h3><?= get_field('section_2_subtitle')?></h3>
                        <img src="<?= get_template_directory_uri('/')?>/images/section-image-1.png" alt="Imagine Interior">
                    </div>
                    <div class="about-col__mid">
                        <img src="<?= get_template_directory_uri('/')?>/images/section-image-2.png" alt="Imagine Interior">
                    </div>
                    <div class="about-col__right">
                        <h2><?= get_field('section_2_title')?></h2>
                        <div class="section-description">
		                    <?= get_field('section_2_content')?>
                        </div>
                        <a href="#" class="link-btn"><span>Learn More</span><img src="<?= get_template_directory_uri('/')?>/images/arrow.svg" alt="Imagine Interior"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="featured">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><?= get_field('section_3_title')?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 featured-col">
                <div class="wrapper">
                    <div class="inner-wrapper">
                        <h3>Hawthorn</h3>
                        <div class="featured-content">
                            <?= get_field('section_3_hawthorn_content') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 featured-col">
                <div class="wrapper">
                    <div class="inner-wrapper">
                        <h3>Albert Park</h3>
                        <div class="featured-content">
		                    <?= get_field('section_3_albert_park_content') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 featured-col">
                <div class="wrapper">
                    <div class="inner-wrapper">
                        <h3>Hawthorn</h3>
                        <div class="featured-content">
		                    <?= get_field('section_3_st_kilda_content') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><?= get_field('section_4_title')?></h2>
                <span id="side-slogan">Imagine Interior / Decor Your Home / Design Your Dream</span>
            </div>
        </div>
        <div class="row service-1">
            <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                <div class="wrapper">
                    <span class="bars">
                        <span class="bar"></span>
                    </span>
                    <div class="inner-wrapper">
                        <h3><span><?= get_field('section_4_subtitle_1') ?></span></h3>
                        <div class="section-content">
		                    <?= get_field('section_4_content_1') ?>
                        </div>
                        <a href="#" class="link-btn"><span>Learn More</span><img src="<?= get_template_directory_uri('/')?>/images/arrow.svg" alt="Imagine Interior"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                <div class="service-images">
                    <div class="service-image__left">
                        <img src="<?= $img_path?>/images/service_1.png" alt="Imagine Interior">
                    </div>
                    <div class="service-image__right">
                        <img src="<?= $img_path?>/images/service_2.png" alt="Imagine Interior">
                        <img src="<?= $img_path?>/images/service_3.png" alt="Imagine Interior">
                    </div>
                </div>
            </div>
        </div>
        <div class="row service-2">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <div class="wrapper">
                    <span class="bars">
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>
                    <div class="inner-wrapper">
                        <h3><span><?= get_field('section_4_subtitle_2') ?></span></h3>
                        <div class="section-content">
                            <?= get_field('section_4_content_2') ?>
                        </div>
                        <a href="#" class="link-btn"><span>Learn More</span><img src="<?= get_template_directory_uri('/')?>/images/arrow.svg" alt="Imagine Interior"></a>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-8">
                <div class="service-images">
                    <div class="service-image__left">
                        <img src="<?= $img_path?>/images/service_4.png" alt="Imagine Interior">
                    </div>
                    <div class="service-image__right">
                        <img src="<?= $img_path?>/images/service_5.png" alt="Imagine Interior">
                        <img src="<?= $img_path?>/images/service_6.png" alt="Imagine Interior">
                    </div>
                </div>
            </div>
        </div>
        <div class="row service-3">
            <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                <div class="wrapper">
                    <span class="bars">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>
                    <div class="inner-wrapper">
                        <h3><span><?= get_field('section_4_subtitle_3') ?></span></h3>
                        <div class="section-content">
		                    <?= get_field('section_4_content_3') ?>

                        </div>
                        <a href="#" class="link-btn"><span>Learn More</span><img src="<?= get_template_directory_uri('/')?>/images/arrow.svg" alt="Imagine Interior"></a>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                <div class="service-images">
                    <div class="service-image__right">
                        <img src="<?= $img_path?>/images/service_7.png" alt="Imagine Interior">
                        <img src="<?= $img_path?>/images/service_9.png" alt="Imagine Interior">
                    </div>
                    <div class="service-image__left">
                        <img src="<?= $img_path?>/images/service_8.png" alt="Imagine Interior">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

