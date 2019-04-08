<?php
/**
* Social profiles options
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function coolwp_social_profiles($wp_customize) {

    $wp_customize->add_section( 'sc_coolwp_sociallinks', array( 'title' => esc_html__( 'Social Links', 'coolwp' ), 'panel' => 'coolwp_main_options_panel', 'priority' => 400, ));

    $wp_customize->add_setting( 'coolwp_options[hide_header_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'coolwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'coolwp_hide_header_social_buttons_control', array( 'label' => esc_html__( 'Hide Header Social Buttons', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[hide_header_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'coolwp_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[googlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) ); 

    $wp_customize->add_control( 'coolwp_googlelink_control', array( 'label' => esc_html__( 'Google Plus URL', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[googlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[pinterestlink]', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'coolwp_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[vklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_vklink_control', array( 'label' => esc_html__( 'VK Link', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[vklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_githublink_control', array( 'label' => esc_html__( 'Github URL', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon Link', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_redditlink_control', array( 'label' => esc_html__( 'Reddit Link', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble Link', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_behancelink_control', array( 'label' => esc_html__( 'Behance Link', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_codepenlink_control', array( 'label' => esc_html__( 'Codepen Link', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle Link', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow Link', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange Link', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_bsalink_control', array( 'label' => esc_html__( 'BuySellAds Link', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare Link', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'coolwp_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'coolwp_sanitize_email' ) );

    $wp_customize->add_control( 'coolwp_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'coolwp_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'coolwp_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'coolwp' ), 'section' => 'sc_coolwp_sociallinks', 'settings' => 'coolwp_options[rsslink]', 'type' => 'text' ) );

}