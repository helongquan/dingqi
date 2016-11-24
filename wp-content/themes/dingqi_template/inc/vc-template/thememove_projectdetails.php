<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$class_to_filter = '';
$class_to_filter .= vc_shortcode_custom_css_class( $css, ' ' ) . $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, $this->settings['base'], $atts );

global $post;

// Categories
$categories = get_the_term_list( $post->ID, 'project-category', '', ', ', '' );

// Meta
$date   = esc_attr( get_post_meta( $post->ID, '_date', true ) );
$client = esc_attr( get_post_meta( $post->ID, '_client', true ) );
?>

<div class="tm-project-details<?php echo strlen( $css_class ) > 0 ? ' ' . trim( esc_attr( $css_class ) ) : ''; ?>">
	<?php if ( $post->post_type != 'project' ) { ?>
		<div class="warning">
			Project Details Shortcode only available for "Projects" content type.
		</div>
	<?php } else { ?>
		<ul>
			<?php if ( $date != '' ) { ?>
				<li><span><?php _e( 'Date:', 'tm-finance' ); ?></span> <?php echo esc_html( $date ); ?></li>
			<?php } ?>
			<?php if ( $client != '' ) { ?>
				<li><span><?php _e( 'Client:', 'tm-finance' ); ?></span> <?php echo esc_html( $client ); ?></li>
			<?php } ?>
			<li><span><?php _e( 'Category:', 'tm-finance' ); ?></span> <?php echo wp_kses( $categories, array(
					'a' => array(
						'href'  => array(),
						'title' => array()
					),
				) ); ?></li>
		</ul>
		<?php if ( $share == '1' ) {
			?>
			<div class="share">
				<span><?php _e( 'Share:', 'tm-finance' ); ?></span>
				<a class="icon facebook" target="_blank"
				   href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ) ?>">Facebook</a>
				<a class="icon googleplus" target="_blank"
				   href="https://plus.google.com/share?url=<?php echo urlencode( get_permalink() ) ?>">Google Plus</a>
				<a class="icon twitter" target="_blank"
				   href="http://twitter.com/share?text=<?php echo urlencode( get_the_title() ); ?>&url=<?php echo urlencode( get_permalink() ) ?>">Twitter</a>
			</div>
			<?php
		}
		?>
	<?php } ?>
</div>