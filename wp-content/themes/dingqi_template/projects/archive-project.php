<?php
/**
 * The template for displaying project pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Infinity
 */
get_header();
if ( projects_get_page_id( 'projects' ) != - 1 ) {
	$pjid = projects_get_page_id( 'projects' );
	query_posts( array( 'page_id' => $pjid ) );
	if ( have_posts() ) {
		the_post();
		$tm_finance_page_layout_private = get_post_meta( get_the_ID(), "tm_finance_page_layout_private", true );
		$tm_finance_header_top          = get_post_meta( get_the_ID(), "tm_finance_header_top", true );
		$tm_finance_sticky_menu         = get_post_meta( get_the_ID(), "tm_finance_sticky_menu", true );
		$tm_finance_custom_logo         = get_post_meta( get_the_ID(), "tm_finance_custom_logo", true );
		$tm_finance_heading_image       = get_post_meta( get_the_ID(), "tm_finance_heading_image", true );
		$tm_finance_bread_crumb_enable  = get_post_meta( get_the_ID(), "tm_finance_bread_crumb_enable", true );
		$tm_finance_disable_comment     = get_post_meta( get_the_ID(), "tm_finance_disable_comment", true );
		$tm_finance_disable_title       = get_post_meta( get_the_ID(), "tm_finance_disable_title", true );
		$tm_finance_custom_class        = get_post_meta( get_the_ID(), "tm_finance_custom_class", true );
		if ( $tm_finance_page_layout_private != 'default' && class_exists( 'cmb2_bootstrap_205' ) ) {
			$tm_finance_layout = get_post_meta( get_the_ID(), "tm_finance_page_layout_private", true );
		} else {
			$tm_finance_layout = Kirki::get_option( 'tm-finance', 'page_layout' );
		}
		if ( $tm_finance_heading_image ) {
			$tm_finance_heading_image = get_post_meta( get_the_ID(), "tm_finance_heading_image", true );
		} else {
			$tm_finance_heading_image = Kirki::get_option( 'tm-finance', 'page_title_bg_image' );
		}
		?>
		<?php if ( $tm_finance_disable_title != 'on' ) { ?>
			<div class="big-title"
			     style="background-image: url('<?php echo esc_url( $tm_finance_heading_image ); ?>')">
				<div class="container">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
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
					<?php $tm_finance_class = 'col-md-9'; ?>
				<?php } else { ?>
					<?php $tm_finance_class = 'col-md-12'; ?>
				<?php } ?>
				<div class="<?php echo esc_attr( $tm_finance_class ); ?>">
					<div class="content">
						<article id="post-<?php get_the_ID(); ?>">
							<div class="entry-content">
								<?php the_content(); ?>
								<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html( __( 'Pages:', 'tm-finance' ) ),
									'after'  => '</div>',
								) );
								?>
							</div>
							<!-- .entry-content -->
						</article>
						<!-- #post-## -->
						<?php if ( ( comments_open() || get_comments_number() ) && $tm_finance_disable_comment != 'on' ) : comments_template(); endif; ?>
					</div>
				</div>
				<?php if ( $tm_finance_layout == 'content-sidebar' ) { ?>
					<?php get_sidebar(); ?>
				<?php } ?>
			</div>
		</div>
		<?php
	}
	wp_reset_query();
}
get_footer(); ?>
