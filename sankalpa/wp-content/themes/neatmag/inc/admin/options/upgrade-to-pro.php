<?php
/**
* Upgrade to pro options
*
* @package NeatMag WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function neatmag_upgrade_to_pro($wp_customize) {

    $wp_customize->add_section( 'sc_neatmag_upgrade', array( 'title' => esc_html__( 'Upgrade to Pro Version', 'neatmag' ), 'priority' => 400 ) );
    
    $wp_customize->add_setting( 'neatmag_options[upgrade_text]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );
    
    $wp_customize->add_control( new NeatMag_Customize_Static_Text_Control( $wp_customize, 'neatmag_upgrade_text_control', array(
        'label'       => esc_html__( 'NeatMag Pro', 'neatmag' ),
        'section'     => 'sc_neatmag_upgrade',
        'settings' => 'neatmag_options[upgrade_text]',
        'description' => esc_html__( 'Do you enjoy NeatMag? Upgrade to NeatMag Pro now and get:', 'neatmag' ).
            '<ul class="neatmag-customizer-pro-features">' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Color Options', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Font Options', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Layout Options', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Custom Page Templates', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Custom Post Templates', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '8 Different Posts Styles', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '8 Different Featured Posts Widgets(each widget displays recent/popular/random posts or posts from a given category or tag.)', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Featured Posts Slider Widget(this widget displays recent/popular/random posts or posts from a given category or tag.)', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Tabbed Widget', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Social Profiles Widget and About Me Widget', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '2 Header Layouts (full-width header or header+728x90 ad)', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Post Share Buttons', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Related Posts with Thumbnails', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Author Bio Box with Social Buttons', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Sticky Menu/Sticky Sidebars with enable/disable capability', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'WooCommerce Support', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Search Engine Optimized', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Customizer options', 'neatmag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Features...', 'neatmag' ) . '</li>' .
            '</ul>'.
            '<strong><a href="'.NEATMAG_PROURL.'" class="button button-primary" target="_blank"><i class="fa fa-shopping-cart"></i> ' . esc_html__( 'Upgrade To NeatMag PRO', 'neatmag' ) . '</a></strong>'
    ) ) ); 

}