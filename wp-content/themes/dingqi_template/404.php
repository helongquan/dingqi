<?php
/**
 * The template for displaying 404 pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Infinity
 */

$tm_finance_disable_title = get_post_meta( get_the_ID(), "tm_finance_disable_title", true );
$tm_finance_heading_image = Kirki::get_option( 'tm-finance', 'page_title_bg_image' );
get_header(); ?>
<?php if ( $tm_finance_disable_title != 'on' ) { ?>
	<div class="big-title" style="background-image: url('<?php echo esc_url( $tm_finance_heading_image ); ?>')">
		<div class="container">
			<h1 class="entry-title" itemprop="headline"><?php echo __( '404 Page Not Found', 'tm-finance' ); ?></h1>
		</div>
	</div>
<?php } ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="content404 align-center">
				<span class="icon"><i class="fa fa-frown-o"></i> </span>
				<h2 class="title"><?php echo __( 'Looks Like Something Went Wrong!', 'tm-finance' ); ?></h2>
				<span
					class="text"><?php echo __( 'The page you were looking for is not here. Maybe you want to perform a search?', 'tm-finance' ); ?></span>
				<div class="search"><?php get_search_form(); ?></div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
