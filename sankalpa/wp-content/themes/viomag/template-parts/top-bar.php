<?php
/**
 * Display Top Bar
 *
 * @package VioMag
 */

?>
<div class="top-bar">
		<?php $palabra_menu = (get_theme_mod('viomag_mostrar_menu_junto_icono', '') == 1) ? ' ' . __( 'MENU', 'viomag') : ''; ?>

		<div class="boton-menu-movil"><i class="fa fa-align-justify"></i><?php esc_html($palabra_menu); ?></div>

			<div class="top-bar-custom-text">
				<?php echo wp_kses_post( get_theme_mod('viomag_top_bar_custom_text', '' ) );?>
			</div>

		<div class="toggle-search"><i class="fa fa-search"></i></div>

		<div class="social-icon-wrapper">
			<div class="top-bar-iconos-sociales">
					<?php if ( has_nav_menu( 'social-1' ) ) :
						$color_iconos = get_theme_mod('viomag_social_icons_color', 'original_color') == 'original_color' ? 'social-icons-original-color' : 'social-icons-unique-color';
					?>
						<nav class="social-navigation <?php echo $color_iconos; ?>" role="navigation" aria-label="<?php esc_attr_e( 'Social Menu', 'viomag' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social-1',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>',
							) );
						?>
						</nav><!-- .social-navigation -->
				<?php endif; ?>
			</div><!-- .top-bar-iconos-sociales -->
		</div><!-- .social-icon-wrapper -->
	</div><!-- .top-bar -->

	<div class="wrapper-search-top-bar">
		<div class="search-top-bar">
			<?php get_template_part( VIOMAG_TEMPLATE_PARTS . 'searchform-toggle' ); ?>
		</div>
	</div>
