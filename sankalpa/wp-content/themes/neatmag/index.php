<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
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

<?php if(is_home() && !is_paged()) { ?>
<div class="neatmag-featured-posts-area clearfix">
<?php dynamic_sidebar( 'neatmag-home-top-widgets' ); ?>
</div>
<?php } ?>

<div class="neatmag-featured-posts-area clearfix">
<?php dynamic_sidebar( 'neatmag-top-widgets' ); ?>
</div>

<div class="neatmag-posts-wrapper" id="neatmag-posts-wrapper">

<div class="neatmag-posts">

<?php if(is_home() && !is_paged()) { ?>
<?php if ( neatmag_get_option('posts_heading') ) : ?>
<h1 class="neatmag-posts-heading"><span><?php echo esc_html( neatmag_get_option('posts_heading') ); ?></span></h1>
<?php else : ?>
<h1 class="neatmag-posts-heading"><span><?php esc_html_e( 'Recent Posts', 'neatmag' ); ?></span></h1>
<?php endif; ?>
<?php } ?>

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

<?php if(is_home() && !is_paged()) { ?>
<div class='neatmag-featured-posts-area clearfix'>
<?php dynamic_sidebar( 'neatmag-home-bottom-widgets' ); ?>
</div>
<?php } ?>

<div class='neatmag-featured-posts-area clearfix'>
<?php dynamic_sidebar( 'neatmag-bottom-widgets' ); ?>
</div>

</div>
</div><!-- /#neatmag-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>