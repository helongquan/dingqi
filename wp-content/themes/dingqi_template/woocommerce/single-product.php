<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$tm_finance_layout = Kirki::get_option( 'tm-finance', 'woo_layout_single_product' );
if ( get_post_meta( get_the_ID(), "tm_finance_heading_image", true ) ) {
	$tm_finance_heading_image = get_post_meta( get_the_ID(), "tm_finance_heading_image", true );
} else {
	$tm_finance_heading_image = Kirki::get_option( 'tm-finance', 'page_title_bg_image' );
}
get_header(); ?>
	<div class="big-title" style="background-image: url('<?php echo esc_url( $tm_finance_heading_image ); ?>')">
		<div class="container">
			<h1 class="entry-title">
				<?php the_title(); ?>
			</h1>
		</div>
	</div>
<?php if ( function_exists( 'tm_bread_crumb' ) ) { ?>
	<div class="breadcrumb">
		<div class="container">
			<?php echo tm_bread_crumb( array( 'home_label' => __( 'Home', 'tm-finance' ) ) ); ?>
		</div>
	</div>
<?php } ?>
	<div class="container">
		<div class="page-content">
			<div class="row">
				<?php if ( $tm_finance_layout == 'sidebar-content' ) { ?>
					<?php do_action( 'woocommerce_sidebar' ); ?>
				<?php } ?>
				<?php if ( $tm_finance_layout == 'sidebar-content' || $tm_finance_layout == 'content-sidebar' ) { ?>
					<?php $tm_finance_class = 'col-md-9'; ?>
				<?php } else { ?>
					<?php $tm_finance_class = 'col-md-12'; ?>
				<?php } ?>
				<div class="<?php echo esc_attr( $tm_finance_class ); ?>">
					<?php do_action( 'woocommerce_before_main_content' ); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php wc_get_template_part( 'content', 'single-product' ); ?>
					<?php endwhile; // end of the loop. ?>
					<?php do_action( 'woocommerce_after_main_content' ); ?>
				</div>
				<?php if ( $tm_finance_layout == 'content-sidebar' ) { ?>
					<?php do_action( 'woocommerce_sidebar' ); ?>
				<?php } ?>
			</div>
		</div>
	</div>
<?php get_footer( 'shop' ); ?>