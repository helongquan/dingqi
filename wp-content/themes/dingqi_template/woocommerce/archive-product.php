<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       2.6.1
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$tm_finance_woo_layout_category = Kirki::get_option( 'tm-finance', 'woo_layout_category' );
$tm_finance_page_layout_private = get_post_meta( get_the_ID(), "tm_finance_page_layout_private", true );
$tm_finance_heading_image       = get_post_meta( get_the_ID(), "tm_finance_heading_image", true );
$tm_finance_bread_crumb_enable  = get_post_meta( get_the_ID(), "tm_finance_bread_crumb_enable", true );
$tm_finance_disable_comment     = get_post_meta( get_the_ID(), "tm_finance_disable_comment", true );
$tm_finance_disable_title       = get_post_meta( get_the_ID(), "tm_finance_disable_title", true );
$tm_finance_custom_class        = get_post_meta( get_the_ID(), "tm_finance_custom_class", true );
if ( $tm_finance_heading_image ) {
	$tm_finance_heading_image = get_post_meta( get_the_ID(), "tm_finance_heading_image", true );
} else {
	$tm_finance_heading_image = Kirki::get_option( 'tm-finance', 'page_title_bg_image' );
}
get_header(); ?>
<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
	<div class="big-title" style="background-image: url('<?php echo esc_url( $tm_finance_heading_image ); ?>')">
		<div class="container">
			<h1 class="entry-title">
				<?php woocommerce_page_title(); ?>
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
<?php endif; ?>
<div class="container">
	<div class="page-content">
		<div class="row">
			<?php if ( $tm_finance_woo_layout_category == 'sidebar-content' ) { ?>
				<?php do_action( 'woocommerce_sidebar' ); ?>
			<?php } ?>
			<?php if ( $tm_finance_woo_layout_category == 'sidebar-content' || $tm_finance_woo_layout_category == 'content-sidebar' ) { ?>
				<?php $class = 'col-md-9'; ?>
			<?php } else { ?>
				<?php $class = 'col-md-12'; ?>
			<?php } ?>
			<div class="<?php echo esc_attr( $class ); ?>">
				<?php do_action( 'woocommerce_before_main_content' ); ?>
				<?php do_action( 'woocommerce_archive_description' ); ?>
				<?php if ( have_posts() ) : ?>
					<div class="row middle center woocommerce-loop-top">
						<?php do_action( 'woocommerce_before_shop_loop' ); ?>
					</div>
					<?php woocommerce_product_loop_start(); ?>
					<?php woocommerce_product_subcategories(); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php wc_get_template_part( 'content', 'product' ); ?>
					<?php endwhile; // end of the loop. ?>
					<?php woocommerce_product_loop_end(); ?>
					<?php do_action( 'woocommerce_after_shop_loop' ); ?>
					<?php
				elseif ( ! woocommerce_product_subcategories( array(
					'before' => woocommerce_product_loop_start( false ),
					'after'  => woocommerce_product_loop_end( false )
				) )
				) : ?>
					<?php wc_get_template( 'loop/no-products-found.php' ); ?>
				<?php endif; ?>
				<?php do_action( 'woocommerce_after_main_content' ); ?>
			</div>
			<?php if ( $tm_finance_woo_layout_category == 'content-sidebar' ) { ?>
				<?php do_action( 'woocommerce_sidebar' ); ?>
			<?php } ?>
		</div>
	</div>
</div>
<?php get_footer( 'shop' ); ?>
