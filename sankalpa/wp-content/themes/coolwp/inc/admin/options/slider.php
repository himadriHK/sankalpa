<?php
/**
* Slider options
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function coolwp_slider_options($wp_customize) {

    $wp_customize->add_section( 'sc_slider', array( 'title' => esc_html__( 'Slider', 'coolwp' ), 'panel' => 'coolwp_main_options_panel', 'priority' => 250 ) );

    $wp_customize->add_setting( 'coolwp_options[enable_slider]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'coolwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'coolwp_enable_slider_control', array( 'label' => esc_html__( 'Enable Slider', 'coolwp' ), 'section' => 'sc_slider', 'settings' => 'coolwp_options[enable_slider]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'coolwp_options[slider_length]', array( 'default' => 5, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'coolwp_sanitize_positive_integer' ) );

    $wp_customize->add_control( 'coolwp_slider_length_control', array( 'label' => esc_html__( 'Number of Slider Posts', 'coolwp' ), 'description' => esc_html__('Enter the number of posts you need to display in the slider area. Default is 5 posts.', 'coolwp'), 'section' => 'sc_slider', 'settings' => 'coolwp_options[slider_length]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[slider_post_type]', array( 'default' => 'recent-posts', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'coolwp_sanitize_slider_type' ) );

    $wp_customize->add_control( 'coolwp_slider_post_type_control', array( 'label' => esc_html__( 'Slider Posts Type', 'coolwp' ), 'description' => esc_html__('Select a post type to display in slider.', 'coolwp'), 'section' => 'sc_slider', 'settings' => 'coolwp_options[slider_post_type]', 'type' => 'select', 'choices' => array( 'recent-posts' => esc_html__('Recent Posts', 'coolwp'), 'category-posts' => esc_html__('Category Posts', 'coolwp') ) ) );

    $wp_customize->add_setting( 'coolwp_options[slider_cat]', array( 'default' => 0, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'absint' ) );

    $wp_customize->add_control( new CoolWP_Customize_Category_Control( $wp_customize, 'coolwp_slider_cat_control', array( 'label' => esc_html__( 'Slider Posts Category', 'coolwp' ), 'section' => 'sc_slider', 'settings' => 'coolwp_options[slider_cat]', 'description' => esc_html__( 'Select a category if Posts Type option is Category Posts', 'coolwp' ) ) ) );

}