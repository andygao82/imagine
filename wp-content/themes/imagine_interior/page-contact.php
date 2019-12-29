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
                                    <li><strong>Phone:</strong><a href="tel:+61379916991">+61 3 7991 6991</a></li>
                                    <li><strong>Address:</strong><span>Unit 8, 888 XXXX Road<br> SURBURB NAME, VIC 3000</span></li>
                                </ul>
                            </div>
                            <div class="slide-in-image">
                                <img src="<?= get_template_directory_uri('/')?>/images/ContactPageImage_1.png" alt="Imagine Interior">
                            </div>
                        </div>
                        <div class="section-content__right">
                            <div class="slide-in-image">
                                <img src="<?= get_template_directory_uri('/')?>/images/ContactPageImage_2.png" alt="Imagine Interior">
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

