<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
	include(locate_template("inc/page-front/hero.php"));
	include(locate_template("inc/page-front/about-section.php"));
	include(locate_template("inc/page-front/gallery-section.php"));
	include(locate_template("inc/page-front/social-feed.php"));
	include(locate_template("inc/page-front/blog-section.php"));
	include(locate_template("inc/page-front/blog.php"));
	include(locate_template("inc/page-front/contact.php"));
 ?>

<?php
get_footer();
