<?php
/**
* The template for displaying full-width page.
*
* @package NeatMag WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*
* Template Name: Full Width, no sidebar
* Template Post Type: page
*/

get_header(); ?>

<div class="neatmag-main-wrapper clearfix" id="neatmag-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">

<div class="neatmag-featured-posts-area clearfix">
<?php dynamic_sidebar( 'neatmag-top-widgets' ); ?>
</div>

<div class="neatmag-posts-wrapper" id="neatmag-posts-wrapper">

<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php
    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
            comments_template();
    endif;
    ?>

<?php endwhile; ?>
<div class="clear"></div>

</div><!--/#neatmag-posts-wrapper -->

<div class='neatmag-featured-posts-area clearfix'>
<?php dynamic_sidebar( 'neatmag-bottom-widgets' ); ?>
</div>

</div>
</div><!-- /#neatmag-main-wrapper -->

<?php get_footer(); ?>