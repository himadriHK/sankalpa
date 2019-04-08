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

<?php if ( !(coolwp_get_option('hide_posts_heading')) ) { ?>
<?php if(is_home() && !is_paged()) { ?>
<?php if ( coolwp_get_option('posts_heading') ) : ?>
<h1 class="coolwp-posts-heading"><span><?php echo esc_html( coolwp_get_option('posts_heading') ); ?></span></h1>
<?php else : ?>
<h1 class="coolwp-posts-heading"><span><?php esc_html_e( 'Recent Posts', 'coolwp' ); ?></span></h1>
<?php endif; ?>
<?php } ?>
<?php } ?>

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