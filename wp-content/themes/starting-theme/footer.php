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
