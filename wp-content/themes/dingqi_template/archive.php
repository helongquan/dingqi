<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Infinity
 */

$tm_finance_layout          = Kirki::get_option( 'tm-finance', 'archive_layout' );
$tm_finance_heading_image   = get_post_meta( get_the_ID(), "tm_finance_heading_image", true );
$tm_finance_disable_comment = get_post_meta( get_the_ID(), "tm_finance_disable_comment", true );
$tm_finance_disable_title   = get_post_meta( get_the_ID(), "tm_finance_disable_title", true );
$tm_finance_custom_class    = get_post_meta( get_the_ID(), "tm_finance_custom_class", true );
if ( $tm_finance_heading_image ) {
	$tm_finance_heading_image = get_post_meta( get_the_ID(), "tm_finance_heading_image", true );
} else {
	$tm_finance_heading_image = Kirki::get_option( 'tm-finance', 'page_title_bg_image' );
}
get_header(); ?>
<?php if ( $tm_finance_disable_title != 'on' ) { ?>
	<div class="big-title" style="background-image: url('<?php echo esc_url( $tm_finance_heading_image ); ?>')">
		<div class="container">
			<?php the_archive_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</div>
	<?php if ( function_exists( 'tm_bread_crumb' ) && Kirki::get_option( 'tm-finance', 'breadcrumb_enable' ) == 1 ) { ?>
		<div class="breadcrumb">
			<div class="container">
				<?php echo tm_bread_crumb( array( 'home_label' => __( 'Home', 'tm-finance' ) ) ); ?>
			</div>
		</div>
	<?php } ?>
<?php } ?>
	<div class="container">
		<div class="row">
			<?php if ( $tm_finance_layout == 'sidebar-content' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
			<?php if ( $tm_finance_layout == 'sidebar-content' || $tm_finance_layout == 'content-sidebar' ) { ?>
				<?php $class = 'col-md-9'; ?>
			<?php } else { ?>
				<?php $class = 'col-md-12'; ?>
			<?php } ?>
			<div class="<?php echo esc_attr( $class ); ?>">
				<main class="content">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', 'blog' ); ?>
					<?php endwhile; // end of the loop. ?>
					<?php tm_finance_paging_nav(); ?>
				</main>
			</div>
			<?php if ( $tm_finance_layout == 'content-sidebar' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
		</div>
	</div>
<?php get_footer(); ?>