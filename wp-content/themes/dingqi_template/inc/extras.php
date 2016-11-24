<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Infinity
 */

/**
 * Adds custom classes to the array of body classes.
 * ================================================
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
function tm_finance_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	global $tm_finance_custom_class;
	if ( $tm_finance_custom_class ) {
		$classes[] = $tm_finance_custom_class;
	}

	if ( Kirki::get_option( 'tm-finance', 'box_mode' ) == 1 ) {
		$classes[] = 'boxed';
	}

	$classes[] = Kirki::get_option( 'tm-finance', 'header_type' );

	global $tm_finance_page_layout_private;
	if ( $tm_finance_page_layout_private != 'default' && class_exists( 'cmb2_bootstrap_205' ) ) {
		$tm_finance_layout = get_post_meta( get_the_ID(), "tm_finance_page_layout_private", true );
	} else {
		$tm_finance_layout = Kirki::get_option( 'tm-finance', 'page_layout' );
	}

	$classes[] = $tm_finance_layout;

	if ( defined( 'TM_CORE_VERSION' ) ) {
		$classes[] = 'core_' . str_replace( ".", "", TM_CORE_VERSION );
	}

	return $classes;
}

add_filter( 'body_class', 'tm_finance_body_classes' );

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
	/**
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 * ==========================================================================
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep Optional separator.
	 *
	 * @return string The filtered title.
	 */
	function tm_finance_wp_title( $title, $sep ) {
		if ( is_feed() ) {
			return $title;
		}

		global $page, $paged;

		// Add the blog name.
		$title .= get_bloginfo( 'name', 'display' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= " $sep $site_description";
		}

		// Add a page number if necessary.
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title .= " $sep " . sprintf( __( 'Page %s', 'tm-finance' ), max( $paged, $page ) );
		}

		return $title;
	}

	add_filter( 'wp_title', 'tm_finance_wp_title', 10, 2 );

	/**
	 * Title shim for sites older than WordPress 4.1.
	 *
	 * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	 * @todo Remove this function when WordPress 4.3 is released.
	 */
	function tm_finance_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}

	add_action( 'wp_head', 'tm_finance_render_title' );
endif;

/***
 * Get mini cart HTML
 * ==================
 * @return string
 */
if ( class_exists( 'WooCommerce' ) ) {
	function tm_finance_minicart() {
		$cart_html = '';
		$qty       = WC()->cart->get_cart_contents_count();
		$cart_html .= '<div class="mini-cart__button" title="' . esc_html( __( 'View your shopping cart', 'tm-finance' ) ) . '">';
		$cart_html .= '<span class="mini-cart-icon"' . ' data-count="' . $qty . '"></span>';
		$cart_html .= '</div>';

		return $cart_html;
	}

	add_filter( 'woocommerce_add_to_cart_fragments', 'tm_finance_header_add_to_cart_fragment' );
}

/**
 * Ensure cart contents update when products are added to the cart via AJAX
 * ========================================================================
 *
 * @param $fragments
 *
 * @return mixed
 */
if ( class_exists( 'WooCommerce' ) ) {
	function tm_finance_header_add_to_cart_fragment( $fragments ) {
		ob_start();
		echo tm_finance_minicart();
		$fragments['.mini-cart__button'] = ob_get_clean();

		return $fragments;
	}
}

/**
 * Custom Comment Form
 * ========================================================================
 */
function tm_finance_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, $size = '100' ); ?>
		</div>
		<div class="comment-content">
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em><?php esc_html_e( 'Your comment is awaiting moderation.', 'tm-finance' ) ?></em>
				<br/>
			<?php endif; ?>
			<div class="metadata">
				<?php printf( __( '<cite class="fn">%s</cite>', 'tm-finance' ), get_comment_author_link() ) ?> <br/>
				<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
					<?php printf( __( '%1$s', 'tm-finance' ), get_comment_date(), get_comment_time() ) ?></a>
				<?php edit_comment_link( esc_html( __( '(Edit)', 'tm-finance' ), '  ', '' ) ) ?>
			</div>
			<?php comment_text() ?>
			<?php comment_reply_link( array_merge( $args, array(
				'depth'     => $depth,
				'max_depth' => $args['max_depth']
			) ) ) ?>
		</div>
	</div>
	<?php
}

/**
 * Pass a PHP string to Javasript variable
 **/
function tm_finance_esc_js( $string ) {
	return str_replace( "\n", '\n', str_replace( '"', '\"', addcslashes( str_replace( "\r", '', (string) $string ), "\0..\37" ) ) );
}

/**
 * Move comment field to bottom
 *
 * @param $fields
 *
 * @return mixed
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4', '>=' ) ) :
	function tm_finance_move_comment_field_to_bottom( $fields ) {
		$comment_field = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $comment_field;

		return $fields;
	}

	add_filter( 'comment_form_fields', 'tm_finance_move_comment_field_to_bottom' );
endif;

/**
 * TM Posts Widget
 * =============
 */
class TM_PostsWidget extends WP_Widget {

	function TM_PostsWidget() {
		parent::__construct( false, 'TM Posts Widget' );
	}

	function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$cat   = $instance['cat'];
		$style = $instance['style'];
		$num   = $instance['num'];
		echo wp_kses( $args['before_widget'], array(
			'aside' => array( 'id' => array(), 'class' => array() ),
			'div'   => array( 'id' => array(), 'class' => array() )
		) );
		if ( $cat == 'c1' ) {
			if ( ! empty( $title ) ) {
				echo wp_kses( $args['before_title'] . $title . $args['after_title'], array(
					'h3' => array( 'class' => array() )
				) );
			} else {
				echo wp_kses( $args['before_title'] . '&nbsp;' . $args['after_title'], array(
					'h3' => array( 'class' => array() )
				) );
			}
			$tmrp_args = array(
				'post_type'           => 'post',
				'ignore_sticky_posts' => 1,
				'posts_per_page'      => $num
			);
		} elseif ( $cat == 'c3' ) {
			if ( ! empty( $title ) ) {
				echo wp_kses( $args['before_title'] . $title . $args['after_title'], array(
					'h3' => array( 'class' => array() )
				) );
			} else {
				echo wp_kses( $args['before_title'] . '&nbsp;' . $args['after_title'], array(
					'h3' => array( 'class' => array() )
				) );
			}
			$sticky    = get_option( 'sticky_posts' );
			$tmrp_args = array(
				'post_type'      => 'post',
				'post__in'       => $sticky,
				'posts_per_page' => $num
			);
		} else {
			echo wp_kses( $args['before_title'] . '<a href="' . esc_url( get_catery_link( $cat ) ) . '" title="' . esc_attr( get_cat_name( $cat ) ) . '">' . get_cat_name( $cat ) . '</a>' . $args['after_title'], array(
				'h3' => array( 'class' => array() ),
				'a'  => array( 'href' => array(), 'title' => array() )
			) );
			$tmrp_args = array(
				'post_type'           => 'post',
				'cat'                 => $cat,
				'ignore_sticky_posts' => 1,
				'posts_per_page'      => $num
			);
		}
		$tmrp_query = new WP_Query( $tmrp_args );
		if ( $tmrp_query->have_posts() ) {
			while ( $tmrp_query->have_posts() ) {
				$tmrp_query->the_post();
				if ( $style == 2 ) {
					?>
					<div class="postswidget-list postswidget-list-style2">
						<div class="postswidget-info">
							<span class="title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_title(); ?>
								</a>
							</span>
							<span class="time">
								<?php the_time( 'M d, Y' ); ?>
							</span>
						</div>
					</div>
					<?php
				} else {
					?>
					<div class="postswidget-list postswidget-list-style1">
						<div class="postswidget-thumb">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail( array( 100, 70 ) );
							} ?>
						</div>
						<div class="postswidget-info">
						<span class="title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</span>
						</div>
					</div>
					<?php
				}
			}
		}
		wp_reset_postdata();
		echo wp_kses( $args['after_widget'], array(
			'aside' => array()
		) );
	}

	function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['style'] = ( ! empty( $new_instance['style'] ) ) ? strip_tags( $new_instance['style'] ) : '';
		$instance['cat']   = ( ! empty( $new_instance['cat'] ) ) ? strip_tags( $new_instance['cat'] ) : '';
		$instance['num']   = ( ! empty( $new_instance['num'] ) ) ? strip_tags( $new_instance['num'] ) : '';

		return $instance;
	}

	function form( $instance ) {
		if ( isset( $instance['title'] ) ) {
			$title = $instance['title'];
		} else {
			$title = __( 'New title', 'tm-finance' );
		}
		if ( isset( $instance['style'] ) ) {
			$style = $instance['style'];
		} else {
			$style = '1';
		}
		if ( isset( $instance['cat'] ) ) {
			$cat = $instance['cat'];
		} else {
			$cat = 'c1';
		}
		if ( isset( $instance['num'] ) ) {
			$num = $instance['num'];
		} else {
			$num = 5;
		}
		?>
		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'tm-finance' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
			       name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text"
			       value="<?php echo esc_attr( $title ); ?>"/>
		</p>
		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'style' ) ); ?>"><?php _e( 'Style:', 'tm-finance' ); ?></label>
			<select name="<?php echo esc_attr( $this->get_field_name( 'style' ) ); ?>">
				<option value="1" <?php if ( $style == 1 ) {
					echo 'selected';
				}; ?>>1
				</option>
				<option value="2" <?php if ( $style == 2 ) {
					echo 'selected';
				}; ?>>2
				</option>
			</select>
		</p>
		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'cat' ) ); ?>"><?php _e( 'Category:', 'tm-finance' ); ?></label>
			<select name="<?php echo esc_attr( $this->get_field_name( 'cat' ) ); ?>">
				<option value="c1" <?php
				if ( $cat == 'c1' ) {
					echo 'selected';
				}
				?>>Recent
				</option>
				<option value="c3" <?php
				if ( $cat == 'c3' ) {
					echo 'selected';
				}
				?>>Sticky
				</option>
				<?php
				$categories = get_categories( 'hide_empty=0' );
				if ( $categories ) {
					foreach ( $categories as $category ) {
						$sl = '';
						if ( $category->term_id == $cat ) {
							$sl = 'selected';
						}
						echo '<option value="' . esc_attr( $category->term_id ) . '" ' . $sl . '>' . __( 'Category: ', 'tm-finance' ) . $category->name . '</option>';
					}
				}
				?>
			</select>
		</p>
		<p>
			<label
				for="<?php echo esc_attr( $this->get_field_id( 'num' ) ); ?>"><?php _e( 'Number:', 'tm-finance' ); ?></label>
			<select name="<?php echo esc_attr( $this->get_field_name( 'num' ) ); ?>">
				<?php
				for ( $i = 1; $i <= 40; $i ++ ) {
					$sl = '';
					if ( $i == $num ) {
						$sl = 'selected';
					}
					echo '<option value="' . esc_attr( $i ) . '" ' . $sl . '>' . $i . '</option>';
				}
				?>
			</select>
		</p>
		<?php
	}
}

function TM_PostsWidget_init() {
	register_widget( 'TM_PostsWidget' );
}

add_action( 'widgets_init', 'TM_PostsWidget_init' );