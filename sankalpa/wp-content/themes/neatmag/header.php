<?php
/**
* The header for NeatMag theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package NeatMag WordPress Theme
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

<body <?php body_class('neatmag-animated neatmag-fadein'); ?> id="neatmag-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<div class="neatmag-outer-wrapper-full">
<div class="neatmag-outer-wrapper">

<div class="neatmag-container" id="neatmag-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="clearfix" id="neatmag-head-content">

<?php if ( get_header_image() ) : ?>
<div class="neatmag-header-image clearfix">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="neatmag-header-img-link">
    <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="" class="neatmag-header-img"/>
</a>
</div>
<?php endif; ?>

<?php if ( !(neatmag_get_option('hide_header_content')) ) { ?>
<div class="neatmag-header-inside clearfix">
<div id="neatmag-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="neatmag-logo-img-link">
        <img src="<?php echo esc_url( neatmag_custom_logo() ); ?>" alt="" class="neatmag-logo-img"/>
    </a>
    </div>
<?php else: ?>
    <div class="site-branding">
      <h1 class="neatmag-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <p class="neatmag-site-description"><?php bloginfo( 'description' ); ?></p>
    </div>
<?php endif; ?>
</div><!--/#neatmag-logo -->

<div id="neatmag-header-banner">
<?php dynamic_sidebar( 'neatmag-header-banner' ); ?>
</div><!--/#neatmag-header-banner -->
</div>
<?php } ?>

</div><!--/#neatmag-head-content -->
</div><!--/#neatmag-header -->

<div class="neatmag-container neatmag-menu-container clearfix">
<div class="neatmag-menu-container-inside clearfix">

<nav class="neatmag-nav-primary" id="neatmag-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'menu-primary-navigation', 'menu_class' => 'menu neatmag-nav-menu menu-primary', 'fallback_cb' => 'neatmag_fallback_menu', ) ); ?>
</nav>

<?php if ( !(neatmag_get_option('hide_header_social_buttons')) ) { ?>
<div class='neatmag-top-social-icons'>
    <?php if ( neatmag_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('twitterlink') ); ?>" target="_blank" class="neatmag-social-icon-twitter" title="<?php esc_attr_e('Twitter','neatmag'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('facebooklink') ); ?>" target="_blank" class="neatmag-social-icon-facebook" title="<?php esc_attr_e('Facebook','neatmag'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('googlelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('googlelink') ); ?>" target="_blank" class="neatmag-social-icon-google-plus" title="<?php esc_attr_e('Google Plus','neatmag'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('pinterestlink') ); ?>" target="_blank" class="neatmag-social-icon-pinterest" title="<?php esc_attr_e('Pinterest','neatmag'); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('linkedinlink') ); ?>" target="_blank" class="neatmag-social-icon-linkedin" title="<?php esc_attr_e('Linkedin','neatmag'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('instagramlink') ); ?>" target="_blank" class="neatmag-social-icon-instagram" title="<?php esc_attr_e('Instagram','neatmag'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('flickrlink') ); ?>" target="_blank" class="neatmag-social-icon-flickr" title="<?php esc_attr_e('Flickr','neatmag'); ?>"><i class="fa fa-flickr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('youtubelink') ); ?>" target="_blank" class="neatmag-social-icon-youtube" title="<?php esc_attr_e('Youtube','neatmag'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('vimeolink') ); ?>" target="_blank" class="neatmag-social-icon-vimeo" title="<?php esc_attr_e('Vimeo','neatmag'); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('soundcloudlink') ); ?>" target="_blank" class="neatmag-social-icon-soundcloud" title="<?php esc_attr_e('SoundCloud','neatmag'); ?>"><i class="fa fa-soundcloud" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('lastfmlink') ); ?>" target="_blank" class="neatmag-social-icon-lastfm" title="<?php esc_attr_e('Lastfm','neatmag'); ?>"><i class="fa fa-lastfm" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('githublink') ); ?>" target="_blank" class="neatmag-social-icon-github" title="<?php esc_attr_e('Github','neatmag'); ?>"><i class="fa fa-github" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('bitbucketlink') ); ?>" target="_blank" class="neatmag-social-icon-bitbucket" title="<?php esc_attr_e('Bitbucket','neatmag'); ?>"><i class="fa fa-bitbucket" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('tumblrlink') ); ?>" target="_blank" class="neatmag-social-icon-tumblr" title="<?php esc_attr_e('Tumblr','neatmag'); ?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('digglink') ); ?>" target="_blank" class="neatmag-social-icon-digg" title="<?php esc_attr_e('Digg','neatmag'); ?>"><i class="fa fa-digg" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('deliciouslink') ); ?>" target="_blank" class="neatmag-social-icon-delicious" title="<?php esc_attr_e('Delicious','neatmag'); ?>"><i class="fa fa-delicious" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('stumblelink') ); ?>" target="_blank" class="neatmag-social-icon-stumbleupon" title="<?php esc_attr_e('Stumbleupon','neatmag'); ?>"><i class="fa fa-stumbleupon" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('redditlink') ); ?>" target="_blank" class="neatmag-social-icon-reddit" title="<?php esc_attr_e('Reddit','neatmag'); ?>"><i class="fa fa-reddit" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('dribbblelink') ); ?>" target="_blank" class="neatmag-social-icon-dribbble" title="<?php esc_attr_e('Dribbble','neatmag'); ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('behancelink') ); ?>" target="_blank" class="neatmag-social-icon-behance" title="<?php esc_attr_e('Behance','neatmag'); ?>"><i class="fa fa-behance" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('vklink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('vklink') ); ?>" target="_blank" class="neatmag-social-icon-vk" title="<?php esc_attr_e('VK','neatmag'); ?>"><i class="fa fa-vk" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('codepenlink') ); ?>" target="_blank" class="neatmag-social-icon-codepen" title="<?php esc_attr_e('Codepen','neatmag'); ?>"><i class="fa fa-codepen" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('jsfiddlelink') ); ?>" target="_blank" class="neatmag-social-icon-jsfiddle" title="<?php esc_attr_e('JSFiddle','neatmag'); ?>"><i class="fa fa-jsfiddle" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('stackoverflowlink') ); ?>" target="_blank" class="neatmag-social-icon-stackoverflow" title="<?php esc_attr_e('Stack Overflow','neatmag'); ?>"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('stackexchangelink') ); ?>" target="_blank" class="neatmag-social-icon-stackexchange" title="<?php esc_attr_e('Stack Exchange','neatmag'); ?>"><i class="fa fa-stack-exchange" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('bsalink') ); ?>" target="_blank" class="neatmag-social-icon-buysellads" title="<?php esc_attr_e('BuySellAds','neatmag'); ?>"><i class="fa fa-buysellads" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('slidesharelink') ); ?>" target="_blank" class="neatmag-social-icon-slideshare" title="<?php esc_attr_e('SlideShare','neatmag'); ?>"><i class="fa fa-slideshare" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( neatmag_get_option('skypeusername') ); ?>?chat" class="neatmag-social-icon-skype" title="<?php esc_attr_e('Skype','neatmag'); ?>"><i class="fa fa-skype" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( neatmag_get_option('emailaddress') ); ?>" class="neatmag-social-icon-email" title="<?php esc_attr_e('Email Us','neatmag'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('rsslink') ); ?>" target="_blank" class="neatmag-social-icon-rss" title="<?php esc_attr_e('RSS','neatmag'); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a><?php endif; ?>
    <a href="<?php echo esc_url( '#' ); ?>" title="<?php esc_attr_e('Search','neatmag'); ?>" class="neatmag-social-search-icon"><i class="fa fa-search"></i></a>
</div>
<?php } ?>

<div class='neatmag-social-search-box'>
<?php get_search_form(); ?>
</div>

</div>
</div>

<?php if(is_home() && !is_paged()) { ?>
<div class="neatmag-featured-posts-area neatmag-top-wrapper clearfix">
<?php dynamic_sidebar( 'neatmag-home-fullwidth-widgets' ); ?>
</div>
<?php } ?>

<div class="neatmag-featured-posts-area neatmag-top-wrapper clearfix">
<?php dynamic_sidebar( 'neatmag-fullwidth-widgets' ); ?>
</div>

<div class="neatmag-container clearfix" id="neatmag-wrapper">
<div class="clearfix" id="neatmag-content-wrapper">