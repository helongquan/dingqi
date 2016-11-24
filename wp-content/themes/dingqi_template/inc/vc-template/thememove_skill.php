<?php
extract( shortcode_atts( array(
	'name'  => '1',
	'value' => '',
	'bg'    => '#DDDDDD',
	'class' => '',
), $atts ) );
global $skill_count;
if ( ! isset( $skill_count ) ) {
	$skill_count = 1;
}
$randid = $skill_count ++;
?>
<div <?php echo 'class="skill skill-' . esc_attr( $randid ) . ' ' . esc_attr( $class ) . '"'; ?> >
	<div class="text">
		<?php echo esc_html( $name ); ?>
	</div>
	<span class="value primary_bdcolor primary_color"><?php echo esc_html( $value ); ?>%</span>
	<div class="progress" style="background-color: <?php echo esc_attr( $bg ); ?>">
		<div class="bar primary_bgcolor"
		     style="width: <?php echo esc_attr( $value ); ?>%; position: absolute; top: 0; left: -<?php echo esc_attr( $value ); ?>%"></div>
	</div>
</div>
<script>
	(function ($, win) {
		$.fn.inViewport = function (cb) {
			return this.each(function (i, el) {
				function visPx() {
					var H = $(this).height(),
						r = el.getBoundingClientRect(), t = r.top, b = r.bottom;
					return cb.call(el, Math.max(0, t > 0 ? H - t : (b < H ? b : H)));
				}

				visPx();
				$(win).on("resize scroll", visPx);
			});
		};
	}(jQuery, window));
	jQuery(".skill-<?php echo esc_attr( $randid ); ?>").inViewport(function (px) {
		if (px) {
			jQuery(this).addClass("skill_fly");
			var sw = jQuery(".skill-<?php echo esc_attr( $randid ); ?> .bar").width();
			if (sw >= 50) {
				swx = sw - 50;
			} else {
				swx = sw;
			}
			jQuery(".skill-<?php echo esc_attr( $randid ); ?> .value").css("left", swx + 'px');
		}
	});
</script>