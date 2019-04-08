<?php
/**
* Getting started options
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function coolwp_getting_started($wp_customize) {

    $wp_customize->add_section( 'sc_coolwp_getting_started', array( 'title' => esc_html__( 'Getting Started', 'coolwp' ), 'description' => esc_html__( 'Thanks for your interest in CoolWP! If you have any questions or run into any trouble, please visit us the following links. We will get you fixed up!', 'coolwp' ), 'panel' => 'coolwp_main_options_panel', 'priority' => 5, ) );

    $wp_customize->add_setting( 'coolwp_options[documentation]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new CoolWP_Customize_Button_Control( $wp_customize, 'coolwp_documentation_control', array( 'label' => esc_html__( 'Documentation', 'coolwp' ), 'section' => 'sc_coolwp_getting_started', 'settings' => 'coolwp_options[documentation]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/coolwp-wordpress-theme/', 'button_target' => '_blank', ) ) );

    $wp_customize->add_setting( 'coolwp_options[contact]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new CoolWP_Customize_Button_Control( $wp_customize, 'coolwp_contact_control', array( 'label' => esc_html__( 'Contact Us', 'coolwp' ), 'section' => 'sc_coolwp_getting_started', 'settings' => 'coolwp_options[contact]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/contact/', 'button_target' => '_blank', ) ) );

}