<?php
/**
 * The Template for displaying all single projects.
 *
 * Override this template by copying it to yourtheme/projects/single-project.php
 *
 * @author        WooThemes
 * @package       Projects/Templates
 * @version       1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

$tm_finance_heading_image = Kirki::get_option( 'tm-finance', 'page_title_bg_image' );
$tm_finance_disable_title = get_post_meta( get_the_ID(), "tm_finance_disable_title", true );
get_header( 'projects' ); ?>
<?php if ( $tm_finance_disable_title != 'on' ) { ?>
	<div class="big-title" style="background-image: url('<?php echo esc_url( $tm_finance_heading_image ); ?>')">
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
		<div class="single-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php do_action( 'projects_before_single_project' ); ?>
				<?php the_content(); ?>
				<?php do_action( 'projects_after_single_project' ); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
<?php get_footer( 'projects' );