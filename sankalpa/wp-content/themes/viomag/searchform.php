<?php
/**
 * Template for displaying search forms in VioMag
 *
 * @since VioMag 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_attr_x( 'Search for:', 'label', 'viomag' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'viomag' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'viomag' ); ?>" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo esc_attr_x( 'Search', 'submit button', 'viomag' ); ?></span></button>
</form>
