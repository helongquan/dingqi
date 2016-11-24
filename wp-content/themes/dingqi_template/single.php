<?php
/**
 * The template for displaying all single posts.
 *
 * @package Infinity
 */
$tm_finance_heading_image = get_post_meta( get_the_ID(), "tm_finance_heading_image", true );
$tm_finance_layout        = Kirki::get_option( 'tm-finance', 'post_layout' );
if ( $tm_finance_heading_image ) {
	$tm_finance_heading_image = get_post_meta( get_the_ID(), "tm_finance_heading_image", true );
} else {
	$tm_finance_heading_image = Kirki::get_option( 'tm-finance', 'page_title_bg_image' );
}
get_header(); ?>
	<div class="big-title" style="background-image: url('<?php echo esc_url( $tm_finance_heading_image ); ?>')">
		<div class="container">
			<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>
		</div>
	</div>
<?php if ( function_exists( 'tm_bread_crumb' ) && Kirki::get_option( 'tm-finance', 'breadcrumb_enable' ) == 1 ) { ?>
	<div class="breadcrumb">
		<div class="container">
			<?php echo tm_bread_crumb( array( 'home_label' => __( 'Home', 'tm-finance' ) ) ); ?>
		</div>
	</div>
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
				<div class="content">
					<?php while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope"
						         itemtype="http://schema.org/CreativeWork">
							<div class="entry-content">
								<?php get_template_part( 'template-parts/content', 'single' ); ?>
								<?php
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
								?>
							</div>
						</article>
					<?php endwhile; ?>
				</div>
			</div>
			<?php if ( $tm_finance_layout == 'content-sidebar' ) { ?>
				<?php get_sidebar(); ?>
			<?php } ?>
		</div>
	</div>
<?php get_footer(); ?>