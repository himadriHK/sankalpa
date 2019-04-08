<?php
/**
 * VioMag constants, functions and definitions
 *
 * @package VioMag
 */

$viomag_theme = wp_get_theme();
define( 'VIOMAG_NAME', $viomag_theme->get( 'Name' ) );
define( 'VIOMAG_VERSION', $viomag_theme->get( 'Version' ) );
define( 'VIOMAG_THEME_URI', $viomag_theme->get( 'ThemeURI' ) );
define( 'VIOMAG_AUTHOR_URI', $viomag_theme->get( 'AuthorURI' ) );
define( 'VIOMAG_TEMPLATE_PARTS', 'template-parts/' );

// Set up the content width value based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 625;
}

/**
 * VioMag setup.
 *
 * Sets up theme defaults and registers the various WordPress features that
 * VioMag supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links, custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since VioMag 1.0
 */

add_action( 'after_setup_theme', 'viomag_setup' );
function viomag_setup() {
	/*
	 * Makes VioMag available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on VioMag, use a find and replace
	 * to change 'viomag' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'viomag', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'  => __( 'Primary Menu', 'viomag' ),
		'social-1' => __( 'Social Menu (Top bar)', 'viomag' ),
	) );

	/*
	 * This theme supports custom background color and image,
	 * and here we also set up the default background color.
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff',
	) );

	// Custom logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 90,
		'width'       => 280,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	add_theme_support( 'title-tag' );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop.

	// Images size.
	add_image_size( 'viomag-excerpt-thumbnail', 240, 180, true );
	add_image_size( 'viomag-excerpt-thumbnail-rounded', 180, 180, true );
	add_image_size( 'viomag-recent-posts-thumbnail', 80, 60, true );
	add_image_size( 'viomag-thumbnail-4x3', 576, 432, true );
	add_image_size( 'viomag-thumbnail-3x2', 576, 384, true );
	add_image_size( 'viomag-thumbnail-5x3', 576, 346, true );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}

/**
 * Add support for a custom header image.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Return the Google font stylesheet URL if available.
 *
 * The use of Open Sans by default is localized. For languages that use
 * characters not supported by the font, the font can be disabled.
 *
 * @since VioMag 1.0
 *
 * @return string Font stylesheet or empty string if disabled.
 */
function viomag_get_font_url() {
	$font_url = '';

	/**
	 * Translators: If there are characters in your language that are not supported
	 * by Open Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'viomag' ) ) {
		$subsets = 'latin,latin-ext';

		/**
		 * Translators: To add an additional Open Sans character subset specific to your language,
		 * translate this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language.
		 */
		$subset = _x( 'no-subset', 'Open Sans font: add new subset (greek, cyrillic, vietnamese)', 'viomag' );

		if ( 'cyrillic' === $subset ) {
			$subsets .= ',cyrillic,cyrillic-ext';
		} elseif ( 'greek' === $subset ) {
			$subsets .= ',greek,greek-ext';
		} elseif ( 'vietnamese' === $subset ) {
			$subsets .= ',vietnamese';
		}

		$fuente = str_replace( ' ', '+', get_theme_mod( 'viomag_fonts', 'Open Sans' ) );

		$query_args = array(
			'family' => $fuente . ':400italic,700italic,400,700',
			'subset' => $subsets,
		);

		$font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $font_url;
}

/**
 * Enqueue scripts and styles for front-end.
 *
 * @since VioMag 1.0
 */

add_action( 'wp_enqueue_scripts', 'viomag_scripts_styles' );
function viomag_scripts_styles() {
	global $wp_styles;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Adds JavaScript for handling the navigation menu hide-and-show behavior.
	wp_enqueue_script( 'viomag-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20140711', true );

	$font_url = viomag_get_font_url();
	if ( ! empty( $font_url ) ) {
		wp_enqueue_style( 'viomag-fonts', esc_url_raw( $font_url ), array(), null );
	}

	// Loads our main stylesheet.
	wp_enqueue_style( 'viomag-style', get_stylesheet_uri(), '', VIOMAG_VERSION );

	// Mag front page sytle.
	wp_enqueue_style( 'viomag-widgets-fp-styles', get_template_directory_uri() . '/css/widgets-fp-styles.css', '', VIOMAG_VERSION );

	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'viomag-ie', get_template_directory_uri() . '/css/ie.css', array( 'viomag-style' ), '20121010' );
	$wp_styles->add_data( 'viomag-ie', 'conditional', 'lt IE 9' );

	// Dashicons.
	wp_enqueue_style( 'dashicons' );

	// Font Awesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome-4.7.0/css/font-awesome.min.css' );

	// VioMag scripts.
	wp_enqueue_script( 'viomag-scripts-functions', get_template_directory_uri() . '/js/viomag-scripts-functions.js', array( 'jquery' ), VIOMAG_VERSION, true );

}

/**
 * Add preconnect for Google Fonts.
 *
 * @since VioMag 1.0.0
 *
 * @param  array  $urls URLs to print for resource hints.
 * @param  string $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function viomag_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'viomag-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '>=' ) ) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		} else {
			$urls[] = 'https://fonts.gstatic.com';
		}
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'viomag_resource_hints', 10, 2 );

/**
 * Filter TinyMCE CSS path to include Google Fonts.
 *
 * Adds additional stylesheets to the TinyMCE editor if needed.
 *
 * @uses viomag_get_font_url() To get the Google Font stylesheet URL.
 *
 * @since VioMag 1.0
 *
 * @param string $mce_css CSS path to load in TinyMCE.
 * @return string Filtered CSS path.
 */

add_filter( 'mce_css', 'viomag_mce_css' );
function viomag_mce_css( $mce_css ) {
	$font_url = viomag_get_font_url();

	if ( empty( $font_url ) ) {
		return $mce_css;
	}

	if ( ! empty( $mce_css ) ) {
		$mce_css .= ',';
	}

	$mce_css .= esc_url_raw( str_replace( ',', '%2C', $font_url ) );

	return $mce_css;
}

/**
 * Filter the page menu arguments.
 *
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since VioMag 1.0
 */
add_filter( 'wp_page_menu_args', 'viomag_page_menu_args' );
function viomag_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) ) {
		$args['show_home'] = true;
	}

	return $args;
}

/**
 * Register sidebars.
 *
 * Registers our main widget area and the front page widget areas.
 *
 * @since VioMag 1.0
 */

add_action( 'widgets_init', 'viomag_widgets_init' );
function viomag_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'viomag' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears on posts and pages except Full-width Page Template', 'viomag' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span class="widget-title-tab">',
		'after_title'   => '</span></h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Site Header', 'viomag' ),
		'id'            => 'viomag-sidebar-header',
		'description'   => __( 'Appears inside the site header, at right. You can use it to show Google AdSense ad.', 'viomag' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p>',
		'after_title'   => '</p>',
	) );

	register_sidebar( array(
		'name'          => __( 'Mag Front Page: Below Header', 'viomag' ),
		'id'            => 'viomag-sidebar-fp-mag-below-header',
		'description'   => __( 'Appears on (VioMag) Magazine Front Page template only. Use the "(VM) 5 Posts - Style 1" widget in this widget area.', 'viomag' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Mag Front Page: Main Content', 'viomag' ),
		'id'            => 'viomag-sidebar-fp-mag-content',
		'description'   => __( 'Appears on (VioMag) Magazine Front Page template only. Use the (VM Mag) widgets to customize the content of your site front page.', 'viomag' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar(array(
		'name'          => __( 'Below Post Title', 'viomag' ),
		'description'   => __( 'Appears below posts title', 'viomag' ),
		'id'            => 'viomag-sidebar-below-title',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	));

	register_sidebar(array(
		'name'          => __( 'Below Post Content', 'viomag' ),
		'description'   => __( 'Appears at the end of posts content', 'viomag' ),
		'id'            => 'viomag-sidebar-below-content',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	));

	register_sidebar(array(
		'name'          => __( 'Footer 1', 'viomag' ),
		'description'   => __( 'Appears in footer', 'viomag' ),
		'id'            => 'viomag-sidebar-footer-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => __( 'Footer 2', 'viomag' ),
		'description'   => __( 'Appears in footer', 'viomag' ),
		'id'            => 'viomag-sidebar-footer-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => __( 'Footer 3', 'viomag' ),
		'description'   => __( 'Appears in footer', 'viomag' ),
		'id'            => 'viomag-sidebar-footer-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => __( 'Footer 4', 'viomag' ),
		'description'   => __( 'Appears in footer', 'viomag' ),
		'id'            => 'viomag-sidebar-footer-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
}

if ( ! function_exists( 'viomag_the_posts_pagination' ) ) {
	function viomag_the_posts_pagination() {

		echo '<div class="posts-pagination-wrapper">';
		the_posts_pagination(array(
			'mid_size'  => 2,
			'prev_text' => __( '&laquo; Previous', 'viomag' ),
			'next_text' => __( 'Next &raquo;', 'viomag' ),
		));
		echo '</div>';

	}
}

if ( ! function_exists( 'viomag_comment' ) ) :
	/**
	 * Template for comments and pingbacks.
	 *
	 * To override this walker in a child theme without modifying the comments template
	 * simply create your own viomag_comment(), and that function will be used instead.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 *
	 * @since VioMag 1.0
	 */
	function viomag_comment( $comment, $args, $depth ) {
		// $GLOBALS[ 'comment' ] = $comment.
		switch ( $comment->comment_type ) :
			case 'pingback':
			case 'trackback':
				// Display trackbacks differently than normal comments.
		?>
		<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
			<p><?php esc_attr_e( 'Pingback:', 'viomag' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'viomag' ), '<span class="edit-link">', '</span>' ); ?></p>
		<?php
				break;
			default:
				// Proceed with normal comments.
				global $post;
		?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<article id="comment-<?php comment_ID(); ?>" class="comment">
				<header class="comment-meta comment-author vcard">
					<?php
						echo get_avatar( $comment, 44 );
						printf( '<cite><b class="fn">%1$s</b> %2$s</cite>',
							get_comment_author_link(),
							// If current post author is also comment author, make it known visually.
							( $comment->user_id === $post->post_author ) ? '<span>' . esc_html( __( 'Post author', 'viomag' ) ) . '</span>' : ''
						);
						printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
							esc_url( get_comment_link( $comment->comment_ID ) ),
							get_comment_time( 'c' ),
							/* translators: 1: date, 2: time */
							sprintf( __( '%1$s at %2$s', 'viomag' ), get_comment_date(), get_comment_time() )
						);
					?>
				</header><!-- .comment-meta -->

				<?php if ( '0' === $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation"><?php esc_attr_e( 'Your comment is awaiting moderation.', 'viomag' ); ?></p>
				<?php endif; ?>

				<section class="comment-content comment">
					<?php comment_text(); ?>
					<?php edit_comment_link( __( 'Edit', 'viomag' ), '<p class="edit-link">', '</p>' ); ?>
				</section><!-- .comment-content -->

				<div class="reply">
					<?php
					comment_reply_link( array_merge( $args,
						array(
							'reply_text' => __( 'Reply', 'viomag' ),
							'after'      => ' <span>&darr;</span>',
							'depth'      => $depth,
							'max_depth'  => $args['max_depth'],
						)
					));
					?>
				</div><!-- .reply -->
			</article><!-- #comment-## -->
		<?php
				break;
		endswitch; // end comment_type check.
	}
endif;

/**
 * Extend the default WordPress body classes.
 *
 * Extends the default WordPress body class to denote:
 * 1. Using a full-width layout, when no active widgets in the sidebar
 *    or full-width template.
 * 2. Front Page template: thumbnail in use and number of sidebars for
 *    widget areas.
 * 3. White or empty background color to change the layout and spacing.
 * 4. Custom fonts enabled.
 * 5. Single or multiple authors.
 *
 * @since VioMag 1.0
 *
 * @param array $classes Existing class values.
 * @return array Filtered class values.
 */
function viomag_body_class( $classes ) {
	$background_color = get_background_color();
	$background_image = get_background_image();

	if ( ! is_active_sidebar( 'sidebar-1' ) || is_page_template( 'page-templates/full-width.php' ) ) {
		$classes[] = 'full-width';
	}

	if ( empty( $background_image ) ) {
		if ( empty( $background_color ) ) {
			$classes[] = 'custom-background-empty';
		} elseif ( in_array( $background_color, array( 'fff', 'ffffff' ) ) ) {
			$classes[] = 'custom-background-white';
		}
	}

	// Enable custom font class only if the font CSS is queued to load.
	if ( wp_style_is( 'viomag-fonts', 'queue' ) ) {
		$classes[] = 'custom-font-enabled';
	}

	if ( ! is_multi_author() ) {
		$classes[] = 'single-author';
	}

	return $classes;
}
add_filter( 'body_class', 'viomag_body_class' );

/**
 * Adjust content width in certain contexts.
 *
 * Adjusts content_width value for full-width and single image attachment
 * templates, and when there are no active widgets in the sidebar.
 *
 * @since VioMag 1.0
 */
function viomag_content_width() {
	if ( is_page_template( 'page-templates/full-width.php' ) || is_attachment() || ! is_active_sidebar( 'sidebar-1' ) ) {
		global $content_width;
		$content_width = 960;
	}
}
add_action( 'template_redirect', 'viomag_content_width' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since VioMag 1.1.7
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
if ( ! function_exists( 'viomag_widget_tag_cloud_args' ) ) :
	function viomag_widget_tag_cloud_args( $args ) {
		$args['largest']  = 22;
		$args['smallest'] = 8;
		$args['unit']     = 'pt';
		$args['format']   = 'flat';

		return $args;
	}
endif;
add_filter( 'widget_tag_cloud_args', 'viomag_widget_tag_cloud_args' );

/**
 * Excerpt
 */

// Excerpt lenght.
add_filter( 'excerpt_length', 'viomag_excerpt_length', 999 );
function viomag_excerpt_length( $length ) {
	return 30;
}

// Excerpt more.
add_filter( 'excerpt_more', 'viomag_excerpt_more' );
function viomag_excerpt_more( $more ) {
	global $post;
	return '... <a class="read-more-link" href="' . esc_url( get_permalink( $post->ID ) ) . '">' . __( 'Read more', 'viomag' ) . ' &raquo;</a>';
}

/**
 * hAtom.
 */

// hAtom autor.
function viomag_entry_author( $display = 1 ) {

	$author     = get_the_author();
	$author_url = esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );

	$author_string = "<span class='author vcard'><a class='fn' rel='author' href='$author_url'>$author</a></span>";

	if ( 1 !== $display ) {
		return $author_string;
	}

	echo wp_kses_post( $author_string );

}

// hAtom fechas.
function viomag_entry_date( $display = 1 ) {

	$published_long = esc_attr( get_the_date( 'c' ) );
	$published      = get_the_date();
	$updated_long   = esc_attr( get_the_modified_date( 'c' ) );
	$updated        = get_the_modified_date();

	$time_string = "<time class='entry-date published' datetime='$published_long'>$published</time> <time class='updated' style='display:none;' datetime='$updated_long'>$updated</time>";

	if ( 1 !== $display ) {
		return $time_string;
	}

	echo $time_string;

}

function viomag_entry_info_fp() {

	$sep1          = '&nbsp;';
	$sep2          = '&nbsp;&nbsp;&nbsp;';
	$post_author   = '<i class="fa fa-user"></i>' . $sep1 . viomag_entry_author( 0 );
	$post_date     = $sep2 . '<i class="fa fa-calendar-o"></i>' . $sep1 . viomag_entry_date( 0 );
	$comments_icon = '<i class="fa fa-comment"></i>';

	echo $post_author . $post_date;

	if ( comments_open() ) {
		comments_popup_link( '', $sep2 . $comments_icon . ' 1', $sep2 . $comments_icon . ' %' );
	}
}

if ( is_admin() ) {
	add_filter( 'admin_post_thumbnail_html', 'viomag_pro_featured_image_notice', 10, 2 );
}
function viomag_pro_featured_image_notice( $content, $post_id ) {

	$notice = __( '<strong>VioMag Notice:</strong> In order for images to be displayed correctly in widgets, featured images must have a minimum size of 576x432 pixels.', 'viomag' );

	return $content .= $notice;
}

add_action( 'customize_controls_enqueue_scripts', 'viomag_customizer_styles' );
function viomag_customizer_styles() {
	wp_enqueue_style( 'viomag-customizer-styles', get_stylesheet_directory_uri() . '/css/customizer-styles.css' );
}

// Includes.
require_once get_template_directory() . '/inc/viomag-lite-customization.php';
require_once get_template_directory() . '/inc/viomag-lite-customizer.php';
require_once get_template_directory() . '/inc/viomag-mag-widget-5-posts-st1.php';
require_once get_template_directory() . '/inc/viomag-mag-widget-5-posts-st2.php';
require_once get_template_directory() . '/inc/viomag-mag-widget-3-posts.php';
require_once get_template_directory() . '/inc/viomag-mag-widget-cols-cats.php';
