<?php
/**
* Post options
*
* @package NeatMag WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function neatmag_post_options($wp_customize) {

    $wp_customize->add_section( 'sc_neatmag_posts', array( 'title' => esc_html__( 'Post Options', 'neatmag' ), 'panel' => 'neatmag_main_options_panel', 'priority' => 260 ) );

    $wp_customize->add_setting( 'neatmag_options[posts_heading]', array( 'default' => esc_html__( 'Recent Posts', 'neatmag' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'neatmag_posts_heading_control', array( 'label' => esc_html__( 'HomePage Posts Heading', 'neatmag' ), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[posts_heading]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'neatmag_options[thumbnail_link]', array( 'default' => 'yes', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_thumbnail_link' ) );

    $wp_customize->add_control( 'neatmag_thumbnail_link_control', array( 'label' => esc_html__( 'Thumbnail Link', 'neatmag' ), 'description' => esc_html__('Do you want single post thumbnail to be linked to their post?', 'neatmag'), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[thumbnail_link]', 'type' => 'select', 'choices' => array( 'yes' => esc_html__('Yes', 'neatmag'), 'no' => esc_html__('No', 'neatmag') ) ) );

    $wp_customize->add_setting( 'neatmag_options[post_style]', array( 'default' => 'list', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_post_style' ) );

    $wp_customize->add_control( 'neatmag_post_style_control', array( 'label' => esc_html__( 'Non-Singular Posts Style', 'neatmag' ), 'description' => esc_html__('Select the post style you want for home/categories/tags/archive/search-results pages.', 'neatmag'), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[post_style]', 'type' => 'select', 'choices' => array( 'list' => esc_html__('List', 'neatmag'), 'full' => esc_html__('Full', 'neatmag') ) ) );

    $wp_customize->add_setting( 'neatmag_options[read_more_length]', array( 'default' => 25, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_read_more_length' ) );

    $wp_customize->add_control( 'neatmag_read_more_length_control', array( 'label' => esc_html__( 'Auto Post Summary Length', 'neatmag' ), 'description' => esc_html__('Enter the number of words need to display in the post summary. Default is 25 words.', 'neatmag'), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[read_more_length]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'neatmag_options[read_more_text]', array( 'default' => esc_html__( 'Continue Reading...', 'neatmag' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'neatmag_read_more_text_control', array( 'label' => esc_html__( 'Read More Text', 'neatmag' ), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[read_more_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'neatmag_options[hide_posted_date]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'neatmag_hide_posted_date_control', array( 'label' => esc_html__( 'Hide Posted Date', 'neatmag' ), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[hide_posted_date]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'neatmag_options[hide_post_author]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'neatmag_hide_post_author_control', array( 'label' => esc_html__( 'Hide Post Author', 'neatmag' ), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[hide_post_author]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'neatmag_options[hide_post_categories]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'neatmag_hide_post_categories_control', array( 'label' => esc_html__( 'Hide Post Categories', 'neatmag' ), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[hide_post_categories]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'neatmag_options[hide_post_tags]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'neatmag_hide_post_tags_control', array( 'label' => esc_html__( 'Hide Post Tags', 'neatmag' ), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[hide_post_tags]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'neatmag_options[hide_comments_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'neatmag_hide_comments_link_control', array( 'label' => esc_html__( 'Hide Comment Link', 'neatmag' ), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[hide_comments_link]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'neatmag_options[hide_post_edit]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'neatmag_hide_post_edit_control', array( 'label' => esc_html__( 'Hide Post Edit Link', 'neatmag' ), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[hide_post_edit]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'neatmag_options[hide_thumbnail]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'neatmag_hide_thumbnail_control', array( 'label' => esc_html__( 'Hide Thumbnails from Every Page', 'neatmag' ), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[hide_thumbnail]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'neatmag_options[hide_thumbnail_single]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'neatmag_hide_thumbnail_single_control', array( 'label' => esc_html__( 'Hide Thumbnails from Posts/Pages', 'neatmag' ), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[hide_thumbnail_single]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'neatmag_options[hide_post_snippet]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'neatmag_hide_post_snippet_control', array( 'label' => esc_html__( 'Hide Post Snippet', 'neatmag' ), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[hide_post_snippet]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'neatmag_options[hide_read_more_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'neatmag_hide_read_more_button_control', array( 'label' => esc_html__( 'Hide Read More Button', 'neatmag' ), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[hide_read_more_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'neatmag_options[hide_author_bio_box]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'neatmag_hide_author_bio_box_control', array( 'label' => esc_html__( 'Hide Author Bio Box', 'neatmag' ), 'section' => 'sc_neatmag_posts', 'settings' => 'neatmag_options[hide_author_bio_box]', 'type' => 'checkbox', ) );

}