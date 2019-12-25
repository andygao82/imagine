<?php
/* Template Name: About Page */
get_header();

?>
<section class="about-top">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="wrapper">
                    <h1 class="page-title">About<br/> Imagine Interior</h1>
                    <div class="section-description"><?= get_field('about_imagine_interior')?></div>
                    <div class="about-top__image">
                        <img src="<?= get_field('about_imagine_interior_image')?>" alt="About Imagine Interior">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-mid">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="wrapper">
                    <span id="side-slogan">Imagine Interior / About Imagine Interior</span>

                    <div class="about-mid__image">
                        <img src="<?= get_field('reasons_to_choose_imagine_interior_image')?>" alt="Reasons to choose imagine interior">
                    </div>
                    <div class="about-mid__content">
                        <h2>REASONS TO CHOOSE IMAGINE INTERIOR</h2>
                        <div class="section-description"><?= get_field('reasons_to_choose_imagine_interior_content_1')?></div>
                        <div class="section-description"><?= get_field('reasons_to_choose_imagine_interior_content_2')?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-bottom">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="wrapper">
                    <div class="about-bottom__image">
                        <img src="<?= get_field('how_it_works_image')?>" alt="How it works">
                    </div>
                    <div class="about-bottom__content">
                        <h2>How it works</h2>
                        <div class="section-description"><?= get_field('how_it_works')?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

