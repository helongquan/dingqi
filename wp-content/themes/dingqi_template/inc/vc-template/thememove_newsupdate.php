<?php
extract( shortcode_atts( array(
	'type'  => '1',
	'num'   => '2',
	'char'  => '80',
	'class' => '',
), $atts ) );
$class = $this->getExtraClass( $class );
if ( $type == 1 ) {
	?>
	<div class="newsupdate newsupdate-type1 <?php echo esc_attr( $class ); ?>">
		<?php
		query_posts( array( 'post_type' => 'post', 'posts_per_page' => $num, 'orderby' => 'ID', 'order' => 'DESC' ) );
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				<div class="newsupdate-item">
					<?php echo get_the_post_thumbnail( get_the_ID(), array( 130, 110 ) );; ?>
					<div class="newsupdate-content">
						<?php the_title( sprintf( '<span class="newsupdate-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></span>' ); ?>
						<!--
						<span class="newsupdate-date primary_color"><i
								class="fa fa-clock-o"></i> <?php the_time( 'd M Y' ); ?></span>
								-->
						<span class="newsupdate-excerpt">
							<?php echo tm_finance_cut_string( get_the_excerpt(), intval( $char ) ); ?>
						</span>
					</div>
				</div>
				<?php
			}
		}
		wp_reset_query();
		?>
	</div>
<?php } elseif ( $type == 2 ) {
	?>
	<div class="newsupdate newsupdate-type2 row <?php echo esc_attr( $class ); ?>">
		<?php
		query_posts( array(
			'post_type'      => 'post',
			'posts_per_page' => $num,
			'orderby'        => 'ID',
			'order'          => 'DESC'
		) );
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				<div class="newsupdate-item col-lg-6 col-md-6">
					<div class="newsupdate-item-inner">
						<div class="newsupdate-thumb">
							<?php echo get_the_post_thumbnail( get_the_ID(), array( 270, 230 ) );; ?>
							<span class="newsupdate-date primary_bgcolor"><?php the_time( 'd' ); ?>
								<br/><?php the_time( 'M' ); ?></span>
						</div>
						<div class="newsupdate-content">
							<?php the_title( sprintf( '<span class="newsupdate-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></span>' ); ?>
							<span class="newsupdate-excerpt">
							<?php echo tm_finance_cut_string( get_the_excerpt(), intval( $char ) ); ?>
						</span>
							<span class="newsupdate-more">
								<a class="primary_color"
								   href="<?php echo esc_url( get_permalink() ); ?>"><?php echo __( 'Read More', 'tm-finance' ); ?></a>
							</span>
						</div>
					</div>
				</div>
				<?php
			}
		}
		wp_reset_query();
		?>
	</div>
	<?php
} elseif ( $type == 3 ) {
	?>
	<div class="newsupdate newsupdate-type3 row <?php echo esc_attr( $class ); ?>">
		<?php
		query_posts( array(
			'post_type'      => 'post',
			'posts_per_page' => $num,
			'orderby'        => 'ID',
			'order'          => 'DESC'
		) );
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				<div class="newsupdate-item col-lg-3 col-md-3">
					<div class="newsupdate-item-inner">
						<div class="newsupdate-thumb">
							<?php echo get_the_post_thumbnail( get_the_ID(), array( 270, 200 ) );; ?>
						</div>
						<div class="newsupdate-content">
							<span class="newsupdate-date primary_color">
								<i class="fa fa-clock-o"></i> <?php the_time( 'd M Y' ); ?>
							</span>
							<?php the_title( sprintf( '<span class="newsupdate-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></span>' ); ?>
						</div>
					</div>
				</div>
				<?php
			}
		}
		wp_reset_query();
		?>
	</div>
	<?php
} else {

}
?>