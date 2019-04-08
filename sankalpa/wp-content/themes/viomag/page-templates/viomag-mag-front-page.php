<?php
/**
 * Template Name: (VioMag) Magazine Front Page
 *
 * @package VioMag
 * @since VioMag 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php
			// Display Magazine Homepage Widgets.
			if ( is_active_sidebar( 'viomag-sidebar-fp-mag-content' ) ) :
				?>
				<div id="magazine-front-page-content-widgets">

					<?php dynamic_sidebar( 'viomag-sidebar-fp-mag-content' ); ?>

				</div>
				<?php
			else :
				// Display Description about Magazine Homepage Widgets when widget area is empty.
				// Display only to users with permission.
				if ( current_user_can( 'edit_theme_options' ) && is_customize_preview() ) :
					?>
					<div class="widget-area-front-page-vacio">
						<strong><?php esc_html_e( 'Mag Front Page: Main Content', 'viomag' ); ?></strong>
						<hr>
						<?php esc_html_e( 'Please go to Appearance > Customize > Widgets and add at least one widget to the "Mag Front Page: Main Content" widget area. You must use the "(VM Mag)" widgets to set up the theme like the demo website.', 'viomag' ); ?>
					</div>
					<?php
				endif;

			endif;
				?>
		</article>
		</div><!-- #content -->
	</div><!-- #site-content -->


<?php
get_sidebar();
get_footer();
