<?php
/**
* The template for displaying archive pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="coolwp-main-wrapper clearfix" id="coolwp-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="coolwp-main-wrapper-inside clearfix">

<?php coolwp_top_widgets(); ?>

<div class="coolwp-posts-wrapper" id="coolwp-posts-wrapper">

<div class="coolwp-posts coolwp-box">

<header class="page-header">
<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
</header>

<div class="coolwp-posts-content">

<?php if (have_posts()) : ?>

    <div class="coolwp-posts-container">
    <?php $coolwp_total_posts = $wp_query->post_count; ?>
    <?php $coolwp_post_counter=1; while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', coolwp_post_style() ); ?>

    <?php $coolwp_post_counter++; endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php coolwp_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>
</div>

</div><!--/#coolwp-posts-wrapper -->

<?php coolwp_bottom_widgets(); ?>

</div>
</div>
</div><!-- /#coolwp-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>