<?php
/*
Template Name: Blank Page
*/
?>
<?php tha_html_before(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php tha_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php tha_head_bottom(); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php tha_body_top(); ?>
<?php if ( have_posts() ) : the_post(); ?>
	<div class="container">
		<?php the_content(); ?>
	</div>
<?php endif; ?>
<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>