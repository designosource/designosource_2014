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

			<!-- UNUSED WORDPRESS VARIABLES:
			-->

			<div class="section" id="intro">
				<div class="container">
					<!--<h1><?php the_field('tagline'); ?></h1>-->
					<h1>Gepassioneerd door het web, vertalen wij als online creatievelingen uw visie naar een uniek digitaal verhaal.</h1>
				</div>
			</div>

			<div class="section" id="about">
				<div class="container">
					<h2><?php the_field('title_about'); ?></h2>
				</div>
			</div>

			<div class="section" id="process">
				<div class="container">
					<h2><?php the_field('title_process'); ?></h2>
				</div>
			</div>

			<div class="section" id="work">
				<div class="container">
					<h2><?php the_field('title_work'); ?></h2>
				</div>
			</div>

			<div class="section" id="team">
				<div class="container">
					<h2><?php the_field('title_team'); ?></h2>
				</div>
			</div>

			<div class="section" id="contact">
				<div class="container">
					<h2><?php the_field('title_contact'); ?></h2>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
