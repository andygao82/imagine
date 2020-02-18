<?php
/* Template Name: Service Page */
get_header();

?>
<section class="service-top">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="wrapper">
                    <h1 class="page-title loading-title"><span>Our Service</span></h1>
                    <div class="section-description"><?= get_field('our_service_text')?></div>
                    <div class="service-top__image">
                        <img src="<?= get_field('our_service_image')?>" alt="Our Service">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-mid">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="wrapper">
                    <span id="side-slogan">Imagine Interior / Our Service</span>
                    <div class="service-mid__image">
                        <div class="slide-in-image">
                            <img src="<?= get_field('the_home_image')?>" alt="THE HOME - Six Weeks">
                        </div>
                    </div>
                    <div class="service-mid__content">
                        <h2 class="loading-title"><span class="trans-span">"THE HOME STAGING"</span> <span>- 6 Weeks + 2 weeks</span></h2>
                        <div class="section-description"><?= get_field('the_home_content')?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-bottom">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="wrapper">
                    <div class="service-bottom__image">
                        <div class="slide-in-image">
                            <img src="<?= get_field('turn_key_image')?>" alt="THE MOVE-IN">
                        </div>
                    </div>
                    <div class="service-bottom__content">
                        <h2 class="loading-title"><span>"THE AIR BNB TURN-KEY"</span></h2>
                        <div class="section-description"><?= get_field('turn_key_content')?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-under">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="wrapper">
                    <div class="service-under__image">
                        <div class="slide-in-image">
                            <img src="<?= get_field('the_move_in_image')?>" alt="THE MOVE-IN">
                        </div>
                    </div>
                    <div class="service-under__content">
                        <h2 class="loading-title"><span>"THE MOVE-IN"</span></h2>
                        <div class="section-description"><?= get_field('the_move_in_content')?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

