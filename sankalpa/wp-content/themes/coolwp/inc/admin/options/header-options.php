<?php
/**
* Header options
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function coolwp_header_options($wp_customize) {

    // Header
    $wp_customize->add_section( 'sc_coolwp_header', array( 'title' => esc_html__( 'Header Options', 'coolwp' ), 'panel' => 'coolwp_main_options_panel', 'priority' => 240 ) );

    $wp_customize->add_setting( 'coolwp_options[hide_header_content]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'coolwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'coolwp_hide_header_content_control', array( 'label' => esc_html__( 'Hide Header Content', 'coolwp' ), 'section' => 'sc_coolwp_header', 'settings' => 'coolwp_options[hide_header_content]', 'type' => 'checkbox', ) );

}