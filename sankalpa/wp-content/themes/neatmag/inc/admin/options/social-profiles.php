<?php
/**
* Social profiles options
*
* @package NeatMag WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function neatmag_social_profiles($wp_customize) {

    $wp_customize->add_section( 'sc_neatmag_sociallinks', array( 'title' => esc_html__( 'Social Links', 'neatmag' ), 'panel' => 'neatmag_main_options_panel', 'priority' => 400, ));

    $wp_customize->add_setting( 'neatmag_options[hide_header_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'neatmag_hide_header_social_buttons_control', array( 'label' => esc_html__( 'Hide Header Social Buttons', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[hide_header_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'neatmag_options[show_footer_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'neatmag_show_footer_social_buttons_control', array( 'label' => esc_html__( 'Show Footer Social Buttons', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[show_footer_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'neatmag_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[googlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) ); 

    $wp_customize->add_control( 'neatmag_googlelink_control', array( 'label' => esc_html__( 'Google Plus URL', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[googlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[pinterestlink]', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'neatmag_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[vklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_vklink_control', array( 'label' => esc_html__( 'VK Link', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[vklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_githublink_control', array( 'label' => esc_html__( 'Github URL', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon Link', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_redditlink_control', array( 'label' => esc_html__( 'Reddit Link', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble Link', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_behancelink_control', array( 'label' => esc_html__( 'Behance Link', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_codepenlink_control', array( 'label' => esc_html__( 'Codepen Link', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle Link', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow Link', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange Link', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_bsalink_control', array( 'label' => esc_html__( 'BuySellAds Link', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare Link', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'neatmag_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_email' ) );

    $wp_customize->add_control( 'neatmag_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'neatmag_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'neatmag' ), 'section' => 'sc_neatmag_sociallinks', 'settings' => 'neatmag_options[rsslink]', 'type' => 'text' ) );

}