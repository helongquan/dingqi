<?php
/**
 * The Template for displaying projects in a project category. Simply includes the archive template.
 *
 * Override this template by copying it to yourtheme/projects/taxonomy-project-category.php
 *
 * @author        WooThemes
 * @package       Projects/Templates
 * @version       1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$tm_finance_heading_image = '';
if ( get_post_meta( get_the_ID(), "tm_finance_heading_image", true ) ) {
	$tm_finance_heading_image = get_post_meta( get_the_ID(), "tm_finance_heading_image", true );
} else {
	$tm_finance_heading_image = Kirki::get_option( 'tm-finance', 'page_title_bg_image' );
}
if ( empty( $projects_loop['columns'] ) ) {
	$projects_loop['columns'] = apply_filters( 'projects_loop_columns', 4 );
}
get_header(); ?>
<?php if ( apply_filters( 'projects_show_page_title', true ) ) : ?>
	<div class="big-title" style="background-image: url('<?php echo esc_url( $tm_finance_heading_image ); ?>')">
		<div class="container">
			<h1 class="entry-title"><?php projects_page_title(); ?></h1>
		</div>
	</div>
	<?php if ( function_exists( 'tm_bread_crumb' ) && Kirki::get_option( 'tm-finance', 'breadcrumb_enable' ) == 1 ) { ?>
		<div class="breadcrumb">
			<div class="container">
				<?php echo tm_bread_crumb( array( 'home_label' => __( 'Home', 'tm-finance' ) ) ); ?>
			</div>
		</div>
	<?php } ?>
<?php endif; ?>
	<div class="container">
		<?php if ( have_posts() ) : ?>

			<?php
			/**
			 * projects_before_loop hook
			 *
			 */
			do_action( 'projects_before_loop' );
			?>

			<div class="projects columns-<?php echo esc_attr( $projects_loop['columns'] ); ?>">

				<?php projects_project_loop_start(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php projects_get_template_part( 'content', 'project' ); ?>

				<?php endwhile; // end of the loop. ?>

				<?php projects_project_loop_end(); ?>

			</div><!-- .projects -->

			<?php
			/**
			 * projects_after_loop hook
			 *
			 * @hooked projects_pagination - 10
			 */
			do_action( 'projects_after_loop' );
			?>

		<?php else : ?>

			<?php projects_get_template( 'loop/no-projects-found.php' ); ?>

		<?php endif; ?>

		<?php
		/**
		 * projects_after_main_content hook
		 *
		 * @hooked projects_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'projects_after_main_content' );
		?>
	</div>
<?php get_footer(); ?>