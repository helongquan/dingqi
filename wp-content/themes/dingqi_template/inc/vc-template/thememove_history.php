<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$values          = (array) vc_param_group_parse_atts( $values );
$class_to_filter = '';
$class_to_filter .= vc_shortcode_custom_css_class( $css, ' ' ) . $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, $this->settings['base'], $atts );
if ( count( $values ) > 0 ) {
	if ( $type == '2' ) {
		?>
		<div class="tm-ourhistory2<?php echo strlen( $css_class ) > 0 ? ' ' . trim( esc_attr( $css_class ) ) : ''; ?>">
			<ul>
				<?php
				foreach ( $values as $data ) {
					echo '<li>' . wp_get_attachment_image( $data['photo'], 'full' ) . '<strong>' . $data['label'] . '</strong>' . $data['content'] . '</li>';
				}
				?>
			</ul>
		</div>
		<?php
	} else {
		?>
		<div class="tm-ourhistory<?php echo strlen( $css_class ) > 0 ? ' ' . trim( esc_attr( $css_class ) ) : ''; ?>">
			<ul>
				<?php
				foreach ( $values as $data ) {
					echo '<li><strong>' . $data['label'] . '</strong>' . $data['content'] . '</li>';
				}
				?>
			</ul>
		</div>
		<?php
	}
}
?>

