<?php
/**
* More Custom Functions
*
* @package NeatMag WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get custom-logo URL
function neatmag_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $neatmag_custom_logo_id = get_theme_mod( 'custom_logo' );
    $neatmag_logo = wp_get_attachment_image_src( $neatmag_custom_logo_id , 'full' );
    return $neatmag_logo[0];
}

function neatmag_read_more_text() {
       $readmoretext = esc_html__( 'Continue Reading...', 'neatmag' );
        if ( neatmag_get_option('read_more_text') ) {
                $readmoretext = neatmag_get_option('read_more_text');
        }
       return $readmoretext;
}

// Category ids in post class
function neatmag_category_id_class($classes) {
        global $post;
        foreach((get_the_category($post->ID)) as $category) {
            $classes [] = 'wpcat-' . $category->cat_ID . '-id';
        }
        return $classes;
}
add_filter('post_class', 'neatmag_category_id_class');

// Change excerpt length
function neatmag_excerpt_length($length) {
    if ( is_admin() ) {
        return $length;
    }
    $read_more_length = 25;
    if ( neatmag_get_option('read_more_length') ) {
        $read_more_length = neatmag_get_option('read_more_length');
    }
    return $read_more_length;
}
add_filter('excerpt_length', 'neatmag_excerpt_length');

// Change excerpt more word
function neatmag_excerpt_more($more) {
       if ( is_admin() ) {
         return $more;
       }
       return '...';
}
add_filter('excerpt_more', 'neatmag_excerpt_more');

// Adds custom classes to the array of body classes.
function neatmag_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'neatmag-group-blog';
    }     
    if ( is_page_template( 'template-full-width-page.php' ) || !is_active_sidebar( 'neatmag-main-sidebar' ) ) {
        $classes[] = 'neatmag-page-full-width';
    }
    if ( is_page_template( 'template-full-width-post.php' ) ) {
        $classes[] = 'neatmag-post-full-width';
    }
    if ( is_404() ) {
        $classes[] = 'neatmag-404-full-width';
    }
    return $classes;
}
add_filter( 'body_class', 'neatmag_body_classes' );


function neatmag_post_style() {
       $post_style = 'list';
        if ( neatmag_get_option('post_style') ) {
                $post_style = neatmag_get_option('post_style');
        }
       return $post_style;
}