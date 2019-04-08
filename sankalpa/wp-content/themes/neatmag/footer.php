<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package NeatMag WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

</div><!--/#neatmag-content-wrapper -->
</div><!--/#neatmag-wrapper -->

<?php if ( (neatmag_get_option('show_footer_social_buttons')) ) { ?>
<div class="neatmag-social-icons clearfix">
<div class="neatmag-social-icons-inner clearfix">
<div class='neatmag-container clearfix'>
    <?php if ( neatmag_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('twitterlink') ); ?>" target="_blank" class="neatmag-social-icon-twitter" title="<?php esc_attr_e('Twitter','neatmag'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('facebooklink') ); ?>" target="_blank" class="neatmag-social-icon-facebook" title="<?php esc_attr_e('Facebook','neatmag'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('googlelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('googlelink') ); ?>" target="_blank" class="neatmag-social-icon-google-plus" title="<?php esc_attr_e('Google Plus','neatmag'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('pinterestlink') ); ?>" target="_blank" class="neatmag-social-icon-pinterest" title="<?php esc_attr_e('Pinterest','neatmag'); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('linkedinlink') ); ?>" target="_blank" class="neatmag-social-icon-linkedin" title="<?php esc_attr_e('Linkedin','neatmag'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('instagramlink') ); ?>" target="_blank" class="neatmag-social-icon-instagram" title="<?php esc_attr_e('Instagram','neatmag'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('vklink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('vklink') ); ?>" target="_blank" class="neatmag-social-icon-vk" title="<?php esc_attr_e('VK','neatmag'); ?>"><i class="fa fa-vk" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('flickrlink') ); ?>" target="_blank" class="neatmag-social-icon-flickr" title="<?php esc_attr_e('Flickr','neatmag'); ?>"><i class="fa fa-flickr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('youtubelink') ); ?>" target="_blank" class="neatmag-social-icon-youtube" title="<?php esc_attr_e('Youtube','neatmag'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('vimeolink') ); ?>" target="_blank" class="neatmag-social-icon-vimeo" title="<?php esc_attr_e('Vimeo','neatmag'); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('soundcloudlink') ); ?>" target="_blank" class="neatmag-social-icon-soundcloud" title="<?php esc_attr_e('SoundCloud','neatmag'); ?>"><i class="fa fa-soundcloud" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('lastfmlink') ); ?>" target="_blank" class="neatmag-social-icon-lastfm" title="<?php esc_attr_e('Lastfm','neatmag'); ?>"><i class="fa fa-lastfm" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('githublink') ); ?>" target="_blank" class="neatmag-social-icon-github" title="<?php esc_attr_e('Github','neatmag'); ?>"><i class="fa fa-github" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('bitbucketlink') ); ?>" target="_blank" class="neatmag-social-icon-bitbucket" title="<?php esc_attr_e('Bitbucket','neatmag'); ?>"><i class="fa fa-bitbucket" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('tumblrlink') ); ?>" target="_blank" class="neatmag-social-icon-tumblr" title="<?php esc_attr_e('Tumblr','neatmag'); ?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('digglink') ); ?>" target="_blank" class="neatmag-social-icon-digg" title="<?php esc_attr_e('Digg','neatmag'); ?>"><i class="fa fa-digg" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('deliciouslink') ); ?>" target="_blank" class="neatmag-social-icon-delicious" title="<?php esc_attr_e('Delicious','neatmag'); ?>"><i class="fa fa-delicious" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('stumblelink') ); ?>" target="_blank" class="neatmag-social-icon-stumbleupon" title="<?php esc_attr_e('Stumbleupon','neatmag'); ?>"><i class="fa fa-stumbleupon" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('redditlink') ); ?>" target="_blank" class="neatmag-social-icon-reddit" title="<?php esc_attr_e('Reddit','neatmag'); ?>"><i class="fa fa-reddit" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('dribbblelink') ); ?>" target="_blank" class="neatmag-social-icon-dribbble" title="<?php esc_attr_e('Dribbble','neatmag'); ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('behancelink') ); ?>" target="_blank" class="neatmag-social-icon-behance" title="<?php esc_attr_e('Behance','neatmag'); ?>"><i class="fa fa-behance" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('codepenlink') ); ?>" target="_blank" class="neatmag-social-icon-codepen" title="<?php esc_attr_e('Codepen','neatmag'); ?>"><i class="fa fa-codepen" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('jsfiddlelink') ); ?>" target="_blank" class="neatmag-social-icon-jsfiddle" title="<?php esc_attr_e('JSFiddle','neatmag'); ?>"><i class="fa fa-jsfiddle" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('stackoverflowlink') ); ?>" target="_blank" class="neatmag-social-icon-stackoverflow" title="<?php esc_attr_e('Stack Overflow','neatmag'); ?>"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('stackexchangelink') ); ?>" target="_blank" class="neatmag-social-icon-stackexchange" title="<?php esc_attr_e('Stack Exchange','neatmag'); ?>"><i class="fa fa-stack-exchange" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('bsalink') ); ?>" target="_blank" class="neatmag-social-icon-buysellads" title="<?php esc_attr_e('BuySellAds','neatmag'); ?>"><i class="fa fa-buysellads" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('slidesharelink') ); ?>" target="_blank" class="neatmag-social-icon-slideshare" title="<?php esc_attr_e('SlideShare','neatmag'); ?>"><i class="fa fa-slideshare" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( neatmag_get_option('skypeusername') ); ?>?chat" class="neatmag-social-icon-skype" title="<?php esc_attr_e('Skype','neatmag'); ?>"><i class="fa fa-skype" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( neatmag_get_option('emailaddress') ); ?>" class="neatmag-social-icon-email" title="<?php esc_attr_e('Email Us','neatmag'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( neatmag_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( neatmag_get_option('rsslink') ); ?>" target="_blank" class="neatmag-social-icon-rss" title="<?php esc_attr_e('RSS','neatmag'); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a><?php endif; ?>
</div>
</div>
</div>
<?php } ?>


<?php if ( !(neatmag_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'neatmag-footer-1' ) || is_active_sidebar( 'neatmag-footer-2' ) || is_active_sidebar( 'neatmag-footer-3' ) || is_active_sidebar( 'neatmag-footer-4' ) ) : ?>
<div class='clearfix' id='neatmag-footer-blocks' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='neatmag-container clearfix'>

<div class='neatmag-footer-block-1'>
<?php dynamic_sidebar( 'neatmag-footer-1' ); ?>
</div>

<div class='neatmag-footer-block-2'>
<?php dynamic_sidebar( 'neatmag-footer-2' ); ?>
</div>

<div class='neatmag-footer-block-3'>
<?php dynamic_sidebar( 'neatmag-footer-3' ); ?>
</div>

<div class='neatmag-footer-block-4'>
<?php dynamic_sidebar( 'neatmag-footer-4' ); ?>
</div>

</div>
</div><!--/#neatmag-footer-blocks-->
<?php endif; ?>
<?php } ?>


<div class='clearfix' id='neatmag-footer'>
<div class='neatmag-foot-wrap neatmag-container'>
<?php if ( neatmag_get_option('footer_text') ) : ?>
  <p class='neatmag-copyright'><?php echo esc_html(neatmag_get_option('footer_text')); ?></p>
<?php else : ?>
  <p class='neatmag-copyright'><?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'neatmag' ), esc_html(date_i18n(__('Y','neatmag'))) . ' ' . esc_html(get_bloginfo( 'name' ))  ); ?></p>
<?php endif; ?>
<p class='neatmag-credit'><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'neatmag' ), 'ThemesDNA.com' ); ?></a></p>
</div>
</div><!--/#neatmag-footer -->

</div>
</div>

<?php wp_footer(); ?>
</body>
</html>