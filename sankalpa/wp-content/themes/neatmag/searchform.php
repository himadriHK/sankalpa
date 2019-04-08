<?php
/**
* The file for displaying the search form
*
* @package NeatMag WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<form role="search" method="get" class="neatmag-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<label>
    <span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'neatmag' ); ?></span>
    <input type="search" class="neatmag-search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'neatmag' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
</label>
<input type="submit" class="neatmag-search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'neatmag' ); ?>" />
</form>