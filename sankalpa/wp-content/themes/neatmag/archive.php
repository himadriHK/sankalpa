<?php
/**
* The template for displaying archive pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package NeatMag WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="neatmag-main-wrapper clearfix" id="neatmag-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">

<div class="neatmag-featured-posts-area clearfix">
<?php dynamic_sidebar( 'neatmag-top-widgets' ); ?>
</div>

<div class="neatmag-posts-wrapper" id="neatmag-posts-wrapper">

<div class="neatmag-posts">

<header class="page-header">
<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
</header>

<div class="neatmag-posts-content">

<?php if (have_posts()) : ?>

    <div class="neatmag-posts-container">
    <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', neatmag_post_style() ); ?>

    <?php endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php neatmag_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>
</div>

</div><!--/#neatmag-posts-wrapper -->

<div class='neatmag-featured-posts-area clearfix'>
<?php dynamic_sidebar( 'neatmag-bottom-widgets' ); ?>
</div>

</div>
</div><!-- /#neatmag-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>