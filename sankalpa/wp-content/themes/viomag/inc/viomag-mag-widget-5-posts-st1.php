<?php
/**
 * Widget para mostrar las entradas recientes con thumbnails
 *
 * @package VioMag
 *
 * @since VioMag 1.0
 */

add_action( 'widgets_init', 'viomag_5_posts_style_1_widget' );
function viomag_5_posts_style_1_widget() {
	register_widget( 'viomag_widget_5_posts_style_1' );
}

class viomag_widget_5_posts_style_1 extends WP_Widget {

	public function __construct() {

		$widget_ops = array(
			'classname'   => 'viomag_widget_5_posts_style_1',
			'description' => __( 'Displays the latest 5 posts of specific category. This widget must use it ONLY on the MAGAZINE FRONT PAGE, in Mag Front Page: Below Header widget area.', 'viomag' ),
		);

		parent::__construct( 'viomag_widget_5_posts_style_1', '(VM Mag) ' . __( '5 Posts - Style 1', 'viomag' ), $widget_ops );
	}

	public function form( $instance ) {

		$defaults = array(
			'title'   => '',
			'cat_sel' => '',
			'frame'   => 'frameless',
		);

		$instance = wp_parse_args( (array) $instance, $defaults );

		$title   = $instance ['title'];
		$cat_sel = $instance['cat_sel'];
		$frame   = $instance ['frame'];

		?>
		<p><?php esc_html_e( 'This widget must use it ONLY on the FRONT PAGE, in Below Header widget area.', 'viomag' ); ?></p>

		<p><?php esc_html_e( 'Title', 'viomag' ); ?><br />
			<input class="widefat"
			id="<?php echo $this->get_field_id( 'title' ); ?>"
			name="<?php echo $this->get_field_name( 'title' ); ?>"
			type="text" value="<?php echo esc_attr( $title ); ?>" size="30" />
		</p>

		<p><strong><?php esc_html_e( 'Select category', 'viomag' ); ?>:</strong><br />

		<p>
		<select id="<?php echo $this->get_field_id( 'cat_sel' ); ?>" name="<?php echo $this->get_field_name( 'cat_sel' ); ?>">
		<option value=""><?php esc_html_e( 'All', 'viomag' ); ?></option>
		<?php
		$categorias = get_categories();
		foreach ( $categorias as $categoria ) {
			$cat_id   = $categoria->cat_ID;
			$cat_slug = $categoria->slug;
			$cat_name = $categoria->name;

			?>
			<option value="<?php echo $cat_id; ?>"  <?php echo selected( $cat_sel, $cat_id, false ); ?>><?php echo $cat_name; ?></option>
			<?php

		}
		?>
		</select>
		</p>

		<p>
		<?php esc_html_e( 'Frame', 'viomag' ); ?><br>
		<select id="<?php echo $this->get_field_id( 'frame' ); ?>" name="<?php echo $this->get_field_name( 'frame' ); ?>">
			<option value="frameless"  <?php echo selected( $frame, 'frameless', false ); ?>><?php esc_html_e( 'Frameless', 'viomag' ); ?></option>
			<option value="light-frame"  <?php echo selected( $frame, 'light-frame', false ); ?>><?php esc_html_e( 'Light frame', 'viomag' ); ?></option>
			<option value="dark-frame"  <?php echo selected( $frame, 'dark-frame', false ); ?>><?php esc_html_e( 'Dark frame', 'viomag' ); ?></option>
		</select>
		</p>

		<?php

	}

	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title']   = sanitize_text_field( $new_instance['title'] );
		$instance['cat_sel'] = $new_instance['cat_sel'];
		$instance['frame']   = ( ! empty( $new_instance['frame'] ) ) ? strip_tags( $new_instance['frame'] ) : 'frameless';

		return $instance;
	}

	public function widget( $args, $instance ) {

		extract( $args );

		echo $before_widget;

		$title   = ! empty( $instance['title'] ) ? apply_filters( 'widget_title', $instance['title'] ) : '';
		$cat_sel = ! empty( $instance['cat_sel'] ) ? $instance['cat_sel'] : '';
		$frame   = ! empty( $instance['frame'] ) ? $instance['frame'] : 'frameless';

		if ( ! empty( $title ) ) {
			?>
			<div><h2 class="widget-title"><span class="mag-widget-widget-title">
				<?php echo esc_html( $title ); ?>
			</span></h2></div>
			<?php
		}

		$arg = array(
			'posts_per_page' => 5,
			'cat'            => $cat_sel,
		);

		$query = new WP_Query( $arg );

		if ( $query->have_posts() ) :

			$num = $this->number;
			$np  = 0;

			?>

			<div class="wrapper-mag-widget-5-posts-st1-<?php echo $num . ' ' . $frame; ?>">

			<?php
			while ( $query->have_posts() ) :

				$query->the_post();

				$current_post = $query->current_post;
				$np++;

				if ( $current_post == 0 ) { // Elemento principal.
					?>
					<div class="wrapper-main-item-5-posts-st1">

						<div class="main-item-5-posts-st1">

							<?php if ( has_post_thumbnail() ) : ?>
								<a href='<?php the_permalink(); ?>'><?php the_post_thumbnail( 'viomag-thumbnail-5x3' ); ?></a>
							<?php else : ?>
								<a href='<?php the_permalink(); ?>'><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/default-5x3.png" /></a>
							<?php endif; ?>

							<?php if ( is_sticky() ) {
								$sticky_post_label = esc_html( get_theme_mod( 'viomag_sticky_post_label', __( 'Featured', 'viomag' ) ) );
								?>
								<span class="sticky-post-label"><?php echo $sticky_post_label; ?></span>
							<?php } ?>

							<div class="main-item-5-posts-st1-title fondo-degradado">

								<h3 class="entry-title"><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h3>

								<div class="post-meta-fp"><?php viomag_entry_info_fp(); ?></div>

							</div><!-- .main-item-title -->

						</div><!-- .main-item-5-posts-st1 -->

					</div><!-- .wrapper-main-item-5-posts-st1 -->
					<?php
				} else { // $current_post > 0; Elementos secundarios.
					if ( $current_post == 1 ) { // Primer item secundario, se abre el contenedor.
						?>
						<div class="wrapper-secondary-items-5-posts-st1">
						<?php } ?>

						<div class="secondary-item-5-posts-st1"<?php // echo $float; ?>>
							<div class="secondary-item-5-posts-st1-img">
								<?php if ( has_post_thumbnail() ) : ?>
									<a href='<?php the_permalink(); ?>'><?php the_post_thumbnail( 'viomag-thumbnail-5x3' ); ?></a>
								<?php else : ?>
									<a href='<?php the_permalink(); ?>'><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/default-5x3.png" /></a>
								<?php endif; ?>

								<?php if ( is_sticky() ) {
									$sticky_post_label = esc_html( get_theme_mod( 'viomag_sticky_post_label', __( 'Featured', 'viomag' ) ) );
									?>
									<span class="sticky-post-label"><?php echo $sticky_post_label; ?></span>
								<?php } ?>

								<div class="secondary-item-5-posts-st1-title fondo-degradado">

									<h3 class="entry-title"><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h3>

									<div class="post-meta-fp"><?php viomag_entry_info_fp(); ?></div>

								</div>
							</div><!-- .secondary-items-5-posts-st1-img -->

						</div><!-- .secondary-item-5-posts-st1 -->

				<?php
				}

				if ( $np == 5 ) {
					break; // Aunque haya sticky post solo mostramos 5 entradas.
				}

				endwhile;
				?>

				</div><!-- .wrapper-secondary-items-5-posts-st1 -->
			</div><!-- .wrapper-mag-widget-5-posts -->

			<?php
			wp_reset_postdata();

		endif;

		echo $after_widget;
	}
}
