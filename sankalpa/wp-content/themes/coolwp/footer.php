<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package CoolWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

</div>

</div><!--/#coolwp-content-wrapper -->
</div><!--/#coolwp-wrapper -->


<?php if ( !(coolwp_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'coolwp-footer-1' ) || is_active_sidebar( 'coolwp-footer-2' ) || is_active_sidebar( 'coolwp-footer-3' ) || is_active_sidebar( 'coolwp-footer-4' ) ) : ?>
<div class='clearfix' id='coolwp-footer-blocks' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='coolwp-container clearfix'>
<div class="coolwp-outer-wrapper">

<div class='coolwp-footer-block-1'>
<?php dynamic_sidebar( 'coolwp-footer-1' ); ?>
</div>

<div class='coolwp-footer-block-2'>
<?php dynamic_sidebar( 'coolwp-footer-2' ); ?>
</div>

<div class='coolwp-footer-block-3'>
<?php dynamic_sidebar( 'coolwp-footer-3' ); ?>
</div>

<div class='coolwp-footer-block-4'>
<?php dynamic_sidebar( 'coolwp-footer-4' ); ?>
</div>

</div>
</div>
</div><!--/#coolwp-footer-blocks-->
<?php endif; ?>
<?php } ?>


<div class='clearfix' id='coolwp-footer'>
<div class='coolwp-foot-wrap coolwp-container'>
<div class="coolwp-outer-wrapper">

<?php if ( coolwp_get_option('footer_text') ) : ?>
  <p class='coolwp-copyright'><?php echo esc_html(coolwp_get_option('footer_text')); ?></p>
<?php else : ?>
  <p class='coolwp-copyright'><?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'coolwp' ), esc_html(date_i18n(__('Y','coolwp'))) . ' ' . esc_html(get_bloginfo( 'name' ))  ); ?></p>
<?php endif; ?>
<p class='coolwp-credit'><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'coolwp' ), 'ThemesDNA.com' ); ?></a></p>

</div>
</div>
</div><!--/#coolwp-footer -->

<?php wp_footer(); ?>
</body>
</html>