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
                    <h1 class="page-title section-title loading-title"><span>DÉCOR YOUR HOME </span><span>DESIGN YOUR DREAM</span></h1>
                    <div class="section-content"><?= get_field('section_1_content')?></div>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us" class="link-btn"><span>Learn More</span><img src="<?= get_template_directory_uri('/')?>/images/arrow.svg" alt="Imagine Interior"></a>
                    <ul class="social-media">
                        <li><a href="#" class="social-media__instagram" target="_blank"><?php echo file_get_contents($img_path."/images/instagram-icon.svg"); ?></a></li>
                        <li><a href="#" class="social-media__linkedin" target="_blank"><?php echo file_get_contents($img_path."/images/linkedin-icon.svg"); ?></a></li>
                        <li><a href="#" class="social-media__fb" target="_blank"><?php echo file_get_contents($img_path."/images/fb-icon.svg"); ?></a></li>
                    </ul>
                </div>
                <div class="home-slider">
                    <div class="home-slider-wrapper" id="home-banner-slider">
                        <ul class="slider">

                            <li><img src="<?php echo get_field('slider_image_1')?>" alt="Imagine Interior"></li>
                            <li><img src="<?php echo get_field('slider_image_2')?>" alt="Imagine Interior"></li>
                            <li><img src="<?php echo get_field('slider_image_3')?>" alt="Imagine Interior"></li>
                            <li><img src="<?php echo get_field('slider_image_4')?>" alt="Imagine Interior"></li>
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
                <div class="mobile-slider">
                    <div class="mobile-slider-wrapper flexslider" id="mobile-banner-slider">
                        <ul class="slides">
                            <li style="background: url(<?php echo get_field('slider_image_1')?>)"></li>
                            <li style="background: url(<?php echo get_field('slider_image_2')?>)"></li>
                            <li style="background: url(<?php echo get_field('slider_image_3')?>)"></li>
                            <li style="background: url(<?php echo get_field('slider_image_4')?>)"></li>
                        </ul>
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
                        <h3 class="loading-title"><span>PROPERTY STYLING</span><span>& INTERIOR DESIGN</span></h3>
                        <div class="slide-in-image">
                            <img src="<?= get_field('section_2_image_1')?>" alt="Imagine Interior">
                        </div>
                    </div>
                    <div class="about-col__mid">
                        <div class="slide-in-image">
                            <img src="<?= get_field('section_2_image_2')?>" alt="Imagine Interior">
                        </div>
                    </div>
                    <div class="about-col__right">
                        <h2 class="loading-title"><span>ABOUT US +</span></h2>
                        <div class="section-description">
		                    <?= get_field('section_2_content')?>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us" class="link-btn"><span>Learn More</span><img src="<?= get_template_directory_uri('/')?>/images/arrow.svg" alt="Imagine Interior"></a>
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
                <h2 class="loading-title"><span>FEATURED PROJECTS +</span></h2>
            </div>
        </div>
        <div class="row">

	        <?php
	        $args = array(
		        'post_type'=> 'post',
		        'orderby'    => 'ID',
		        'post_status' => 'publish',
		        'order'    => 'DESC',
		        'posts_per_page' => 3
	        );
	        $result = new WP_Query( $args );
	        if ( $result-> have_posts() ) : ?>
		        <?php while ( $result->have_posts() ) : $result->the_post(); ?>
			        <?php $projectBg = get_field('project_banner_image') ?>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 featured-col">
                        <?php $projectBg = get_field('project_banner_image') ?>
                        <div class="wrapper" style="background-image: url('<?= $projectBg ?>')">
                            <a class="inner-wrapper" href="<?php echo get_permalink()?>">
                                <h3><?php echo get_the_category()[0]->name; ?></h3>
                                <div class="featured-content">
	                                <?php echo substr(get_field('project_description'), 0, 55)?>
                                </div>
                            </a>
                        </div>
                    </div>
		        <?php endwhile; ?>
	        <?php endif; wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<section class="service">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="loading-title"><span>OUR SERVICE +</span></h2>
                <span id="side-slogan">Imagine Interior / Decor Your Home / Design Your Dream</span>
            </div>
        </div>
        <div class="row service-1">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                <div class="wrapper">
                    <span class="bars">
                        <span class="bar"></span>
                    </span>
                    <div class="inner-wrapper">
                        <h3><span><?= get_field('section_4_subtitle_1') ?></span></h3>
                        <div class="section-content">
		                    <?= get_field('section_4_content_1') ?>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>our-service" class="link-btn"><span>Learn More</span><img src="<?= get_template_directory_uri('/')?>/images/arrow.svg" alt="Imagine Interior"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                <div class="service-images">
                    <div class="service-image__left">
                        <img src="<?= get_field('section_4_image_1')?>" alt="Imagine Interior" class="delay1">
                    </div>
                    <div class="service-image__right">
                        <img src="<?= get_field('section_4_image_2')?>" alt="Imagine Interior" class="delay2">
                        <img src="<?= get_field('section_4_image_3')?>" alt="Imagine Interior" class="delay3">
                    </div>
                </div>
            </div>
        </div>
        <div class="row service-2">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
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
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>our-service" class="link-btn"><span>Learn More</span><img src="<?= get_template_directory_uri('/')?>/images/arrow.svg" alt="Imagine Interior"></a>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                <div class="service-images">
                    <div class="service-image__left">
                        <img src="<?= get_field('section_4_image_4')?>" alt="Imagine Interior" class="delay1">
                    </div>
                    <div class="service-image__right">
                        <img src="<?= get_field('section_4_image_5')?>" alt="Imagine Interior" class="delay2">
                        <img src="<?= get_field('section_4_image_6')?>" alt="Imagine Interior" class="delay3">
                    </div>
                </div>
            </div>
        </div>
        <div class="row service-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
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
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>our-service" class="link-btn"><span>Learn More</span><img src="<?= get_template_directory_uri('/')?>/images/arrow.svg" alt="Imagine Interior"></a>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                <div class="service-images">
                    <div class="service-image__right">
                        <img src="<?= get_field('section_4_image_7')?>" alt="Imagine Interior" class="delay1">
                        <img src="<?= get_field('section_4_image_9')?>" alt="Imagine Interior" class="delay2">
                    </div>
                    <div class="service-image__left">
                        <img src="<?= get_field('section_4_image_8')?>" alt="Imagine Interior" class="delay3">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

