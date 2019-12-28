<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Imagine_Interior
 */

get_header();
?>
<div class="project">
    <div class="project-banner" style="background-image: url('<?= get_field("project_banner_image") ?>')"></div>
    <div class="project-intro">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="project-detail">
                        <div class="project-detail-name">
                            <h1 class="page-title"><?= the_title() ?></h1>
                        </div>
                        <div class="project-detail-area">
                            <strong>Area:</strong>
                            <span><?php echo get_the_category()[0]->name; ?></span>
                        </div>
                        <div class="project-detail-address">
                            <strong>Address:</strong>
                            <span><?php echo get_field('project_address') ?></span>
                        </div>
                        <?php if(get_field('bedroom')){?>
                        <div class="project-detail-bedrooms">
                            <strong>Bedrooms:</strong>
                            <span><?php echo get_field('bedroom') ?></span>
                        </div>
                        <?php }?>
                        <?php if(get_field('bathroom')){?>
                        <div class="project-detail-bathroom">
                            <strong>Bathroom:</strong>
                            <span><?php echo get_field('bathroom') ?></span>
                        </div>
                        <?php }?>
                        <?php if(get_field('price_from')){?>
                        <div class="project-detail-price">
                            <strong>Price From:</strong>
                            <span>$<?php echo get_field('price_from') ?></span>
                        </div>
                        <?php }?>
                    </div>
                    <div class="project-description">
	                    <?php echo get_field('project_description') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-gallery">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper">
	                    <?php
	                    for ($i = 1; $i <= 5; $i++){
		                    ?>
		                    <?php if(get_field('project_image_'.$i.'')){?>
                                <div class="project-image"><img src="<?= get_field('project_image_'.$i.'') ?>" alt="<?= the_title() ?>"> </div>
		                    <?php }}?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="project-navs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper">
                        <div class="project-prev">
                            <a class="link-btn link-btn-res" href="<?php previous_post_link(); ?>"><img src="<?= get_template_directory_uri('/')?>/images/arrow-res.svg" alt="Imagine Interior"><span>Previous Project</span></a>
		                    <?php if(previous_post_link()){?>
                                <a  class="link-btn" href="<?php previous_post_link(); ?>"><span>Previous Project</span><img src="<?= get_template_directory_uri('/')?>/images/arrow.svg" alt="Imagine Interior"></a>
		                    <?php } ?>
                        </div>
                        <div class="project-next">
                            <a class="link-btn" href="<?php next_post_link(); ?>"><span>Next Project</span><img src="<?= get_template_directory_uri('/')?>/images/arrow.svg" alt="Imagine Interior"></a>
		                    <?php if(next_post_link()){?>
                                <a class="link-btn" href="<?php next_post_link(); ?>"><span>Next Project</span><img src="<?= get_template_directory_uri('/')?>/images/arrow.svg" alt="Imagine Interior"></a>
		                    <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
get_footer();
