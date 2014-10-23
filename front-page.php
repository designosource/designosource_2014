<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package designosource
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- 
				<?php the_field('title_intro'); ?>
				<?php the_field('title_about'); ?>
				<?php the_field('title_process'); ?>
				<?php the_field('title_work'); ?>
				<?php the_field('title_team'); ?>
				<?php the_field('title_contact'); ?>
			-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
