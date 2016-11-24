<?php tha_header_before(); ?>
<div class="site-main-header">
	<?php if ( Kirki::get_option( 'tm-finance', 'top_enable' ) == 1 ) { ?>
		<div class="site-top">
			<div class="container">
				<div class="row row-xs-center">
					<div class="col-md-7 align-left site-top-left">
						<?php dynamic_sidebar( 'header02-info' ); ?>
					</div>
					<div class="col-md-5 end-md end-lg align-right site-top-right">
						<?php wp_nav_menu( array(
							'theme_location'  => 'top',
							'container_class' => '',
							'fallback_cb'     => false
						) ); ?>
						<?php if ( Kirki::get_option( 'tm-finance', 'search_enable' ) == 1 ) { ?>
							<i class="fa fa-search search-btn"></i>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<header class="site-header ">
		<div class="container">
			<div class="row row-xs-center nav-content">
				<div class="col-md-2 col-sm-8 col-xs-8 site-branding">
					<?php
					$logo        = Kirki::get_option( 'tm-finance', 'logo' );
					$logo_retina = Kirki::get_option( 'tm-finance', 'logo_retina' );
					if ( $logo ) { ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img
								src="<?php echo esc_url( $logo ); ?>" <?php if ( $logo_retina ) { ?> srcset="<?php echo esc_url( $logo_retina ); ?> 2x" <?php } ?>
								alt="<?php bloginfo( 'name' ); ?>"/>
						</a>
					<?php } else { ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<?php } ?>
				</div>
				<?php if ( Kirki::get_option( 'tm-finance', 'search_enable' ) == 1 ) { ?>
					<div class="col-sm-2 col-xs-2 hidden-md-up align-right mobile-icon">
						<i class="fa fa-search search-btn"></i>
					</div>
					<div class="col-sm-2 col-xs-2 hidden-md-up end align-right mobile-icon">
						<i id="open-left" class="fa fa-navicon"></i>
					</div>
				<?php } else { ?>
					<div class="col-sm-4 col-xs-4 hidden-md-up end align-right mobile-icon">
						<i id="open-left" class="fa fa-navicon"></i>
					</div>
				<?php } ?>
				<div id="site-navigation" class="col-md-8 main-navigation creative-link hidden-sm-down primary_color">
					<?php if ( class_exists( 'TM_Finance_Walker_Nav_Menu' ) && has_nav_menu( 'primary' ) ) {
						wp_nav_menu( array(
							'theme_location'  => 'primary',
							'menu_id'         => 'primary-menu',
							'container_class' => 'primary-menu',
							'walker'          => new TM_Finance_Walker_Nav_Menu
						) );
					} else {
						wp_nav_menu( array(
							'theme_location'  => 'primary',
							'menu_id'         => 'primary-menu',
							'container_class' => 'primary-menu'
						) );
					} ?>
				</div>
				<div class="col-md-2 hidden-sm-down end align-right">
					<?php wp_nav_menu( array(
						'theme_location'  => 'social',
						'container_class' => 'social-menu',
						'fallback_cb'     => false
					) ); ?>
				</div>
			</div>
		</div>
	</header><!-- .site-header -->
</div>
<?php tha_header_after(); ?>
