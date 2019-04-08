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

<div id="post-<?php the_ID(); ?>" class="neatmag-list-post">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(neatmag_get_option('hide_thumbnail')) ) { ?>
    <div class="neatmag-list-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'neatmag' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('neatmag-medium-image', array('class' => 'neatmag-list-post-thumbnail-img')); ?></a>
    </div>
    <?php } ?>
    <?php } ?>

    <?php if((has_post_thumbnail()) && !(neatmag_get_option('hide_thumbnail'))) { ?><div class="neatmag-list-post-details"><?php } ?>
    <?php if(!(has_post_thumbnail()) || (neatmag_get_option('hide_thumbnail'))) { ?><div class="neatmag-list-post-details-full"><?php } ?>

    <?php if ( !(neatmag_get_option('hide_post_categories')) ) { ?><?php neatmag_list_cats(); ?><?php } ?>

    <?php the_title( sprintf( '<h3 class="neatmag-list-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <?php neatmag_list_postmeta(); ?>

    <?php if ( !(neatmag_get_option('hide_post_snippet')) ) { ?><div class="neatmag-list-post-snippet"><?php the_excerpt(); ?></div><?php } ?>

    <?php if ( !(neatmag_get_option('hide_read_more_button')) ) { ?><div class='neatmag-list-post-read-more'><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( neatmag_read_more_text() ); ?></a></div><?php } ?>

    <?php if(!(has_post_thumbnail()) || (neatmag_get_option('hide_thumbnail'))) { ?></div><?php } ?>
    <?php if((has_post_thumbnail()) && !(neatmag_get_option('hide_thumbnail'))) { ?></div><?php } ?>

</div>