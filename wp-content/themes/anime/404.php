<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package anime
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">
			<div class="col-lg-8 col-md-8">

				<div class="row">

					<main id="main" class="site-main" role="main">

						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'anime' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'anime' ); ?></p>
							</div><!-- .page-content -->
						</section><!-- .error-404 -->

					</main><!-- #main -->
				</div><!-- row -->
			</div><!-- col-lg-8 -->

			<!-- <div class="col-lg-4"> -->
				<?php get_sidebar(); ?>
			<!-- </div> -->
		</div><!-- #container bootstrap -->

	</div><!-- #primary -->

<?php get_footer(); ?>
