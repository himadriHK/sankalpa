<?php
/**
* Post meta functions
*
* @package NeatMag WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'neatmag_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function neatmag_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'neatmag' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="neatmag-tags-links"><i class="fa fa-tags" aria-hidden="true"></i> ' . esc_html__( 'Tagged %1$s', 'neatmag' ) . '</span>', $tags_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'neatmag_full_cats' ) ) :
function neatmag_full_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'neatmag' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="neatmag-full-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'neatmag' ) . '</div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'neatmag_full_postmeta' ) ) :
function neatmag_full_postmeta() { ?>
    <?php if ( !(neatmag_get_option('hide_post_author')) || !(neatmag_get_option('hide_posted_date')) || !(neatmag_get_option('hide_comments_link')) ) { ?>
    <div class="neatmag-full-post-footer">
    <?php if ( !(neatmag_get_option('hide_post_author')) ) { ?><span class="neatmag-full-post-author neatmag-full-post-meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(neatmag_get_option('hide_posted_date')) ) { ?><span class="neatmag-full-post-date neatmag-full-post-meta"><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(neatmag_get_option('hide_comments_link')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="neatmag-full-post-comment neatmag-full-post-meta"><?php comments_popup_link( esc_attr__( 'Leave a comment', 'neatmag' ), esc_attr__( '1 Comment', 'neatmag' ), esc_attr__( '% Comments', 'neatmag' ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;



if ( ! function_exists( 'neatmag_list_cats' ) ) :
function neatmag_list_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'neatmag' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="neatmag-list-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'neatmag' ) . '</div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'neatmag_list_postmeta' ) ) :
function neatmag_list_postmeta() { ?>
    <?php if ( !(neatmag_get_option('hide_post_author')) || !(neatmag_get_option('hide_posted_date')) || !(neatmag_get_option('hide_comments_link')) ) { ?>
    <div class="neatmag-list-post-footer">
    <?php if ( !(neatmag_get_option('hide_post_author')) ) { ?><span class="neatmag-list-post-author neatmag-list-post-meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(neatmag_get_option('hide_posted_date')) ) { ?><span class="neatmag-list-post-date neatmag-list-post-meta"><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(neatmag_get_option('hide_comments_link')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="neatmag-list-post-comment neatmag-list-post-meta"><?php comments_popup_link( esc_attr__( 'Leave a comment', 'neatmag' ), esc_attr__( '1 Comment', 'neatmag' ), esc_attr__( '% Comments', 'neatmag' ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'neatmag_single_cats' ) ) :
function neatmag_single_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( ', ', 'neatmag' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="neatmag-entry-meta-single neatmag-entry-meta-single-top"><span class="neatmag-entry-meta-single-cats"><i class="fa fa-folder-open-o"></i>&nbsp;' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'neatmag' ) . '</span></div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'neatmag_single_postmeta' ) ) :
function neatmag_single_postmeta() { ?>
    <?php if ( !(neatmag_get_option('hide_post_author')) || !(neatmag_get_option('hide_posted_date')) || !(neatmag_get_option('hide_comments_link')) || !(neatmag_get_option('hide_post_edit')) ) { ?>
    <div class="neatmag-entry-meta-single">
    <?php if ( !(neatmag_get_option('hide_post_author')) ) { ?><span class="neatmag-entry-meta-single-author"><i class="fa fa-user-circle-o"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(neatmag_get_option('hide_posted_date')) ) { ?><span class="neatmag-entry-meta-single-date"><i class="fa fa-clock-o"></i>&nbsp;<?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(neatmag_get_option('hide_comments_link')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="neatmag-entry-meta-single-comments"><i class="fa fa-comments-o"></i>&nbsp;<?php comments_popup_link( esc_attr__( 'Leave a comment', 'neatmag' ), esc_attr__( '1 Comment', 'neatmag' ), esc_attr__( '% Comments', 'neatmag' ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(neatmag_get_option('hide_post_edit')) ) { ?><?php edit_post_link( esc_html__( 'Edit', 'neatmag' ), '<span class="edit-link">&nbsp;&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i> ', '</span>' ); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;