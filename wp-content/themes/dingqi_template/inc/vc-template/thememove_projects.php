<?php
extract( shortcode_atts( array(
	'limit'             => '8',
	'orderby'           => 'ID',
	'order'             => 'DESC',
	'display_bullets'   => '',
	'enable_carousel'   => '',
	'slides_to_display' => '2',
	'enable_autoplay'   => '',
	'el_class'          => '',
), $atts ) );
$el_class = $this->getExtraClass( $el_class );
global $projects_count;
$id = 'projects-' . (int) $projects_count ++;
?>
	<div
		id="<?php echo esc_attr( $id ); ?>" <?php echo 'class="projects projects-style1 ' . esc_attr( $el_class ) . '"'; ?> >
		<?php
		query_posts( array(
			'post_type'      => 'project',
			'posts_per_page' => $limit,
			'orderby'        => $orderby,
			'order'          => $order
		) );
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				<div class="projects-item">
					<div class="projects-thumb">
						<?php echo get_the_post_thumbnail( get_the_ID(), array( 285, 200 ) );; ?>
					</div>
					<?php the_title( sprintf( '<div class="projects-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></div>' ); ?>
				</div>
				<?php
			}
		}
		wp_reset_query();
		?>
	</div>

<?php if ( $enable_carousel == 'true' ) { ?>
	<script>
		jQuery(document).ready(function ($) {
			$("#<?php echo esc_attr( $id ); ?>").owlCarousel(
				{
					responsive: {
						0: {
							items: 1
						},
						769: {
							items: <?php echo esc_js( $slides_to_display ); ?>
						}
					},
					navigation: false,
					margin: 10,
					<?php if ( $display_bullets == 'true' ) { ?>
					dots: true,
					<?php } else { ?>
					dots: false,
					<?php } ?>
					<?php if ( $enable_autoplay == 'true' ) { ?>
					autoplay: true,
					<?php } else { ?>
					autoplay: false,
					<?php } ?>
					autoplayHoverPause: true
				}
			);
		});
	</script>
<?php } ?>