<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anime
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-lg-4 col-md-4">
	<div class="row">
		<div class="sidebar-bg">
			<aside id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</aside><!-- #secondary -->
		</div>
	</div>
</div>