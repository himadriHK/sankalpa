<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package NeatMag WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function neatmag_widgets_init() {

register_sidebar(array(
    'id' => 'neatmag-header-banner',
    'name' => esc_html__( 'Header Banner', 'neatmag' ),
    'description' => esc_html__( 'This sidebar is located on the header of the web page.', 'neatmag' ),
    'before_widget' => '<div id="%1$s" class="neatmag-header-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="neatmag-widget-title">',
    'after_title' => '</h2>'));

register_sidebar(array(
    'id' => 'neatmag-main-sidebar',
    'name' => esc_html__( 'Main Sidebar', 'neatmag' ),
    'description' => esc_html__( 'This sidebar is located on the right-hand side of web page.', 'neatmag' ),
    'before_widget' => '<div id="%1$s" class="neatmag-side-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="neatmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'neatmag-home-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Home Page Only)', 'neatmag' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of homepage.', 'neatmag' ),
    'before_widget' => '<div id="%1$s" class="neatmag-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="neatmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'neatmag-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Every Page)', 'neatmag' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of every page.', 'neatmag' ),
    'before_widget' => '<div id="%1$s" class="neatmag-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="neatmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'neatmag-home-top-widgets',
    'name' => esc_html__( 'Top Widgets (Home Page Only)', 'neatmag' ),
    'description' => esc_html__( 'This widget area is located at the top of homepage.', 'neatmag' ),
    'before_widget' => '<div id="%1$s" class="neatmag-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="neatmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'neatmag-top-widgets',
    'name' => esc_html__( 'Top Widgets (Every Page)', 'neatmag' ),
    'description' => esc_html__( 'This widget area is located at the top of every page.', 'neatmag' ),
    'before_widget' => '<div id="%1$s" class="neatmag-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="neatmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'neatmag-home-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Home Page Only)', 'neatmag' ),
    'description' => esc_html__( 'This widget area is located at the bottom of homepage.', 'neatmag' ),
    'before_widget' => '<div id="%1$s" class="neatmag-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="neatmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'neatmag-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Every Page)', 'neatmag' ),
    'description' => esc_html__( 'This widget area is located at the bottom of every page.', 'neatmag' ),
    'before_widget' => '<div id="%1$s" class="neatmag-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="neatmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'neatmag-footer-1',
    'name' => esc_html__( 'Footer 1', 'neatmag' ),
    'description' => esc_html__( 'This sidebar is located on the left bottom of web page.', 'neatmag' ),
    'before_widget' => '<div id="%1$s" class="neatmag-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="neatmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'neatmag-footer-2',
    'name' => esc_html__( 'Footer 2', 'neatmag' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'neatmag' ),
    'before_widget' => '<div id="%1$s" class="neatmag-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="neatmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'neatmag-footer-3',
    'name' => esc_html__( 'Footer 3', 'neatmag' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'neatmag' ),
    'before_widget' => '<div id="%1$s" class="neatmag-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="neatmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'neatmag-footer-4',
    'name' => esc_html__( 'Footer 4', 'neatmag' ),
    'description' => esc_html__( 'This sidebar is located on the right bottom of web page.', 'neatmag' ),
    'before_widget' => '<div id="%1$s" class="neatmag-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="neatmag-widget-title"><span>',
    'after_title' => '</span></h2>'));

}
add_action( 'widgets_init', 'neatmag_widgets_init' );