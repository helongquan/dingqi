<?php
extract( shortcode_atts( array(
	'style'             => '1',
	'limit'             => '6',
	'size'              => '',
	'orderby'           => '',
	'order'             => '',
	'display_author'    => '',
	'display_avatar'    => '',
	'display_url'       => '',
	'display_bullets'   => 'true',
	'enable_carousel'   => '',
	'slides_to_display' => '2',
	'enable_autoplay'   => '',
	'el_class'          => 'testimonials',
), $atts ) );
$el_class = $this->getExtraClass( $el_class );
global $testimonials_count;
$id = 'testimonials-' . (int) $testimonials_count ++;
?>
	<div
		id="<?php echo esc_attr( $id ); ?>" <?php echo 'class="testimonials-style' . $style . ' ' . $el_class . '"'; ?> >
		<?php do_action( 'woothemes_testimonials', array(
			'limit'           => $limit,
			'size'            => $size,
			'orderby'         => $orderby,
			'order'           => $order,
			'display_author'  => $display_author,
			'display_avatar'  => $display_avatar,
			'display_url'     => $display_url,
			'display_bullets' => $display_bullets,
		) ); ?>
	</div>

<?php if ( $enable_carousel == 'true' ) { ?>
	<script>
		jQuery(document).ready(function ($) {
			$("#<?php echo esc_attr( $id ); ?> .testimonials-list").owlCarousel(
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
					<?php if(( $style == '3' ) || ( $style == '5' ) || ( $style == '6' )){ ?>
					margin: 30,
					<?php } else { ?>
					margin: 0,
					<?php } ?>
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