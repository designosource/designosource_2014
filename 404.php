<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package designosource
 */

get_header(); ?>

<div class="container">
	<div class="row">
	
		<div class="col-md-8">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php _e( 'Niets te zien hier.', 'designosource' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php _e( 'De pagina kan niet gevonden worden. Probeer een zoekterm in het zoekveld hieronder.', 'designosource' ); ?></p>

							<?php get_search_form(); ?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>

	</div>
</div>

<?php get_footer(); ?>
