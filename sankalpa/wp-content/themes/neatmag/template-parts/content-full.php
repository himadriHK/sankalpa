<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package NeatMag WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div id="post-<?php the_ID(); ?>" class="neatmag-full-post">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(neatmag_get_option('hide_thumbnail')) ) { ?>
    <div class="neatmag-full-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'neatmag' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('neatmag-featured-image', array('class' => 'neatmag-full-post-thumbnail-img')); ?></a>
    </div>
    <?php } ?>
    <?php } ?>

    <?php if((has_post_thumbnail()) && !(neatmag_get_option('hide_thumbnail'))) { ?><div class="neatmag-full-post-details"><?php } ?>
    <?php if(!(has_post_thumbnail()) || (neatmag_get_option('hide_thumbnail'))) { ?><div class="neatmag-full-post-details-full"><?php } ?>

    <?php if ( !(neatmag_get_option('hide_post_categories')) ) { ?><?php neatmag_full_cats(); ?><?php } ?>

    <?php the_title( sprintf( '<h3 class="neatmag-full-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <?php neatmag_full_postmeta(); ?>

    <div class="neatmag-full-post-snippet clearfix">
    <?php
    the_content( sprintf(
        wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'neatmag' ),
            array(
                'span' => array(
                    'class' => array(),
                ),
            )
        ),
        get_the_title()
    ) );

    wp_link_pages( array(
     'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'neatmag' ) . '</span>',
     'after'       => '</div>',
     'link_before' => '<span>',
     'link_after'  => '</span>',
     'separator'   => '',
     ) );
    ?>
    </div>

    <footer class="neatmag-full-post-footer">
        <?php if ( !(neatmag_get_option('hide_post_tags')) ) { ?><?php neatmag_post_tags(); ?><?php } ?>
    </footer>

    <?php if(!(has_post_thumbnail()) || (neatmag_get_option('hide_thumbnail'))) { ?></div><?php } ?>
    <?php if((has_post_thumbnail()) && !(neatmag_get_option('hide_thumbnail'))) { ?></div><?php } ?>

</div>