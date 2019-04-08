<?php
/**
* Recommended plugins options
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function coolwp_recomm_plugin_options($wp_customize) {

    // Customizer Section: Recommended Plugins
    $wp_customize->add_section( 'sc_recommended_plugins', array( 'title' => esc_html__( 'Recommended Plugins', 'coolwp' ), 'panel' => 'coolwp_main_options_panel', 'priority' => 880 ));

    $wp_customize->add_setting( 'coolwp_options[recommended_plugins]', array( 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'coolwp_sanitize_recommended_plugins' ) );

    $wp_customize->add_control( new CoolWP_Customize_Recommended_Plugins( $wp_customize, 'coolwp_recommended_plugins_control', array( 'label' => esc_html__( 'Recommended Plugins', 'coolwp' ), 'section' => 'sc_recommended_plugins', 'settings' => 'coolwp_options[recommended_plugins]', 'type' => 'tdna-recommended-wpplugins' ) ) );

}