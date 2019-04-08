<?php
/**
* The header for CoolWP theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class('coolwp-animated coolwp-fadein'); ?> id="coolwp-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<?php if ( !(coolwp_get_option('disable_secondary_menu')) ) { ?>
<div class="coolwp-container coolwp-secondary-menu-container clearfix">
<div class="coolwp-secondary-menu-container-inside clearfix">

<nav class="coolwp-nav-secondary" id="coolwp-secondary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
<div class="coolwp-outer-wrapper">
<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'coolwp-menu-secondary-navigation', 'menu_class' => 'coolwp-secondary-nav-menu coolwp-menu-secondary', 'fallback_cb' => 'coolwp_top_fallback_menu', ) ); ?>
</div>
</nav>

</div>
</div>
<?php } ?>

<div class="coolwp-container" id="coolwp-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="coolwp-head-content clearfix" id="coolwp-head-content">

<div class="coolwp-outer-wrapper">

<?php if ( get_header_image() ) : ?>
<div class="coolwp-header-image clearfix">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="coolwp-header-img-link">
    <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="" class="coolwp-header-img"/>
</a>
</div>
<?php endif; ?>

<?php if ( !(coolwp_get_option('hide_header_content')) ) { ?>
<div class="coolwp-header-inside clearfix">
<div id="coolwp-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="coolwp-logo-img-link">
        <img src="<?php echo esc_url( coolwp_custom_logo() ); ?>" alt="" class="coolwp-logo-img"/>
    </a>
    </div>
<?php else: ?>
    <div class="site-branding">
      <h1 class="coolwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <p class="coolwp-site-description"><?php bloginfo( 'description' ); ?></p>
    </div>
<?php endif; ?>
</div><!--/#coolwp-logo -->

<div id="coolwp-header-banner">
<?php dynamic_sidebar( 'coolwp-header-banner' ); ?>
</div><!--/#coolwp-header-banner -->
</div>
<?php } ?>

</div>

</div><!--/#coolwp-head-content -->
</div><!--/#coolwp-header -->

<?php if ( !(coolwp_get_option('disable_primary_menu')) ) { ?>
<div class="coolwp-container coolwp-primary-menu-container clearfix">
<div class="coolwp-primary-menu-container-inside clearfix">

<nav class="coolwp-nav-primary" id="coolwp-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
<div class="coolwp-outer-wrapper">
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'coolwp-menu-primary-navigation', 'menu_class' => 'coolwp-nav-primary-menu coolwp-menu-primary', 'fallback_cb' => 'coolwp_fallback_menu', ) ); ?>

<?php if ( !(coolwp_get_option('hide_header_social_buttons')) ) { coolwp_header_social_buttons(); } ?>

</div>
</nav>

<div id="coolwp-search-overlay-wrap" class="coolwp-search-overlay">
  <span class="coolwp-search-closebtn" onclick="closeSearch()" title="<?php esc_attr_e('Close Search','coolwp'); ?>">&#xD7;</span>
  <div class="coolwp-search-overlay-content">
    <?php get_search_form(); ?>
  </div>
</div>

</div>
</div>
<?php } ?>

<?php if(is_front_page() && !is_paged()) { ?>
<?php if ( coolwp_get_option('enable_slider') ) { coolwp_slider(); } ?>
<?php } ?>

<div class="coolwp-outer-wrapper">
<?php coolwp_top_wide_widgets(); ?>
</div>

<div class="coolwp-outer-wrapper">

<div class="coolwp-container clearfix" id="coolwp-wrapper">
<div class="coolwp-content-wrapper clearfix" id="coolwp-content-wrapper">