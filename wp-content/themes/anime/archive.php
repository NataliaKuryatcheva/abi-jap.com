<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package anime
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">
			<div class="col-lg-8 col-md-8">
				<div class="row">

					<main id="main" class="site-main" role="main">

					<?php
					if ( have_posts() ) : ?>

						<header class="page-header">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

							wp_pagenavi(); // navigation (bottom in the page)

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

					</main><!-- #main -->
				</div><!-- row -->
			</div><!-- col-lg-8 -->

			<!-- <div class="col-lg-4"> -->
				<?php get_sidebar(); ?>
			<!-- </div> -->
		</div><!-- #container bootstrap -->
	</div><!-- #primary -->

<?php get_footer(); ?>
