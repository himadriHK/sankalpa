<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div id="post-<?php the_ID(); ?>" class="coolwp-fp09-post">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(coolwp_get_option('hide_thumbnail')) ) { ?>
    <div class="coolwp-fp09-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'coolwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('coolwp-featured-image', array('class' => 'coolwp-fp09-post-thumbnail-img')); ?></a>
    </div>
    <?php } ?>
    <?php } ?>

    <?php if((has_post_thumbnail()) && !(coolwp_get_option('hide_thumbnail'))) { ?><div class="coolwp-fp09-post-details"><?php } ?>
    <?php if(!(has_post_thumbnail()) || (coolwp_get_option('hide_thumbnail'))) { ?><div class="coolwp-fp09-post-details-full"><?php } ?>

    <?php if ( !(coolwp_get_option('hide_post_categories_home')) ) { ?><?php coolwp_style_9_cats(); ?><?php } ?>

    <?php the_title( sprintf( '<h3 class="coolwp-fp09-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <?php coolwp_style_9_postmeta(); ?>

    <div class="coolwp-fp09-post-snippet clearfix">
    <?php
    the_content( sprintf(
        wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'coolwp' ),
            array(
                'span' => array(
                    'class' => array(),
                ),
            )
        ),
        get_the_title()
    ) );

    wp_link_pages( array(
     'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'coolwp' ) . '</span>',
     'after'       => '</div>',
     'link_before' => '<span>',
     'link_after'  => '</span>',
     'separator'   => '',
     ) );
    ?>
    </div>

    <?php if ( !(coolwp_get_option('hide_post_tags_home')) ) { ?>
    <footer class="coolwp-fp09-post-footer">
        <?php if ( !(coolwp_get_option('hide_post_tags_home')) ) { ?><?php coolwp_post_tags(); ?><?php } ?>
    </footer>
    <?php } ?>

    <?php if(!(has_post_thumbnail()) || (coolwp_get_option('hide_thumbnail'))) { ?></div><?php } ?>
    <?php if((has_post_thumbnail()) && !(coolwp_get_option('hide_thumbnail'))) { ?></div><?php } ?>

</div>