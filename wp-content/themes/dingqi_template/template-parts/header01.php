<?php tha_header_before(); ?>
<?php if ( Kirki::get_option( 'tm-finance', 'top_enable' ) == 1 ) { ?>
	<div class="site-top">
		<div class="container">
			<div class="row row-xs-center">
				<div class="col-md-6 align-left site-top-left">
					<?php echo Kirki::get_option( 'tm-finance', 'top_left_text' ); ?>
				</div>
				<div class="col-md-6 end-md end-lg align-right site-top-right">
					<?php wp_nav_menu( array(
						'theme_location'  => 'top',
						'container_class' => '',
						'fallback_cb'     => false
					) ); ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
<header class="site-header">
	<div class="container">
		<div class="row row-xs-center">
			<div class="col-md-3 col-sm-8 col-xs-8 site-branding">
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
			<div class="col-md-7 hidden-sm-down">
				<?php dynamic_sidebar( 'header01-info' ); ?>
			</div>
			<div class="col-md-2 hidden-sm-down">
				<?php wp_nav_menu( array(
					'theme_location'  => 'social',
					'container_class' => 'social-menu',
					'fallback_cb'     => false
				) ); ?>
			</div>
		</div>
	</div>
</header><!-- .site-header -->
<?php tha_header_after(); ?>
<nav id="site-navigation"
     class="primary_bgcolor main-navigation creative-link hidden-sm-down <?php if ( Kirki::get_option( 'tm-finance', 'nav_gradient_bg' ) == 1 ) {
	     echo esc_attr( 'bg-gradient' );
     } ?>">
	<div class="container">
		<div class="row middle row-xs-center nav-content">
			<?php if ( Kirki::get_option( 'tm-finance', 'search_enable' ) == 1 ) { ?>
				<?php $class = 'col-md-11'; ?>
			<?php } else { ?>
				<?php $class = 'col-md-12'; ?>
			<?php } ?>
			<div class="<?php echo esc_attr( $class ); ?>">
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
			<?php if ( Kirki::get_option( 'tm-finance', 'search_enable' ) == 1 ) { ?>
				<div class="col-md-1 end align-right">
					<i class="fa fa-search search-btn"></i>
				</div>
			<?php } ?>
		</div>
	</div>
</nav><!-- #site-navigation -->
