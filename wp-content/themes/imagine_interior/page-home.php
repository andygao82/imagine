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
                    <div class="home-slider-wrapper">
                        <ul class="slides" id="home-banner-slider">
                            <li><img src="<?= $img_path?>/images/slide_img_1.png" alt="Imagine Interior"></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
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
            <div class="col-12 col-sm-12 col-md-6 col-lg-5">
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
            <div class="col-12 col-sm-12 col-md-6 col-lg-7">
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

