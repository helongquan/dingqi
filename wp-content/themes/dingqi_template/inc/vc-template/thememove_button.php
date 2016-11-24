<?php
extract( shortcode_atts( array(
	'type'     => '1',
	'text'     => '',
	'align'    => 'left',
	'arrow'    => '1',
	'link'     => '#',
	'el_class' => 'button',
), $atts ) );
$el_class = $this->getExtraClass( $el_class );
$bclass   = '';
global $button_count;
$id = 'button-' . (int) $button_count ++;
if ( $arrow == 1 ) {
	$bclass = $el_class;
} else {
	$bclass = 'tm-btn-noarrow ' . $el_class;
}
if ( $type == 1 ) {
	?>
	<div class="tm-btn-wrapper" style="text-align: <?php echo esc_attr( $align ); ?>">
		<a
			id="<?php echo esc_attr( $id ); ?>"
			class="tm-btn-a-type1 tm-btn-a primary_bgcolor primary_bdcolor <?php echo esc_attr( $bclass ); ?>"
			href="<?php echo esc_url( $link ); ?>"
			target="<?php echo esc_attr( $target ); ?>">
			<?php echo esc_html( $text ); ?>
		</a>
	</div>
<?php } elseif ( $type == 2 ) {
	?>
	<div class="tm-btn-wrapper" style="text-align: <?php echo esc_attr( $align ); ?>">
		<a
			id="<?php echo esc_attr( $id ); ?>"
			class="tm-btn-a-type2 tm-btn-a primary_color <?php echo esc_attr( $bclass ); ?>"
			href="<?php echo esc_url( $link ); ?>"
			target="<?php echo esc_attr( $target ); ?>">
			<?php echo esc_html( $text ); ?>
		</a>
	</div>
<?php } elseif ( $type == 3 ) {
	?>
	<div class="tm-btn-wrapper" style="text-align: <?php echo esc_attr( $align ); ?>">
		<a
			id="<?php echo esc_attr( $id ); ?>"
			class="tm-btn-a-type3 tm-btn-a primary_bgcolor primary_bdcolor <?php echo esc_attr( $bclass ); ?>"
			href="<?php echo esc_url( $link ); ?>"
			target="<?php echo esc_attr( $target ); ?>">
			<?php echo esc_html( $text ); ?>
		</a>
	</div>
	<?php
} else {

}
?>