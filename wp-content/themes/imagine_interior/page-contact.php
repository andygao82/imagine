<?php
/* Template Name: Contact Page */
get_header();

?>
<section class="contact-top">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="wrapper">
                    <h1 class="page-title loading-title"><span>GET IN TOUCH</span></h1>
                    <div class="section-content">
                        <div class="section-content__left">
                            <div class="section-text">
                                We are always happy to work on an interesting project. If you have any questions or need general information, please contact us in any way that is convenient for you.
                            </div>
                            <div class="ii-contacts">
                                <ul>
                                    <li><strong>Email: </strong><a href="mailto:info@imagineinterior.com.au">info@imagineinterior.com.au</a></li>
                                    <li><strong>Phone:</strong><a href="tel:+61411380961">+61 411380961</a></li>
                                    <li><strong>Address:</strong><span>51 Boundary Street<br> Port Melbourne, VIC 3207</span></li>
                                </ul>
                            </div>
                            <div class="slide-in-image">
                                <img src="<?= get_template_directory_uri('/')?>/images/ContactPageImage_1.jpg" alt="Imagine Interior">
                            </div>
                        </div>
                        <div class="section-content__right">
                            <div class="slide-in-image">
                                <img src="<?= get_template_directory_uri('/')?>/images/ContactPageImage_2.jpg" alt="Imagine Interior">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-bottom">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="wrapper">
                    <span id="side-slogan">Imagine Interior / Contact Us</span>
                    <h2 class="loading-title"><span>GET YOUR OBLIGATION-FREE</span> <span>QUOTATION HERE</span></h2>
                    <div class="inner-wrapper">
                        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]')?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

