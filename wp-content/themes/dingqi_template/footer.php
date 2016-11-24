<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Infinity
 */
$tm_finance_back_to_top = Kirki::get_option( 'tm-finance', 'back_to_top' );
?>
<?php tha_content_bottom(); ?>
</div> <!-- #content -->
<?php tha_content_after(); ?>
<?php if ( is_active_sidebar( 'footer' ) ) { ?>
	<?php tha_footer_before(); ?>
	<footer class="site-footer">
		<?php tha_footer_top(); ?>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer' ); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer3' ); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer4' ); ?>
					<div class="social">
						<?php wp_nav_menu( array(
							'theme_location'  => 'footersocial',
							'menu_id'         => 'social-menu',
							'container_class' => 'social-menu',
							'fallback_cb'     => false
						) ); ?>
					</div>
				</div>
			</div>
		</div>
		<?php tha_footer_bottom(); ?>
	</footer><!-- .site-footer -->
	<?php tha_footer_after(); ?>
<?php } ?>
<?php if ( Kirki::get_option( 'tm-finance', 'copyright_enable' ) == 1 ) { ?>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-6 align-left copyright-left">
					<?php echo html_entity_decode( Kirki::get_option( 'tm-finance', 'copyright_text' ) ); ?>
				</div>
				<div class="col-md-6 align-right copyright-right">
					<?php echo html_entity_decode( Kirki::get_option( 'tm-finance', 'copyright_text_right' ) ); ?>
				</div>
			</div>
		</div>
	</div><!-- .copyright -->
<?php } ?>
</div><!-- #page -->
<div class="popup-search">
	<div class="inner">
		<div class="content">
			<div class="box">
				<span class="popup-search-close"><i class="fa fa-times"></i></span>
				<?php get_search_form(); ?>
				<?php esc_html_e( '* Type a keyword then press Enter', 'tm-finance' ); ?>
			</div>
		</div>
	</div>
</div>
<div class="popup-menu"></div>
<div class="popup-menu-inner">
	<?php wp_nav_menu( array(
		'theme_location'  => 'primary',
		'menu_id'         => 'mobile-menu',
		'container_class' => 'mobile-menu',
		'walker'          => new TM_Finance_Walker_Nav_Menu
	) ); ?>
</div>

<?php if ( $tm_finance_back_to_top ) { ?>
	<a class="scrollup primary_bgcolor"><i class="fa fa-angle-up"></i></a>
<?php } ?>
<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>
