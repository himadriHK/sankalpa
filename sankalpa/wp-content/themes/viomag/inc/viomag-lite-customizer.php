<?php
/**
 * Register postMessage support.
 *
 * Add postMessage support for site title and description for the Customizer.
 *
 * @package VioMag
 * @param   WP_Customize_Manager $wp_customize Customizer object.
 */

add_action( 'customize_register', 'viomag_customize_register' );

function viomag_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}

// Enqueue Javascript postMessage handlers for the Customizer.
add_action( 'customize_preview_init', 'viomag_customize_preview_js' );
function viomag_customize_preview_js() {
	wp_enqueue_script( 'viomag-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20130301', true );
}

/**
 * Sanitize functions.
 */
function viomag_sanitize_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

function viomag_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return 1;
	} else {
		return '';
	}
}

function viomag_sanitize_social_icons_color( $input ) {
	$valid = array(
		'original_color' => 'Original color',
		'gray'           => 'Gray',
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

function viomag_sanitize_sidebar_position( $input ) {
	$valid = array(
		'izquierda' => 'Left',
		'derecha'   => 'Right',
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

function viomag_sanitize_menu_line( $input ) {
	$valid = array(
		'bottom' => 'Bottom',
		'top'    => 'Top',
		'none'   => 'None',
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

function viomag_sanitize_featured_image_in_post( $input ) {
	$valid = array(
		'not_show'         => 'Not show',
		'above_post_title' => 'Above post title',
		'below_post_title' => 'Below post title',
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

function viomag_sanitize_fonts( $input ) {
	$valid = array(
		'Open Sans'     => 'Open Sans',
		'Arimo'         => 'Arimo',
		'Asap'          => 'Asap',
		'Bitter'        => 'Bitter',
		'Overpass'      => 'Overpass',
		'Poppins'       => 'Poppins',
		'Raleway'       => 'Raleway',
		'Titillium Web' => 'Titillium Web',
		'Ubuntu'        => 'Ubuntu',
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

function viomag_sanitize_theme_color( $input ) {
	$valid = array(
		'#0073AA' => 'Blue',
		'#82A31D' => 'Green',
		'#FA4C00' => 'Orange',
		'#F882B3' => 'Pink',
		'#BA0000' => 'Red',
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

/** -------------------------------
 * VIOMAG CUSTOMIZER
**------------------------------*/

add_action( 'customize_register', 'viomag_theme_customizer' );

function viomag_theme_customizer( $wp_customize ) {

	class Viomag_Customize_Heading_Control extends WP_Customize_Control {

		public $type  = 'heading_1';
		public $color = 'blue';

		public function render_content() {
			if ( ! empty( $this->label ) ) {
				if ( $this->type == 'heading_1' ) {

					echo '<h3 class="viomag-heading-1-' . esc_attr( $this->color ) . '">' . esc_html( $this->label ) . '<h3>';

				} elseif ( $this->type == 'heading_2' ) { ?>

					<h3 class="viomag-heading-2">
						<?php echo esc_html( $this->label ); ?>
					</h3>
				<?php
				}
			} // !empty( $this->label )

			if ( ! empty( $this->description ) ) {
				?>
				<p class="customize-control-description"><?php echo wp_kses_post( $this->description ); ?></p>
				<?php
			}
		} // render_content
	} // Class Viomag_Customize_Heading_Control

	class Viomag_Text_Control extends WP_Customize_Control {

		public $control_text = '';

		public function render_content() {
		?>
			<?php if ( ! empty( $this->label ) ) { ?>
				<span class="customize-control-title">
					<?php echo esc_html( $this->label ); ?>
				</span>
			<?php } ?>

			<?php if ( ! empty( $this->description ) ) { ?>
				<span class="customize-control-description">
				<?php echo wp_kses_post( $this->description ); ?>
				</span>
			<?php } ?>

			<?php if ( ! empty( $this->control_text ) ) { ?>
				<span class="viomag-text-control-content">
				<?php echo wp_kses_post( $this->control_text ); ?>
				</span>
			<?php } ?>

			<?php
		}

	}

	/**
	 * PANEL CONFIGURACION GENERAL
	 * Secciones: Identidad del sitio, Colores, Fuentes, Barra superior, Imagen de fondo
	 */

	$wp_customize->add_panel( 'viomag_panel_general_settings',
		array(
			'title'    => __( 'General Settings', 'viomag' ),
			'priority' => 9,
		)
	);

	/**
	 * Static Front Page
	 */
	$wp_customize->get_section( 'static_front_page' )->panel    = 'viomag_panel_general_settings';
	$wp_customize->get_section( 'static_front_page' )->priority = 1;

	/**
	 * Site Logo/Icon/Title/Tagline
	 */

	$wp_customize->get_section( 'title_tagline' )->panel    = 'viomag_panel_general_settings';
	$wp_customize->get_section( 'title_tagline' )->title    = __( 'Site Logo/Icon/Title/Tagline', 'viomag' );
	$wp_customize->get_section( 'title_tagline' )->priority = 10;

	/**
	 * Colors
	 */

	$wp_customize->get_section( 'colors' )->panel    = 'viomag_panel_general_settings';
	$wp_customize->get_section( 'colors' )->priority = 11;

	// Theme color.
	$wp_customize->add_setting( 'viomag_color_tema', array(
		'default'           => '#0073AA',
		'sanitize_callback' => 'viomag_sanitize_theme_color',
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'viomag_color_tema',
			array(
				'label'    => __( 'Theme Primary Color', 'viomag' ),
				'section'  => 'colors',
				'settings' => 'viomag_color_tema',
				'type'     => 'select',
				'priority' => 1,
				'choices'  => array(
					'#0073AA' => __( 'Blue', 'viomag' ),
					'#82A31D' => __( 'Green', 'viomag' ),
					'#FA4C00' => __( 'Orange', 'viomag' ),
					'#F882B3' => __( 'Pink', 'viomag' ),
					'#BA0000' => __( 'Red', 'viomag' ),
				),
			)
		)
	);

	// Color excerpt title.
	$wp_customize->add_setting( 'viomag_color_excerpt_title', array(
		'default'           => '',
		'sanitize_callback' => 'viomag_sanitize_checkbox',
	) );
	$wp_customize->add_control('viomag_color_excerpt_title', array(
		'type'     => 'checkbox',
		'label'    => __( 'Apply to entry title in excerpts', 'viomag' ),
		'section'  => 'colors',
		'priority' => 2,
	));

	// Excerpt border.
	$wp_customize->add_setting( 'viomag_color_excerpt_border', array(
		'default'           => 1,
		'sanitize_callback' => 'viomag_sanitize_checkbox',
	));
	$wp_customize->add_control('viomag_color_excerpt_border', array(
		'type'     => 'checkbox',
		'label'    => __( 'Apply to the left border of extracts', 'viomag' ),
		'section'  => 'colors',
		'priority' => 3,
	));

	// Widgets title color.
	$wp_customize->add_setting( 'viomag_color_widget_title', array(
		'default'           => 1,
		'sanitize_callback' => 'viomag_sanitize_checkbox',
	));
	$wp_customize->add_control('viomag_color_widget_title', array(
		'type'        => 'checkbox',
		'label'       => __( 'Apply to widget title', 'viomag' ),
		'section'     => 'colors',
		'description' => __( '( Uncheck: Light gray )', 'viomag' ),
		'priority'    => 3,
	));

	/**
	 * Fuentes
	 */

	$wp_customize->add_section('viomag_fonts', array(
		'panel'    => 'viomag_panel_general_settings',
		'title'    => __( 'Fonts', 'viomag' ),
		'priority' => 12,
	));
	$wp_customize->add_setting( 'viomag_fonts', array(
		'default'           => 'Open Sans',
		'sanitize_callback' => 'viomag_sanitize_fonts',
	));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'viomag_fonts',
			array(
				'label'    => __( 'Select font', 'viomag' ),
				'section'  => 'viomag_fonts',
				'settings' => 'viomag_fonts',
				'type'     => 'select',
				'choices'  => array(
					'Open Sans'     => 'Open Sans',
					'Arimo'         => 'Arimo',
					'Asap'          => 'Asap',
					'Bitter'        => 'Bitter',
					'Overpass'      => 'Overpass',
					'Poppins'       => 'Poppins',
					'Raleway'       => 'Raleway',
					'Titillium Web' => 'Titillium Web',
					'Ubuntu'        => 'Ubuntu',
				),
			)
		)
	);

	/**
	 * Header image
	 */

	$wp_customize->get_section( 'header_image' )->panel    = 'viomag_panel_general_settings';
	$wp_customize->get_section( 'header_image' )->priority = 13;

	$header_image_description = $wp_customize->get_section( 'header_image' )->description;
	$add_description          = ' <strong>' . __( 'if you set Header Image, it will replace logo set in Site Logo option and Header widget area.', 'viomag' ) . '</strong>';
	$wp_customize->get_section( 'header_image' )->description = $header_image_description . $add_description;

	/**
	 * Background image
	 */

	$wp_customize->get_section( 'background_image' )->panel    = 'viomag_panel_general_settings';
	$wp_customize->get_section( 'background_image' )->priority = 14;

	/**
	 * PANEL FOOTER, CONTENT AND FOOTER
	 * * Secciones: Top bar, Main Menu, Content, Sidebar, Footer texts
	 */

	$wp_customize->add_panel( 'viomag_panel_header_content_footer', array(
		'title'    => __( 'Header, Content and Footer', 'viomag' ),
		'priority' => 10,
	));

	/**
	 * Top bar
	 */

	$wp_customize->add_section('viomag_top_bar', array(
		'panel'    => 'viomag_panel_header_content_footer',
		'title'    => __( 'Top bar', 'viomag' ),
		'priority' => 10,
	));

	// Display top bar.
	$wp_customize->add_setting('viomag_display_top_bar', array(
		'default'           => 1,
		'sanitize_callback' => 'viomag_sanitize_checkbox',
	));
	$wp_customize->add_control('viomag_display_top_bar', array(
		'type'    => 'checkbox',
		'label'   => __( 'Display top bar', 'viomag' ),
		'section' => 'viomag_top_bar',
	));

	// Top bar color.
	$wp_customize->add_setting( 'viomag_top_bar_white', array(
		'default'           => 1,
		'sanitize_callback' => 'viomag_sanitize_checkbox',
	));
	$wp_customize->add_control( 'viomag_top_bar_white', array(
		'type'    => 'checkbox',
		'label'   => __( 'White color (Uncheck: black)', 'viomag' ),
		'section' => 'viomag_top_bar',
	));

	// Palabra MENU.
	$wp_customize->add_setting( 'viomag_mostrar_menu_junto_icono', array(
		'default'           => '',
		'sanitize_callback' => 'viomag_sanitize_checkbox',
	));
	$wp_customize->add_control('viomag_mostrar_menu_junto_icono', array(
		'type'    => 'checkbox',
		'label'   => __( 'Show the word menu next to the icon menu on mobile devices.', 'viomag' ),
		'section' => 'viomag_top_bar',
	));

	// Custom text.
	$wp_customize->add_setting( 'viomag_top_bar_custom_text', array(
		'default'           => '',
		'sanitize_callback' => 'viomag_sanitize_text',
	));
	$wp_customize->add_control('viomag_top_bar_custom_text', array(
		'type'    => 'textarea',
		'label'   => __( 'Custom text (HTML allowed)', 'viomag' ),
		'section' => 'viomag_top_bar',
	));

	$wp_customize->add_setting('viomag_social_icons_color', array(
		'default'           => 'original_color',
		'sanitize_callback' => 'viomag_sanitize_social_icons_color',
	));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'viomag_social_icons_color',
			array(
				'label'    => __( 'Social icons color', 'viomag' ),
				'section'  => 'viomag_top_bar',
				'settings' => 'viomag_social_icons_color',
				'type'     => 'select',
				'choices'  => array(
					'original_color' => __( 'Original color', 'viomag' ),
					'gray'           => __( 'Gray', 'viomag' ),
				),
			)
		)
	);

	/**
	 * Main menu
	 */
	$wp_customize->add_section('viomag_main_menu', array(
		'panel' => 'viomag_panel_header_content_footer',
		'title' => __( 'Main Menu', 'viomag' ),
	));

	// Fondo de menu negro.
	$wp_customize->add_setting('viomag_fondo_menu_negro', array(
		'default'           => 1,
		'sanitize_callback' => 'viomag_sanitize_checkbox',
	));
	$wp_customize->add_control('viomag_fondo_menu_negro', array(
		'type'        => 'checkbox',
		'label'       => __( 'Black menu', 'viomag' ),
		'section'     => 'viomag_main_menu',
		'description' => __( '(Uncheck: Light gray)', 'viomag' ),
	));

	// Centered menu.
	$wp_customize->add_setting('viomag_menu_center', array(
		'default'           => '',
		'sanitize_callback' => 'viomag_sanitize_checkbox',
	));
	$wp_customize->add_control('viomag_menu_center', array(
		'type'    => 'checkbox',
		'label'   => __( 'Center menu', 'viomag' ),
		'section' => 'viomag_main_menu',
	));

	// Menu line.
	$wp_customize->add_setting('viomag_menu_line', array(
		'default'           => 'bottom',
		'sanitize_callback' => 'viomag_sanitize_menu_line',
	));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'viomag_menu_line',
			array(
				'label'    => __( 'Menu line', 'viomag' ),
				'section'  => 'viomag_main_menu',
				'settings' => 'viomag_menu_line',
				'type'     => 'select',
				'choices'  => array(
					'bottom' => __( 'Bottom', 'viomag' ),
					'top'    => __( 'Top', 'viomag' ),
					'none'   => __( 'None', 'viomag' ),
				),
			)
		)
	);

	/**
	 * Entradas
	 */

	$wp_customize->add_section('viomag_entradas', array(
		'panel' => 'viomag_panel_header_content_footer',
		'title' => __( 'Posts and Pages', 'viomag' ),
	));

	$wp_customize->add_setting('viomag_contenido_completo_entradas_pp', array(
		'default'           => '',
		'sanitize_callback' => 'viomag_sanitize_checkbox',
	));
	$wp_customize->add_control('viomag_contenido_completo_entradas_pp', array(
		'type'    => 'checkbox',
		'label'   => __( 'Show full content of the entries in the main page (If the main page is not set as a Magazine.)', 'viomag' ),
		'section' => 'viomag_entradas',
	));

	// Featured image in post.
	$wp_customize->add_setting('viomag_featured_image_in_post', array(
		'default'           => 'not_show',
		'sanitize_callback' => 'viomag_sanitize_featured_image_in_post',
	));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'viomag_featured_image_in_post',
			array(
				'label'    => __( 'Show featured image in posts', 'viomag' ),
				'section'  => 'viomag_entradas',
				'settings' => 'viomag_featured_image_in_post',
				'type'     => 'select',
				'choices'  => array(
					'not_show'         => __( 'Not show', 'viomag' ),
					'above_post_title' => __( 'Above post title', 'viomag' ),
					'below_post_title' => __( 'Below post title', 'viomag' ),
				),
			)
		)
	);

	$wp_customize->add_setting('viomag_thumbnail_rounded', array(
		'default'           => '',
		'sanitize_callback' => 'viomag_sanitize_checkbox',
	));
	$wp_customize->add_control('viomag_thumbnail_rounded', array(
		'type'    => 'checkbox',
		'label'   => __( "Excerpt's thumbnail image rounded", 'viomag' ),
		'section' => 'viomag_entradas',
	));

	$wp_customize->add_setting( 'viomag_show_meta_in_excerpts', array(
		'default'           => '',
		'sanitize_callback' => 'viomag_sanitize_checkbox',
	));
	$wp_customize->add_control('viomag_show_meta_in_excerpts', array(
		'type'    => 'checkbox',
		'label'   => __( 'Show metadata in excerpts (Author, date and number of comments)', 'viomag' ),
		'section' => 'viomag_entradas',
	));

	$wp_customize->add_setting('viomag_text_justify', array(
		'default'           => '',
		'sanitize_callback' => 'viomag_sanitize_checkbox',
	));
	$wp_customize->add_control('viomag_text_justify', array(
		'type'    => 'checkbox',
		'label'   => __( 'Entry text justified', 'viomag' ),
		'section' => 'viomag_entradas',
	));

	$wp_customize->add_setting( 'viomag_related_posts', array(
		'default'           => '',
		'sanitize_callback' => 'viomag_sanitize_checkbox',
	));
	$wp_customize->add_control('viomag_related_posts', array(
		'type'    => 'checkbox',
		'label'   => __( 'Display related posts at the end of entries (based on tags)', 'viomag' ),
		'section' => 'viomag_entradas',
	));

	$wp_customize->add_setting( 'viomag_related_posts_title', array(
		'default'           => __( 'Related posts...', 'viomag' ),
		'sanitize_callback' => 'viomag_sanitize_text',
	));
	$wp_customize->add_control('viomag_related_posts_title', array(
		'label'   => __( 'Related posts title', 'viomag' ),
		'section' => 'viomag_entradas',
		'type'    => 'text',
	));

	$wp_customize->add_setting('viomag_sticky_post_label', array(
		'default'           => __( 'Featured', 'viomag' ),
		'sanitize_callback' => 'viomag_sanitize_text',
	));
	$wp_customize->add_control('viomag_sticky_post_label', array(
		'label'   => __( 'Label for Sticky Posts', 'viomag' ),
		'section' => 'viomag_entradas',
		'type'    => 'text',
	));

	$wp_customize->add_setting('viomag_show_nav_single', array(
		'default'           => 1,
		'sanitize_callback' => 'viomag_sanitize_checkbox',
	));
	$wp_customize->add_control('viomag_show_nav_single', array(
		'type'    => 'checkbox',
		'label'   => __( 'Show navigation at the end of posts (links to previous and next posts)', 'viomag' ),
		'section' => 'viomag_entradas',
	));

	$wp_customize->add_setting('viomag_boton_ir_arriba', array(
		'default'           => 1,
		'sanitize_callback' => 'viomag_sanitize_checkbox',
	));
	$wp_customize->add_control('viomag_boton_ir_arriba', array(
		'type'    => 'checkbox',
		'label'   => __( "Display 'Back to top' button", 'viomag' ),
		'section' => 'viomag_entradas',
	));

	/**
	 * Sidebar
	 */

	$wp_customize->add_section('viomag_sidebar', array(
		'panel' => 'viomag_panel_header_content_footer',
		'title' => __( 'Sidebar', 'viomag' ),
	));

	// Sidebar.
	$wp_customize->add_setting('viomag_sidebar_position', array(
		'default'           => 'derecha',
		'sanitize_callback' => 'viomag_sanitize_sidebar_position',
	));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'viomag_sidebar_position',
			array(
				'label'    => __( 'Select sidebar position', 'viomag' ),
				'section'  => 'viomag_sidebar',
				'settings' => 'viomag_sidebar_position',
				'type'     => 'radio',
				'choices'  => array(
					'izquierda' => __( 'Left', 'viomag' ),
					'derecha'   => __( 'Right', 'viomag' ),
				),
			)
		)
	);

	/**
	 * Textos del pie
	 */
	$wp_customize->add_section('viomag_footer_texts', array(
		'panel' => 'viomag_panel_header_content_footer',
		'title' => __( 'Footer texts', 'viomag' ),
	));

	$wp_customize->add_setting('viomag_footer_text_left', array(
		'default'           => '',
		'sanitize_callback' => 'viomag_sanitize_text',
	));
	$wp_customize->add_control('viomag_footer_text_left', array(
		'label'   => __( 'Footer left text', 'viomag' ),
		'section' => 'viomag_footer_texts',
		'type'    => 'textarea',
	));

	$wp_customize->add_setting('viomag_footer_text_center', array(
		'default'           => '',
		'sanitize_callback' => 'viomag_sanitize_text',
	));
	$wp_customize->add_control('viomag_footer_text_center', array(
		'label'   => __( 'Footer center text', 'viomag' ),
		'section' => 'viomag_footer_texts',
		'type'    => 'textarea',
	));

	$wp_customize->add_setting('viomag_footer_text_right', array(
		'default'           => '',
		'sanitize_callback' => 'viomag_sanitize_text',
	));
	$wp_customize->add_control('viomag_footer_text_right', array(
		'label'   => __( 'Footer right text', 'viomag' ),
		'section' => 'viomag_footer_texts',
		'type'    => 'textarea',
	));

	/*
	* Firts Steps and links
	*/

	$wp_customize->add_section( 'viomag_first_steps_links', array(
		'title'    => __( 'First Steps and Links', 'viomag' ),
		'priority' => 1,
	));

	/* Links */
	$wp_customize->add_setting( 'viomag_heading_first_step_links', array(
		'default'           => '',
		'sanitize_callback' => 'viomag_sanitize_text',
	));
	$wp_customize->add_control( new Viomag_Customize_Heading_Control(
		$wp_customize,
		'viomag_heading_first_step_links',
		array(
			'type'     => 'heading_1',
			'settings' => 'viomag_heading_first_step_links',
			'section'  => 'viomag_first_steps_links',
			'label'    => __( 'Links', 'viomag' ),
		)
	));

	// Rate/Review.
	$wp_customize->add_setting( 'viomag_rate_button', array( 'sanitize_callback' => 'viomag_sanitize_text' ) );
	$wp_customize->add_control( new Viomag_Text_Control(
		$wp_customize,
		'viomag_rate_button',
		array(
			'settings'     => 'viomag_rate_button',
			'section'      => 'viomag_first_steps_links',
			'control_text' => __( 'Please, if you are happy with the theme, say it on wordpress.org and give VioMag a nice review. Thank you', 'viomag' ) . '<a class="vm-customize-link-button" href="https://wordpress.org/support/theme/viomag/reviews/#new-post" target="_blank">' . __( 'Rate/Review', 'viomag' ) . '</a>',
		)
	));

	// Live demo.
	$wp_customize->add_setting( 'viomag_link_buttons', array( 'sanitize_callback' => 'viomag_sanitize_text' ) );
	$wp_customize->add_control( new Viomag_Text_Control(
		$wp_customize,
		'viomag_link_buttons',
		array(
			'settings'     => 'viomag_link_buttons',
			'section'      => 'viomag_first_steps_links',
			'control_text' => '<a class="vm-customize-link-button" href="http://demos.galussothemes.com/viomag/" target="_blank">' . __( 'Live Demo', 'viomag' ) . '</a>
			<a class="vm-customize-link-button" href="https://galussothemes.com/wordpress-themes/viomag-pro/" target="_blank">' . __( 'Pro Version', 'viomag' ) . '</a>',
		)
	));

	/* First steps */
	$wp_customize->add_setting('viomag_heading_first_step', array(
		'default'           => '',
		'sanitize_callback' => 'viomag_sanitize_text',
	));
	$wp_customize->add_control( new Viomag_Customize_Heading_Control(
		$wp_customize,
		'viomag_heading_first_step',
		array(
			'type'     => 'heading_1',
			'settings' => 'viomag_heading_first_step',
			'section'  => 'viomag_first_steps_links',
			'label'    => __( 'First Steps', 'viomag' ),
		)
	));

	$wp_customize->add_setting( 'viomag_first_steps', array( 'sanitize_callback' => 'viomag_sanitize_text' ) );
	$wp_customize->add_control( new Viomag_Text_Control(
		$wp_customize,
		'viomag_first_steps',
		array(
			'settings'     => 'viomag_first_steps',
			'section'      => 'viomag_first_steps_links',
			'label'        => '&#9679; ' . __( 'Setting up Magazine Home Page', 'viomag' ),
			'control_text' => __( '1. Create a new page (with any title, it does not matter)<br/>
2. In right column go to Page Attributes > Template and select (VioMag) Magazine Front Page<br/>
3. Click on Publish<br/>
4. Go to Appearance > Customize > General settings > Static Front Page<br/>
5. Select A static page<br/>
6. In Front Page, select the page that you created in the step 1<br/>
7. Save changes', 'viomag' ),
		)
	));

	$wp_customize->add_setting( 'viomag_first_steps_2', array( 'sanitize_callback' => 'viomag_sanitize_text' ) );
	$wp_customize->add_control( new Viomag_Text_Control(
		$wp_customize,
		'viomag_first_steps_2',
		array(
			'settings'     => 'viomag_first_steps_2',
			'section'      => 'viomag_first_steps_links',
			'label'        => '&#9679; ' . __( 'Widgets do not display images correctly', 'viomag' ),
			'control_text' => __( '<p><strong>In order for images to be displayed correctly in widgets, featured images must have a minimum size of 576x432 pixels</strong>.</p><p>If the image thumbnails are not displayed correctly (because VioMag is not the first theme used) you will need to regenerate the thumbnails with a free plugin as', 'viomag' ) . ' <a href="https://wordpress.org/plugins/regenerate-thumbnails/" target="_blank">Regenerate Thumbnails</a></p>.',
		)
	));
}
