<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function coolwp_widgets_init() {

register_sidebar(array(
    'id' => 'coolwp-header-banner',
    'name' => esc_html__( 'Header Banner', 'coolwp' ),
    'description' => esc_html__( 'This sidebar is located on the header of the web page.', 'coolwp' ),
    'before_widget' => '<div id="%1$s" class="coolwp-header-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="coolwp-widget-title">',
    'after_title' => '</h2>'));

register_sidebar(array(
    'id' => 'coolwp-sidebar-one',
    'name' => esc_html__( 'Sidebar 1', 'coolwp' ),
    'description' => esc_html__( 'This sidebar is normally located on the left-hand side of web page.', 'coolwp' ),
    'before_widget' => '<div id="%1$s" class="coolwp-side-widget widget coolwp-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="coolwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'coolwp-sidebar-two',
    'name' => esc_html__( 'Sidebar 2', 'coolwp' ),
    'description' => esc_html__( 'This sidebar is normally located on the right-hand side of web page.', 'coolwp' ),
    'before_widget' => '<div id="%1$s" class="coolwp-side-widget widget coolwp-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="coolwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'coolwp-home-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Home Page Only)', 'coolwp' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of homepage.', 'coolwp' ),
    'before_widget' => '<div id="%1$s" class="coolwp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="coolwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'coolwp-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Every Page)', 'coolwp' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of every page.', 'coolwp' ),
    'before_widget' => '<div id="%1$s" class="coolwp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="coolwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'coolwp-home-top-widgets',
    'name' => esc_html__( 'Top Widgets (Home Page Only)', 'coolwp' ),
    'description' => esc_html__( 'This widget area is located at the top of homepage.', 'coolwp' ),
    'before_widget' => '<div id="%1$s" class="coolwp-main-widget widget coolwp-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="coolwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'coolwp-top-widgets',
    'name' => esc_html__( 'Top Widgets (Every Page)', 'coolwp' ),
    'description' => esc_html__( 'This widget area is located at the top of every page.', 'coolwp' ),
    'before_widget' => '<div id="%1$s" class="coolwp-main-widget widget coolwp-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="coolwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'coolwp-home-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Home Page Only)', 'coolwp' ),
    'description' => esc_html__( 'This widget area is located at the bottom of homepage.', 'coolwp' ),
    'before_widget' => '<div id="%1$s" class="coolwp-main-widget widget coolwp-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="coolwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'coolwp-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Every Page)', 'coolwp' ),
    'description' => esc_html__( 'This widget area is located at the bottom of every page.', 'coolwp' ),
    'before_widget' => '<div id="%1$s" class="coolwp-main-widget widget coolwp-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="coolwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'coolwp-footer-1',
    'name' => esc_html__( 'Footer 1', 'coolwp' ),
    'description' => esc_html__( 'This sidebar is located on the left bottom of web page.', 'coolwp' ),
    'before_widget' => '<div id="%1$s" class="coolwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="coolwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'coolwp-footer-2',
    'name' => esc_html__( 'Footer 2', 'coolwp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'coolwp' ),
    'before_widget' => '<div id="%1$s" class="coolwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="coolwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'coolwp-footer-3',
    'name' => esc_html__( 'Footer 3', 'coolwp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'coolwp' ),
    'before_widget' => '<div id="%1$s" class="coolwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="coolwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'coolwp-footer-4',
    'name' => esc_html__( 'Footer 4', 'coolwp' ),
    'description' => esc_html__( 'This sidebar is located on the right bottom of web page.', 'coolwp' ),
    'before_widget' => '<div id="%1$s" class="coolwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="coolwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

}
add_action( 'widgets_init', 'coolwp_widgets_init' );


function coolwp_top_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'coolwp-home-fullwidth-widgets' ) || is_active_sidebar( 'coolwp-fullwidth-widgets' ) ) : ?>
<div class="coolwp-top-wrapper-outer clearfix">
<div class="coolwp-featured-posts-area coolwp-top-wrapper clearfix">
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'coolwp-home-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'coolwp-fullwidth-widgets' ); ?>
</div>
</div>
<?php endif; ?>

<?php }


function coolwp_top_widgets() { ?>

<?php if ( is_active_sidebar( 'coolwp-home-top-widgets' ) || is_active_sidebar( 'coolwp-top-widgets' ) ) : ?>
<div class="coolwp-featured-posts-area coolwp-featured-posts-area-top clearfix">
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'coolwp-home-top-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'coolwp-top-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function coolwp_bottom_widgets() { ?>

<?php if ( is_active_sidebar( 'coolwp-home-bottom-widgets' ) || is_active_sidebar( 'coolwp-bottom-widgets' ) ) : ?>
<div class='coolwp-featured-posts-area coolwp-featured-posts-area-bottom clearfix'>
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'coolwp-home-bottom-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'coolwp-bottom-widgets' ); ?>
</div>
<?php endif; ?>

<?php }