<?php
/**
* Template part for displaying page content in page.php.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('coolwp-post-singular coolwp-box'); ?>>

    <header class="entry-header">
        <?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content clearfix">
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
             ) );
             ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php edit_post_link( esc_html__( 'Edit', 'coolwp' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-footer -->
        
</article>