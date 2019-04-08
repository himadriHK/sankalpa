<?php
/**
* Post meta functions
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'coolwp_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function coolwp_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'coolwp' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="coolwp-tags-links"><i class="fa fa-tags" aria-hidden="true"></i> ' . esc_html__( 'Tagged %1$s', 'coolwp' ) . '</span>', $tags_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'coolwp_style_9_cats' ) ) :
function coolwp_style_9_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'coolwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="coolwp-fp09-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'coolwp' ) . '</div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'coolwp_style_9_postmeta' ) ) :
function coolwp_style_9_postmeta() { ?>
    <?php if ( !(coolwp_get_option('hide_post_author_home')) || !(coolwp_get_option('hide_posted_date_home')) || !(coolwp_get_option('hide_comments_link_home')) ) { ?>
    <div class="coolwp-fp09-post-footer">
    <?php if ( !(coolwp_get_option('hide_post_author_home')) ) { ?><span class="coolwp-fp09-post-author coolwp-fp09-post-meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(coolwp_get_option('hide_posted_date_home')) ) { ?><span class="coolwp-fp09-post-date coolwp-fp09-post-meta"><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(coolwp_get_option('hide_comments_link_home')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="coolwp-fp09-post-comment coolwp-fp09-post-meta"><?php comments_popup_link( esc_attr__( 'Leave a comment', 'coolwp' ), esc_attr__( '1 Comment', 'coolwp' ), esc_attr__( '% Comments', 'coolwp' ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;



if ( ! function_exists( 'coolwp_style_4_cats' ) ) :
function coolwp_style_4_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'coolwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="coolwp-fp04-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'coolwp' ) . '</div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'coolwp_style_4_postmeta' ) ) :
function coolwp_style_4_postmeta() { ?>
    <?php if ( !(coolwp_get_option('hide_post_author_home')) || !(coolwp_get_option('hide_posted_date_home')) || !(coolwp_get_option('hide_comments_link_home')) ) { ?>
    <div class="coolwp-fp04-post-footer">
    <?php if ( !(coolwp_get_option('hide_post_author_home')) ) { ?><span class="coolwp-fp04-post-author coolwp-fp04-post-meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(coolwp_get_option('hide_posted_date_home')) ) { ?><span class="coolwp-fp04-post-date coolwp-fp04-post-meta"><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(coolwp_get_option('hide_comments_link_home')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="coolwp-fp04-post-comment coolwp-fp04-post-meta"><?php comments_popup_link( esc_attr__( 'Leave a comment', 'coolwp' ), esc_attr__( '1 Comment', 'coolwp' ), esc_attr__( '% Comments', 'coolwp' ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'coolwp_single_cats' ) ) :
function coolwp_single_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( ', ', 'coolwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="coolwp-entry-meta-single coolwp-entry-meta-single-top"><span class="coolwp-entry-meta-single-cats"><i class="fa fa-folder-open-o"></i>&nbsp;' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'coolwp' ) . '</span></div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'coolwp_single_postmeta' ) ) :
function coolwp_single_postmeta() { ?>
    <?php if ( !(coolwp_get_option('hide_post_author')) || !(coolwp_get_option('hide_posted_date')) || !(coolwp_get_option('hide_comments_link')) || !(coolwp_get_option('hide_post_edit')) ) { ?>
    <div class="coolwp-entry-meta-single">
    <?php if ( !(coolwp_get_option('hide_post_author')) ) { ?><span class="coolwp-entry-meta-single-author"><i class="fa fa-user-circle-o"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(coolwp_get_option('hide_posted_date')) ) { ?><span class="coolwp-entry-meta-single-date"><i class="fa fa-clock-o"></i>&nbsp;<?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(coolwp_get_option('hide_comments_link')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="coolwp-entry-meta-single-comments"><i class="fa fa-comments-o"></i>&nbsp;<?php comments_popup_link( esc_attr__( 'Leave a comment', 'coolwp' ), esc_attr__( '1 Comment', 'coolwp' ), esc_attr__( '% Comments', 'coolwp' ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(coolwp_get_option('hide_post_edit')) ) { ?><?php edit_post_link( esc_html__( 'Edit', 'coolwp' ), '<span class="edit-link">&nbsp;&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i> ', '</span>' ); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;