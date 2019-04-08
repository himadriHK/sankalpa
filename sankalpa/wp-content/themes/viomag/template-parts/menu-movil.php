<?php
/**
 * Mobil Menu
 *
 * @package VioMag
 * @since VioMag 1.0
 */

?>
<div id="menu-movil">
	<div class="search-form-movil">
		<form method="get" id="searchform-movil" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<label for="s" class="assistive-text"><?php esc_attr_e( 'Search', 'viomag' ); ?></label>
			<input type="search" class="txt-search-movil" placeholder="<?php esc_attr_e( 'Search...', 'viomag' ); ?>" name="s" id="sm" />
			<input type="submit" name="submit" id="btn-search-movil" value="<?php esc_attr_e( 'Search', 'viomag' ); ?>" />
		</form>
	</div><!-- search-form-movil -->

	<div class="menu-movil-enlaces">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_class'     => 'nav-menu',
		) );
		?>
	</div>
</div><!-- #menu-movil -->
