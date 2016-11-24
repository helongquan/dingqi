<?php function tm_finance_js_custom_code() { ?>
	<?php if ( Kirki::get_option( 'tm-finance', 'custom_js_enable' ) == 1 ): ?>
		<?php echo html_entity_decode( Kirki::get_option( 'tm-finance', 'custom_js' ) ); ?>
	<?php endif ?>
	<?php if ( Kirki::get_option( 'tm-finance', 'nav_sticky_enable' ) == 1 && has_nav_menu( 'primary' ) ): ?>
		<?php if ( Kirki::get_option( 'tm-finance', 'header_type' ) == 'header01' ) { ?>
			<script>
				jQuery(document).ready(function ($) {
					$(".main-navigation").headroom(
						{
							offset: 160
						}
					);
				});
			</script>
		<?php } elseif ( Kirki::get_option( 'tm-finance', 'header_type' ) == 'header02' ) { ?>
			<script>
				jQuery(document).ready(function ($) {
					$(".site-header").headroom(
						{
							offset: 53
						}
					);
				});
			</script>
		<?php } elseif ( Kirki::get_option( 'tm-finance', 'header_type' ) == 'header06' ) { ?>
			<script>
				jQuery(document).ready(function ($) {
					$(".site-main-header").headroom(
						{
							offset: 53
						}
					);
				});
			</script>
		<?php } elseif ( Kirki::get_option( 'tm-finance', 'header_type' ) == 'header05' ) { ?>
			<script>
				jQuery(document).ready(function ($) {
					$(".site-main-header").headroom(
						{
							offset: 53
						}
					);
				});
			</script>
		<?php } elseif ( Kirki::get_option( 'tm-finance', 'header_type' ) == 'header04' ) { ?>
			<script>
				jQuery(document).ready(function ($) {
					$(".site-header").headroom(
						{
							offset: 53
						}
					);
				});
			</script>
		<?php } else { ?>
			<script>
				jQuery(document).ready(function ($) {
					$(".main-navigation").headroom(
						{
							offset: 160
						}
					);
				});
			</script>
		<?php } ?>
	<?php endif ?>
	<?php if ( Kirki::get_option( 'tm-finance', 'back_to_top' ) ) { ?>
		<script>
			jQuery(document).ready(function ($) {
				var $window = $(window);
				// Scroll up
				var $scrollup = $('.scrollup');

				$window.scroll(function () {
					if ($window.scrollTop() > 100) {
						$scrollup.addClass('show');
					} else {
						$scrollup.removeClass('show');
					}
				});

				$scrollup.on('click', function (evt) {
					$("html, body").animate({scrollTop: 0}, 600);
					evt.preventDefault();
				});
			});
		</script>
	<?php } ?>
<?php }

add_action( 'wp_footer', 'tm_finance_js_custom_code' );
