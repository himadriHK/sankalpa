<?php
/**
 * This file adds CSS (Customizer options).
 *
 * @package VioMag
 */

add_action( 'wp_enqueue_scripts', 'viomag_customization', 11 );
/**
 * Output CSS (Customizer options).
 *
 * @since 1.0.0
 */
function viomag_customization() {

	$color      = esc_html( get_theme_mod( 'viomag_color_tema', '#0073AA' ) );
	$fuente_aux = esc_html( get_theme_mod( 'viomag_fonts', 'Open Sans' ) );

	$fuente = "body.custom-font-enabled {font-family: '$fuente_aux', Arial, Verdana;}";

	$top_bar_white = ( get_theme_mod( 'viomag_top_bar_white', 1 ) == 1 ) ?
	".top-bar {background-color: #ffffff;color:#333333; border-bottom: 1px solid #f2f2f2;}
	.top-bar a{color: $color;}
	ul.social-links-menu li, .toggle-search {border-left:1px solid #f2f2f2;}" : '';

	$color_widget_title = ( get_theme_mod( 'viomag_color_widget_title', 1 ) == 1 ) ?
	".widget-title-tab, .mag-widget-widget-title{background-color:$color; color:#fff;}
	.widget-title-tab a.rsswidget{color:#fff !important;}
	h3.widget-title, h2.widget-title { border-bottom:2px solid $color;}" : '';

	$excerpt_title_color = ( get_theme_mod( 'viomag_color_excerpt_title', '' ) == 1 ) ?
	".entry-title a, entry-title a:visited {color:$color;}" : '';

	$thumbnail_rounded = ( get_theme_mod( 'viomag_thumbnail_rounded', '' ) == 1 ) ?
	'.wrapper-excerpt-thumbnail img {border-radius:50%;}' : '';

	$text_justify = ( get_theme_mod( 'viomag_text_justify', '' ) == 1 ) ?
	'.entry-content {text-align:justify;}' : '';

	$sidebar_position = ( get_theme_mod( 'viomag_sidebar_position', 'derecha' ) === 'derecha' ) ?
	'@media screen and (min-width: 768px) {
		#primary {float:left;}
		#secondary {float:right;}
		.site-content {
			border-left: none;
			padding-left:0;
			padding-right: 24px;
			padding-right:1.714285714285714rem;
		}

	}
	@media screen and (min-width: 960px) {
		.site-content {
			border-right: 1px solid #e0e0e0;
		}
	}' : '';

	$excerpt_border_color = ( get_theme_mod( 'viomag_color_excerpt_border', 1 ) == 1 ) ?
	".excerpt-wrapper{border-left:2px solid $color;}" : '';

	$menu_negro = ( get_theme_mod( 'viomag_fondo_menu_negro', 1 ) == 1 ) ?
	".main-navigation{background-color: #0f1721;}
	.main-navigation ul.nav-menu,
	.main-navigation div.nav-menu > ul {
		background-color:#0f1721;
	}
	.main-navigation li a {
		color:#DADADA;
	}
	.main-navigation li ul li a {
		background-color:#0f1721;
		color:#eaeaea;
	}
	.main-navigation li ul li a:hover {
		background-color:#0f1721;
		color:$color;
	}" : '';

	$menu_center = ( get_theme_mod( 'viomag_menu_center', '' ) === 1 ) ?
	'#site-navigation ul{text-align:center;}
	#site-navigation ul li ul{text-align:left;}' : '';

	$css = "$fuente $top_bar_white $color_widget_title $excerpt_title_color $thumbnail_rounded $text_justify $sidebar_position $excerpt_border_color $menu_negro $menu_center
	a {color: $color;}
	a:hover {color: $color;}
	.social-icon-wrapper a:hover {color: $color;}
	.toggle-search {color: $color;}
	.sub-title a:hover {color:$color;}
	.entry-content a:visited,.comment-content a:visited {color:$color;}
	button, input[type='submit'], input[type='button'], input[type='reset'] {background-color:$color !important;}
	.bypostauthor cite span {background-color:$color;}
	.entry-header .entry-title a:hover {color:$color ;}
	.archive-header {border-left-color:$color;}
	.main-navigation .current-menu-item > a,
	.main-navigation .current-menu-ancestor > a,
	.main-navigation .current_page_item > a,
	.main-navigation .current_page_ancestor > a {background-color: $color; color:#ffffff;}
	.main-navigation li a:hover {background-color: $color !important;color:#ffffff !important;}
	.nav-menu a.selected-menu-item{background-color: $color !important; color:#ffffff !important;}
	.widget-area .widget a:hover {
		color: $color !important;
	}
	footer[role='contentinfo'] a:hover {
		color: $color;
	}
	.author-info a {color: $color;}
	.entry-meta a:hover {
	color: $color;
	}
	.format-status .entry-header header a:hover {
		color: $color;
	}
	.comments-area article header a:hover {
		color: $color;
	}
	a.comment-reply-link:hover,
	a.comment-edit-link:hover {
		color: $color;
	}
	.currenttext, .paginacion a:hover {background-color:$color;}
	.aside{border-left-color:$color !important;}
	blockquote{border-left-color:$color;}
	.logo-header-wrapper{background-color:$color;}
	h3.cabeceras-fp {border-bottom-color:$color;}
	.encabezados-front-page {background-color:$color;}
	.icono-caja-destacados {color: $color;}
	.enlace-caja-destacados:hover {background-color: $color;}
	h2.comments-title {border-left-color:$color;}
	.sticky-post-label{background-color: $color;}
	.menu-line-top, .menu-line-bottom{border-color:$color;}
	.related-post-tab-cabecera{background-color:$color; color:#fff;}
	.related-posts-cabecera{border-bottom-color:$color;}
	#wp-calendar a{font-weight:bold; color: $color;}";

	wp_add_inline_style( 'viomag-widgets-fp-styles', $css );
}
