<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package VioMag
 * @since VioMag 1.0
 */

?>
	</div><!-- #main .wrapper -->

	<footer id="colophon" role="contentinfo">

		<?php
		if ( is_active_sidebar( 'viomag-sidebar-footer-1' ) || is_active_sidebar( 'viomag-sidebar-footer-2' ) || is_active_sidebar( 'viomag-sidebar-footer-3' ) || is_active_sidebar( 'viomag-sidebar-footer-4' ) ) {
			?>
				<div class="wrapper-widget-area-footer">
					<div class="widget-area-footer-1">
						<?php if ( ! dynamic_sidebar( 'viomag-sidebar-footer-1' ) ) {} ?>
					</div>

					<div class="widget-area-footer-2">
						<?php if ( ! dynamic_sidebar( 'viomag-sidebar-footer-2' ) ) {} ?>
					</div>

					<div class="widget-area-footer-3">
						<?php if ( ! dynamic_sidebar( 'viomag-sidebar-footer-3' ) ) {} ?>
					</div>

					<div class="widget-area-footer-4">
						<?php if ( ! dynamic_sidebar( 'viomag-sidebar-footer-4' ) ) {} ?>
					</div>

				</div><!-- .wrapper-widget-area-footer -->

		<?php } // if is active widget areas ; ?>

		<hr class="hr-footer" />

		<div class="site-info">
			<div class="footer-text-left"><?php echo wp_kses_post( get_theme_mod( 'viomag_footer_text_left', '' ) ); ?></div>
			<div class="footer-text-center"><?php echo wp_kses_post( get_theme_mod( 'viomag_footer_text_center', '' ) ); ?></div>
			<div class="footer-text-right"><?php echo wp_kses_post( get_theme_mod( 'viomag_footer_text_right', '' ) ); ?></div>
		</div><!-- .site-info -->

		<?php
		if ( '' == get_theme_mod( 'viomag_ocultar_creditos_tema_wp', '' ) ) {
			?>
			<div class="viomag-theme-credits">
					Theme <a href="<?php echo VIOMAG_THEME_URI; ?>"><?php echo VIOMAG_NAME; ?></a> <?php esc_attr_e( 'by', 'viomag' ); ?> GalussoThemes |
					<?php esc_attr_e( 'Powered by', 'viomag' ); ?> <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'viomag' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'viomag' ); ?>">WordPress</a>
			</div><!-- .credits-blog-wp -->
		<?php } ?>
	</footer><!-- #colophon -->

	<?php
	if ( get_theme_mod( 'viomag_boton_ir_arriba', 1 ) == 1 ) {
		?>
		<div class="ir-arriba"><i class="fa fa-arrow-up"></i></div>
	<?php } ?>

	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>
