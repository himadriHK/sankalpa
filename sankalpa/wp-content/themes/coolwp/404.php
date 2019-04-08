<?php
/**
* The template for displaying 404 pages (not found).
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class='coolwp-main-wrapper clearfix' id='coolwp-main-wrapper' itemscope='itemscope' itemtype='http://schema.org/Blog' role='main'>
<div class='theiaStickySidebar'>
<div class="coolwp-main-wrapper-inside clearfix">

<div class='coolwp-posts-wrapper' id='coolwp-posts-wrapper'>

<div class='coolwp-posts coolwp-box'>

<header class="page-header">
    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can not be found.', 'coolwp' ); ?></h1>
</header><!-- .page-header -->

<div class='coolwp-posts-content'>

    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'coolwp' ); ?></p>

    <?php get_search_form(); ?>

    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
    
    <div>
        <h2><?php esc_html_e( 'Most Used Categories', 'coolwp' ); ?></h2>
        <ul>
        <?php
                wp_list_categories( array(
                        'orderby'    => 'count',
                        'order'      => 'DESC',
                        'show_count' => 1,
                        'title_li'   => '',
                        'number'     => 10,
                ) );
        ?>
        </ul>
    </div>

    <?php
        /* translators: %1$s: smiley */
        $coolwp_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'coolwp' ), convert_smilies( ':)' ) ) . '</p>';
        the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$coolwp_archive_content" );
    ?>

    <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

</div>

</div>

</div><!--/#coolwp-posts-wrapper -->

</div>
</div>
</div><!-- /#coolwp-main-wrapper -->

<?php get_footer(); ?>