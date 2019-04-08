<?php
/**
* Upgrade to pro options
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function coolwp_upgrade_to_pro($wp_customize) {

    $wp_customize->add_section( 'sc_coolwp_upgrade', array( 'title' => esc_html__( 'Upgrade to Pro Version', 'coolwp' ), 'priority' => 400 ) );
    
    $wp_customize->add_setting( 'coolwp_options[upgrade_text]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );
    
    $wp_customize->add_control( new CoolWP_Customize_Static_Text_Control( $wp_customize, 'coolwp_upgrade_text_control', array(
        'label'       => esc_html__( 'CoolWP Pro', 'coolwp' ),
        'section'     => 'sc_coolwp_upgrade',
        'settings' => 'coolwp_options[upgrade_text]',
        'description' => esc_html__( 'Do you enjoy CoolWP? Upgrade to CoolWP Pro now and get:', 'coolwp' ).
            '<ul class="coolwp-customizer-pro-features">' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Color Options', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Font Options', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '10+ Layout Options', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '10+ Custom Page Templates', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '10+ Custom Post Templates', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '10 Different Posts Styles', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '17 Different Featured Posts Widgets(each widget displays recent/popular/random posts or posts from a given category or tag.)', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Featured Posts Slider Widget(this widget displays recent/popular/random posts or posts from a given category or tag.)', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'News Ticker', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Slider with More Options', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Tabbed Widget', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Social Profiles Widget and About Me Widget', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '2 Header Layouts (full-width header or header+728x90 ad)', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Post Share Buttons', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Related Posts with Thumbnails', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Author Bio Box with Social Buttons', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Sticky Menu/Sticky Sidebars with enable/disable capability', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Built-in Contact Form', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'WooCommerce Support', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Search Engine Optimized', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Customizer options', 'coolwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Features...', 'coolwp' ) . '</li>' .
            '</ul>'.
            '<strong><a href="'.COOLWP_PROURL.'" class="button button-primary" target="_blank"><i class="fa fa-shopping-cart"></i> ' . esc_html__( 'Upgrade To CoolWP PRO', 'coolwp' ) . '</a></strong>'
    ) ) ); 

}