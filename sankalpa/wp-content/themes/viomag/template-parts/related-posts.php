<?php
/**
 * Display related posts.
 *
 * @since VioMag 1.0
 * @package VioMag
 */

$tags = wp_get_post_terms( get_the_ID() );
if ( $tags ) {

	$tagcount = count( $tags );
	for ( $i = 0; $i < $tagcount; $i++ ) {
		$tag_ids[ $i ] = $tags[ $i ]->term_id;
	}

	$args = array(
		'tag__in'            => $tag_ids,
		'post__not_in'       => array( $post->ID ),
		'posts_per_page'     => 4,
		'ignore_sticky_post' => 1,
	);

	$relacionadas = new WP_Query( $args );
	if ( $relacionadas->have_posts() ) : ?>
		<div class="wrapper-related-posts">
			<div class="related-posts-cabecera">
				<span class="related-post-tab-cabecera"> <?php echo wp_kses_post( get_theme_mod( 'viomag_related_posts_title', __( 'Related posts...', 'viomag' ) ) ); ?>
				</span>
			</div>

			<div class="related-posts">
				<ul>
				<?php
				while ( $relacionadas->have_posts() ) :
					$relacionadas->the_post();
					?>
					<a href='<?php the_permalink(); ?>'>
						<li>
							<div style="padding:0 7px; padding:0 0.5rem;">
								&raquo; &nbsp;<?php the_title(); ?>
							</div>
						</li>
					</a>
				<?php
				endwhile;
				?>
				</ul>
			</div><!-- .related-posts -->

		</div><!-- .wrapper-related-posts -->

		<?php wp_reset_postdata(); ?>

	<?php endif; // $relacionadas have_posts ?>

<?php
}
