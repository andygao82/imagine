<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Imagine_Interior
 */

?>
<?php $img_path = get_template_directory_uri('/'); ?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 footer-col">
                    <div class="footer-wrapper">
                        <a class="ii-footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" >
	                        <?php echo file_get_contents($img_path."/images/footer-logo.svg"); ?>
                        </a>
                        <div class="copyright">Copyright &copy; Imagine Interior. All Rights Reserved.</div>
                        <ul class="social-media">
                            <li><a href="#" class="social-media__instagram" target="_blank"><?php echo file_get_contents($img_path."/images/instagram-icon.svg"); ?></a></li>
                            <li><a href="#" class="social-media__linkedin" target="_blank"><?php echo file_get_contents($img_path."/images/linkedin-icon.svg"); ?></a></li>
                            <li><a href="#" class="social-media__fb" target="_blank"><?php echo file_get_contents($img_path."/images/fb-icon.svg"); ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4  footer-col">
                    <div class="dnd"><span>Website by</span> <a href="https://gtechsoludtion.com.au" target="_blank">D&D Creative</a></div>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
