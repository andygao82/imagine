<?php
/* Template Name: Project Gallery Page */
get_header();

?>
<section class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper">
                    <span id="side-slogan">Imagine Interior / Project Gallery</span>

                    <div class="banner-img ">
                        <img src="<?= get_template_directory_uri('/')?>/images/gallery_hero.jpg" alt="Imagine Interior">
                    </div>
                    <div class="banner-content">

                        <div class="inner-wrapper">
                            <div class="dots">
                                <img src="<?= get_template_directory_uri('/')?>/images/dots.svg" alt="Imagine Interior">
                                <img src="<?= get_template_directory_uri('/')?>/images/dots.svg" alt="Imagine Interior">
                            </div>


                            <h1 class="page-title loading-title"><span>Our Project</span><span>Gallery</span></h1>
                            <a href="#" id="sd-view">
                                <img src="<?= get_template_directory_uri('/')?>/images/arrow-down.svg" alt="Imagine Interior">
                                <span>Scroll down to view our projects</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-listing" id="project-listing">
    <div class="container">
        <div class="row">
        <?php
            $args = array(
                'post_type'=> 'post',
                'orderby'    => 'menu_order',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => -1
                );
                $result = new WP_Query( $args );
                if ( $result-> have_posts() ) : ?>
                <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                    <?php $projectBg = get_field('project_banner_image') ?>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-project-item">
                            <div class="wrapper" style="background-image: url('<?= $projectBg ?>')">
                                <a class="inner-wrapper" href="<?php echo get_permalink()?>">
                                    <h3><?php echo get_the_category()[0]->name; ?></h3>
                                    <div class="project-brief">
		                                <?php echo get_field('project_description')?>
                                    </div>
                                </a>
                            </div>
                        </div>
                <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>

