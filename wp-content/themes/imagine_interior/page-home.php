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
                    <a href="#" class=link-btn"><span>Learn More</span></a>
                    <ul class="social-media">
                        <li><a href="#" class="social-media__instagram" target="_blank"><?php echo file_get_contents($img_path."/images/instagram-icon.svg"); ?></a></li>
                        <li><a href="#" class="social-media__linkedin" target="_blank"><?php echo file_get_contents($img_path."/images/linkedin-icon.svg"); ?></a></li>
                        <li><a href="#" class="social-media__fb" target="_blank"><?php echo file_get_contents($img_path."/images/fb-icon.svg"); ?></a></li>
                    </ul>
                </div>
                <div class="home-slider">
                    <div class="home-slider-wrapper">
                        <ul class="slides" id="home-banner-slider">
                            <li><img src="<?= get_template_directory_uri('/')?>/images/slide_img_1.png" alt="Imagine Interior"></li>
                            <li><img src="<?= get_template_directory_uri('/')?>/images/slide_img_1.png" alt="Imagine Interior"></li>
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
                <h3><?= get_field('section_2_subtitle')?></h3>
                <img src="<?= get_template_directory_uri('/')?>/images/section-image-1.png" alt="Imagine Interior">
            </div>
            <div class="col">
                <img src="<?= get_template_directory_uri('/')?>/images/section-image-2.png" alt="Imagine Interior">
            </div>
            <div class="col">
                <h2><?= get_field('section_2_title')?></h2>
                <div class="section-description">
	                <?= get_field('section_2_content')?>
                </div>
                <a href="#" class=link-btn"><span>Learn More</span></a>
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
            <div class="col-12 col-sm-6 col-md-4">
                <div class="wrapper">
                    <h3>Hawthorn</h3>
                    <div class="featured-content">
                        <?= get_field('section_3_hawthorn_content') ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="wrapper">
                    <h3>Albert Park</h3>
                    <div class="featured-content">
				        <?= get_field('section_3_hawthorn_content') ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="wrapper">
                    <h3>Hawthorn</h3>
                    <div class="featured-content">
				        <?= get_field('section_3_hawthorn_content') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

