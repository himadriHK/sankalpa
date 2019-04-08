<?php
/**
* Slider
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'coolwp_slider' ) ) :

function coolwp_slider() { ?>
<div class="coolwp-posts-carousel-wrapper">
<div class="coolwp-outer-wrapper">

    <?php
    $slider_length = 5;
    if ( coolwp_get_option('slider_length') ) {
        $slider_length = coolwp_get_option('slider_length');
    }

    $slider_post_type = 'recent-posts';
    if ( coolwp_get_option('slider_post_type') ) {
        $slider_post_type = coolwp_get_option('slider_post_type');
    }

    $slider_cat = coolwp_get_option('slider_cat');

    if(($slider_post_type === 'category-posts') && $slider_cat) {
        $slider_query = new WP_Query("orderby=date&showposts=".$slider_length."&nopaging=0&post_status=publish&ignore_sticky_posts=1&post_type=post&cat=$slider_cat");
    } else {
        $slider_query = new WP_Query("orderby=date&showposts=".$slider_length."&nopaging=0&post_status=publish&ignore_sticky_posts=1&post_type=post");
    }

    if ($slider_query->have_posts()) : ?>

    <div class="coolwp-posts-carousel">
    <div class="owl-carousel">
    <?php while ($slider_query->have_posts()) : $slider_query->the_post();  ?>
    <div class="coolwp-slide-item">
        <?php if(has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('coolwp-medium-image', array('class' => 'coolwp-fp07-post-thumbnail-img', 'title' => get_the_title())); ?>
        <?php } else { ?>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-4-3.jpg' ); ?>" class="coolwp-fp07-post-thumbnail-img"/>
        <?php } ?>
        <div class="text-over"><h4 class="coolwp-carousel-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'coolwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_title(); ?></a></h4></div>
    </div>
    <?php endwhile; ?>
    </div>
    </div>

    <?php wp_reset_postdata();  // Restore global post data stomped by the_post().
    endif; ?>

</div>
</div>
<?php }

endif;