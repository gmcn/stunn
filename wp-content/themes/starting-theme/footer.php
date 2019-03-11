<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 col-md-offset-1 matchheight">
					<div class="row">
						<?php echo do_shortcode('[contact-form-7 id="7" title="Contact Form"]') ?>
					</div>
					<div class="row contact">
						<div class="col-md-3">
							<h4>TELEPHONE</h4>
							<a href="tel:07475 878247">07475 878247</a>
						</div>
						<div class="col-md-3">
							<h4>EMAIL</h4>
							<a href="mailto:stunnphotography@gmail.com">stunnphotography@gmail.com</a>
						</div>
						<div class="col-md-3">
							<h4>ADDRESS</h4>
							<p>Bloomfield Avenue, Belfast</p>
						</div>
						<div class="col-md-3 social">
							<a href="https://www.instagram.com/stunnphotography/"> <img src="<?php echo get_template_directory_uri(); ?>/images/instagram-logo.svg" alt="instagram"></a>
							<a href="https://www.facebook.com/STUNNPhotography/"> <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-logo.svg" alt="facebook"></a>
							<a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/youtube-logo.svg" alt="youtube"></a>
						</div>
					</div>
				</div>
				<div class="col-md-2 matchheight">
					<label>LOCATION</label>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2311.4663793908585!2d-5.89068928365503!3d54.59577618025994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4861097521f03c1f%3A0xebf3ef8103946c35!2sBloomfield+Ave%2C+Belfast!5e0!3m2!1sen!2suk!4v1552341233717" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div class="container-fluid signature">
			<div class="col-md-11 col-md-offset-1">
				<img class="branding" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Stunn Photography">
				© <?php echo date('Y'); ?> STUNN PHOTOGRAPHY. All rights reserved. | <a href="/data-policy">Data Policy</a> | <a href="/cookie-policy">Cookie Policy</a>
				<a href="https://digital-only.com" target="_blank"><img class="do" src="<?php echo get_template_directory_uri() ?>/images/digital-only.svg" alt="Designed and developed by Digital Only"></a>
			</div>
		</div>
	</footer><!-- /footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
