<?php
extract( shortcode_atts( array(
	'icon'     => 'fa fa-adjust',
	'icon_txt' => '',
	'type'     => '1',
	'align'    => 'left',
	'class'    => '',
), $atts ) );
$unid = uniqid( 'rounded-icon-' );
if ( $icon_txt != '' ) {
	$ricon = $icon_txt;
} else {
	$ricon = $icon;
}
if ( $type == 1 ) {
	?>
	<div class="rounded-icon-type1 rounded-icon-wrapper <?php echo esc_attr( $unid ); ?>"
	     style="text-align: <?php echo esc_attr( $align ); ?>">
		<div class="rounded-icon <?php echo esc_attr( $class ); ?>">
			<i class="primary_bgcolor <?php echo esc_attr( $ricon ); ?>"></i>
		</div>
	</div>
<?php } elseif ( $type == 2 ) {
	?>
	<div class="rounded-icon-type2 rounded-icon-wrapper <?php echo esc_attr( $unid ); ?>"
	     style="text-align: <?php echo esc_attr( $align ); ?>">
		<div class="rounded-icon primary_bdcolor <?php echo esc_attr( $class ); ?>">
			<i class="primary_color <?php echo esc_attr( $ricon ); ?>"></i>
		</div>
	</div>
	<?php
} else {

}
?>