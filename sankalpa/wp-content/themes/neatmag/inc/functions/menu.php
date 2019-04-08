<?php
/**
* Menu Functions
*
* @package NeatMag WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get our wp_nav_menu() fallback, wp_page_menu(), to show a "Home" link as the first item
function neatmag_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'neatmag_page_menu_args' );


function neatmag_fallback_menu() {
   wp_page_menu( array(
        'sort_column'  => 'menu_order, post_title',
        'menu_id'      => 'menu-primary-navigation',
        'menu_class'   => 'menu neatmag-nav-menu menu-primary',
        'container'    => 'ul',
        'echo'         => true,
        'link_before'  => '',
        'link_after'   => '',
        'before'       => '',
        'after'        => '',
        'item_spacing' => 'discard',
        'walker'       => '',
    ) );
}