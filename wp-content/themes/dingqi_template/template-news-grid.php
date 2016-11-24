<?php
/*
Template Name: News Archive Grid
*/

$tm_finance_heading_image   = get_post_meta( get_the_ID(), "tm_finance_heading_image", true );
$tm_finance_disable_comment = get_post_meta( get_the_ID(), "tm_finance_disable_comment", true );
$tm_finance_disable_title   = get_post_meta( get_the_ID(), "tm_finance_disable_title", true );
$tm_finance_custom_class    = get_post_meta( get_the_ID(), "tm_finance_custom_class", true );
$tm_finance_layout          = Kirki::get_option( 'tm-finance', 'page_layout' );
if ( $tm_finance_heading_image ) {
	$tm_finance_heading_image = get_post_meta( get_the_ID(), "tm_finance_heading_image", true );
} else {
	$tm_finance_heading_image = Kirki::get_option( 'tm-finance', 'page_title_bg_image' );
}
get_header(); ?>
<?php if ( $tm_finance_disable_title != 'on' ) { ?>
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
<?php } ?>
<div class="container">
	<div class="content news-grid">
		<?php
		global $wp_query;
		$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$args      = array(
			'post_type' => 'post',
			'paged'     => $paged
		);
		$the_query = new WP_Query( $args );
		$tmp_query = $wp_query;
		$wp_query  = null;
		$wp_query  = $the_query;
		?>
		<?php if ( $the_query->have_posts() ) :
			echo '<div class="row">';
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				echo '<div class="col-md-4">';
				get_template_part( 'template-parts/content-blog-grid', get_post_format() );
				echo '</div>';
			endwhile;
			echo '</div>';
			?>
			<?php tm_finance_paging_nav(); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
