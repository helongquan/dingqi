<?php
/**
 * Infinity functions and definitions
 *
 * @package Infinity
 */
if ( ! function_exists( 'tm_finance_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 * ===========================================================================
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tm_finance_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Infinity, use a find and replace
		 * to change 'tm-finance' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'tm-finance', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'tm-finance-post-thumb', 848, 450, true );
		add_image_size( 'tm-finance-small-thumb', 120, 90, true );
		add_image_size( 'tm-finance-medium-thumb', 370, 220, true );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary'      => esc_html( __( 'Primary Menu', 'tm-finance' ) ),
			'social'       => esc_html( __( 'Social Menu', 'tm-finance' ) ),
			'footersocial' => esc_html( __( 'Footer Social Menu', 'tm-finance' ) ),
			'top'          => esc_html( __( 'Top Menu', 'tm-finance' ) )
		) );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'tm_finance_custom_background_args', array(
			'default-color' => '#ffffff',
			'default-image' => '',
		) ) );
		// Support woocommerce
		add_theme_support( 'woocommerce' );
	}
endif; // tm_finance_setup
add_action( 'after_setup_theme', 'tm_finance_setup' );
/**
 * Define Constants
 * ================
 */
define( 'TM_FINANCE_HOME', esc_url( get_home_url() ) );
define( 'TM_FINANCE_THEME_ROOT', esc_url( get_template_directory_uri() ) );
define( 'TM_FINANCE_PARENT_THEME_NAME', wp_get_theme( get_template() )->get( 'Name' ) );
define( 'TM_FINANCE_PARENT_THEME_VERSION', wp_get_theme( get_template() )->get( 'Version' ) );
define( 'TM_FINANCE_PRIMARY_COLOR', '#3768B4' );
define( 'TM_FINANCE_SECONDARY_COLOR', '#222222' );
define( 'TM_FINANCE_PRIMARY_FONT', 'Roboto' );
define( 'TM_FINANCE_SECONDARY_FONT', 'Roboto' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * ===========================================================================
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}
/**
 * Register widget area.
 * ====================
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function tm_finance_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( __( 'Sidebar', 'tm-finance' ) ),
		'id'            => 'sidebar-1',
		'description'   => esc_html( __( 'Main sidebar', 'tm-finance' ) ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );
	register_sidebar( array(
		'name'          => esc_html( __( 'Top Slider', 'tm-finance' ) ),
		'id'            => 'top-slider',
		'description'   => esc_html( __( 'Top slider for special skins', 'tm-finance' ) ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );
	register_sidebar( array(
		'name'          => esc_html( __( 'Header 01 Info', 'tm-finance' ) ),
		'id'            => 'header01-info',
		'description'   => esc_html( __( 'Header info for special skins', 'tm-finance' ) ),
		'before_widget' => '<aside id="%1$s" class="widget header01-info %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );
	register_sidebar( array(
		'name'          => esc_html( __( 'Header 02 Info', 'tm-finance' ) ),
		'id'            => 'header02-info',
		'description'   => esc_html( __( 'Header info for special skins', 'tm-finance' ) ),
		'before_widget' => '<aside id="%1$s" class="widget header02-info %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );
	register_sidebar( array(
		'name'          => esc_html( __( 'Header 03 Info', 'tm-finance' ) ),
		'id'            => 'header03-info',
		'description'   => esc_html( __( 'Header info for special skins', 'tm-finance' ) ),
		'before_widget' => '<aside id="%1$s" class="widget header03-info %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );
	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar( array(
			'name'          => esc_html( __( 'Sidebar for Shop', 'tm-finance' ) ),
			'id'            => 'sidebar-shop',
			'description'   => esc_html( __( 'Sidebar for all shop pages', 'tm-finance' ) ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		) );
	}
	register_sidebar( array(
		'name'          => esc_html( __( 'Footer 1 Widget Area', 'tm-finance' ) ),
		'id'            => 'footer',
		'description'   => esc_html( __( 'Footer column 1', 'tm-finance' ) ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html( __( 'Footer 2 Widget Area', 'tm-finance' ) ),
		'id'            => 'footer2',
		'description'   => esc_html( __( 'Footer column 2', 'tm-finance' ) ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html( __( 'Footer 3 Widget Area', 'tm-finance' ) ),
		'id'            => 'footer3',
		'description'   => esc_html( __( 'Footer column 3', 'tm-finance' ) ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html( __( 'Footer 4 Widget Area', 'tm-finance' ) ),
		'id'            => 'footer4',
		'description'   => esc_html( __( 'Footer column 4', 'tm-finance' ) ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'tm_finance_widgets_init' );
/**
 * Enqueue scripts and styles.
 * ==========================
 */
function tm_finance_scripts() {
	wp_enqueue_style( 'tm-finance-style', TM_FINANCE_THEME_ROOT . '/style.css' );
	wp_enqueue_style( 'tm-finance-main', TM_FINANCE_THEME_ROOT . '/assets/css/output/main-ltr.css' );
	wp_enqueue_style( 'tm-finance-font-awesome', TM_FINANCE_THEME_ROOT . '/assets/libs/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'pe-icon-7-stroke', TM_FINANCE_THEME_ROOT . '/assets/libs/pe-icon-7-stroke/css/pe-icon-7-stroke.css' );
	wp_enqueue_style( 'magnific-popup', TM_FINANCE_THEME_ROOT . '/assets/libs/magnific-popup/magnific-popup.css' );
	if ( Kirki::get_option( 'tm-finance', 'nav_sticky_enable' ) == 1 ) {
		wp_enqueue_script( 'head-room-jquery', TM_FINANCE_THEME_ROOT . '/assets/libs/headroom/jQuery.headroom.min.js', array( 'jquery' ), TM_FINANCE_PARENT_THEME_VERSION, true );
		wp_enqueue_script( 'head-room', TM_FINANCE_THEME_ROOT . '/assets/libs/headroom/headroom.min.js', array( 'jquery' ), TM_FINANCE_PARENT_THEME_VERSION, true );
	}
	wp_enqueue_script( 'waypoints', TM_FINANCE_THEME_ROOT . '/assets/libs/waypoints/waypoints.min.js', array( 'jquery' ), TM_FINANCE_PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'counterup', TM_FINANCE_THEME_ROOT . '/assets/libs/waypoints/jquery.counterup.min.js', array( 'jquery' ), TM_FINANCE_PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'matchheight', TM_FINANCE_THEME_ROOT . '/assets/libs/matchheight/jquery.matchHeight.js', array( 'jquery' ), TM_FINANCE_PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'owl-carousel', TM_FINANCE_THEME_ROOT . '/assets/libs/owl-carousel/owl.carousel.min.js', array( 'jquery' ), TM_FINANCE_PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'countdown', TM_FINANCE_THEME_ROOT . '/assets/libs/countdown/jquery.countdown.js', array( 'jquery' ), TM_FINANCE_PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'magnific-popup', TM_FINANCE_THEME_ROOT . '/assets/libs/magnific-popup/jquery.magnific-popup.min.js', array( 'jquery' ), TM_FINANCE_PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'tm-finance-js-main', TM_FINANCE_THEME_ROOT . '/assets/js/main.js', array( 'jquery' ), TM_FINANCE_PARENT_THEME_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'tm_finance_scripts' );
/**
 * Setup custom css.
 * ================
 */
function tm_finance_custom_css() {
	$tm_finance_custom_css = Kirki::get_option( 'tm-finance', 'custom_css' );
	if ( Kirki::get_option( 'tm-finance', 'custom_css_enable' ) == 1 ) {
		wp_add_inline_style( 'tm-finance-main', html_entity_decode( $tm_finance_custom_css, ENT_QUOTES ) );
	}
}

add_action( 'wp_enqueue_scripts', 'tm_finance_custom_css' );
/**
 * Implement other setup.
 * ======================
 */
// Load core
require_once get_template_directory() . '/core/core.php';
require_once get_template_directory() . '/inc/customizer/customizer.php';
require_once get_template_directory() . '/inc/oneclick.php';
// Theme Hook Alliance
require_once get_template_directory() . '/inc/tha-theme-hooks.php';
// Load tmg
require_once get_template_directory() . '/inc/tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/tgm-plugin-registration.php';
// Load metabox
require_once get_template_directory() . '/inc/meta-box.php';
// Load custom js
require_once get_template_directory() . '/inc/custom-js.php';
// Load custom header
require_once get_template_directory() . '/inc/custom-header.php';
// Custom template tags for this theme.
require_once get_template_directory() . '/inc/template-tags.php';
// Custom functions that act independently of the theme templates.
require_once get_template_directory() . '/inc/extras.php';
// Load Jetpack compatibility file.
require_once get_template_directory() . '/inc/jetpack.php';
// Support shortcode in widget
add_filter( 'widget_text', 'do_shortcode' );
// Remove admin notification of Projects
if ( class_exists( 'Projects_Admin' ) ) {
	global $projects;
	remove_action( 'admin_notices', array( $projects->admin, 'configuration_admin_notice' ) );
}
if ( is_admin() && class_exists( 'Essential_Grid_Admin' ) ) {
	remove_action( 'admin_notices', array( Essential_Grid_Admin::get_instance(), 'add_activate_notification' ) );
}
if ( is_admin() && class_exists( 'RevSliderAdmin' ) && isset( $productAdmin ) ) {
	remove_action( 'admin_notices', array( $productAdmin, 'addActivateNotification' ) );
}
if ( is_admin() && function_exists( 'vc_manager' ) ) {
	add_action( 'admin_print_scripts-post.php', 'tm_finance_vc_remove_notice', 15 );
	function tm_finance_vc_remove_notice() {
		remove_action( 'admin_notices', array( vc_manager()->license(), 'adminNoticeLicenseActivation', ) );
	}
}
// Extend VC
if ( class_exists( 'WPBakeryVisualComposerAbstract' ) ) {
	function tm_finance_requireVcExtend() {
		require get_template_directory() . '/inc/vc-extend.php';
	}

	add_action( 'init', 'tm_finance_requireVcExtend', 2 );
}

class TM_Finance_Walker_Nav_Menu extends Walker_Nav_Menu {
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent    = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		$children  = get_posts( array(
			'post_type'   => 'nav_menu_item',
			'nopaging'    => true,
			'numberposts' => 1,
			'meta_key'    => '_menu_item_menu_item_parent',
			'meta_value'  => $item->ID
		) );
		foreach ( $children as $child ) {
			$obj = get_post_meta( $child->ID, '_menu_item_object' );
			if ( $obj[0] == 'tm_mega_menu' ) {
				$classes[] = apply_filters( 'thememove_mega_menu_css_class', 'mega-menu', $item, $args, $depth );
			}
		}
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		$id          = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
		$id          = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		$output .= $indent . '<li' . $id . $class_names . '>';
		$atts           = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
		$atts['href']   = ! empty( $item->url ) ? $item->url : '';
		$atts           = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
		$attributes     = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}
		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '><span data-hover="';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '">';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</span></a>';
		$item_output .= $args->after;
		if ( $item->object == 'tm_mega_menu' ) {
			$menu_post               = get_post( $item->object_id );
			$mega_menu_content_class = apply_filters( 'thememove_mega_menu_content_css_class', 'mega-menu-content', $item, $args, $depth );
			$output .= '<div class="' . esc_attr( $mega_menu_content_class ) . '">' . do_shortcode( $menu_post->post_content ) . '</div>';
		} else {
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}
}

add_action( 'admin_bar_menu', 'tm_finance_toolbar_links', 100 );
function tm_finance_toolbar_links( $wp_admin_bar ) {
	$wp_admin_bar->add_node( array(
		'id'    => 'tm_finance',
		'title' => '<span class="ab-icon"></span> ' . TM_FINANCE_PARENT_THEME_NAME . ' (v' . TM_FINANCE_PARENT_THEME_VERSION . ') ',
		'href'  => '#',
		'meta'  => array( 'class' => 'tm_finance_menu' )
	) );
	$wp_admin_bar->add_node( array(
		'id'     => 'tm_finance_customize',
		'parent' => 'tm_finance',
		'title'  => __( 'Customize', 'tm-finance' ),
		'href'   => admin_url( 'customize.php' )
	) );
	$wp_admin_bar->add_node( array(
		'id'     => 'tm_finance_support',
		'parent' => 'tm_finance',
		'title'  => __( 'Need Support?', 'tm-finance' ),
		'href'   => 'http://support.thememove.com',
		'meta'   => array( 'target' => '_blank' )
	) );
	$wp_admin_bar->remove_node( 'customize' );
	?>
	<style>
		.tm_finance_menu > a {
			background-color: #eb4723 !important;
			color: #ffffff !important
		}

		.tm_finance_menu > a:hover {
			background-color: #0073aa !important;
			color: #ffffff !important
		}

		.tm_finance_menu > a > .ab-icon:before {
			content: "\f540";
			top: 2px;
			color: #ffffff !important
		}

		.tm_notice {
			padding: 0px;
			margin: 40px 20px 20px 0;
			position: relative;
			overflow: hidden;
			display: block;
			border: 1px solid #e5e5e5;
			box-shadow: 0 1px 1px rgba(0, 0, 0, .04);
			background: #fff;
		}

		.tm_notice:before {
			content: '';
			width: 80px;
			height: 100%;
			background: #85B200;
			position: absolute;
			top: 0;
			left: 0;
			z-index: 998;
		}

		.tm_notice:after {
			content: "\f155";
			display: inline-block;
			width: 20px;
			height: 20px;
			font-size: 20px;
			line-height: 1;
			font-family: dashicons;
			position: absolute;
			top: 25px;
			left: 30px;
			color: #FFFFFF;
			z-index: 999;
		}

		.tm_notice_inner {
			padding: 10px 10px 10px 90px;
		}

		.tm_notice_hide {
			position: absolute;
			top: -1px;
			right: -1px;
			z-index: 999;
			display: none;
		}

		.tm_notice:hover .tm_notice_hide {
			display: block;
		}

		.tm_notice_hide input[type="submit"] {
			margin: 0;
			border-radius: 0;
			border: 1px solid #e5e5e5;
			outline: none;
			background: #ffffff;
			color: #777777;
			font-size: 13px;
			padding: 6px 10px;
			cursor: pointer;
		}

		.tm_notice_hide input[type="submit"]:hover {
			color: #ff6600;
		}
	</style>
	<?php
}

add_action( 'admin_notices', 'tm_finance_admin_notice' );
function tm_finance_admin_notice() {
	if ( isset( $_POST['tm_allow_tracking'] ) ) {
		if ( $_POST['tm_allow_tracking'] == __( 'No', 'tm-finance' ) ) {
			update_option( 'tm_allow_tracking', '0' );
		} else {
			update_option( 'tm_allow_tracking', '1' );
		}
	}
	if ( get_option( 'tm_allow_tracking', '2' ) == '2' ) {
		?>
		<div class="updated">
			<p>
				<?php _e( 'You\'re using the theme', 'tm-finance' ); ?>
				<strong><?php echo TM_FINANCE_PARENT_THEME_NAME . ' (' . TM_FINANCE_PARENT_THEME_VERSION . ')'; ?></strong>.
				<br/><?php _e( 'You want your website to get a better performance with TM Finance, don\'t you?<br/>If you say yes, we will collect your website URL then proactively monitor and contact you if we find any issue in your website.', 'tm-finance' ); ?>
			<form action="" method="POST">
				<input type="submit" name="tm_allow_tracking" class="button button-primary"
				       value="<?php _e( 'Yes, I accept', 'tm-finance' ); ?>"/>
				<input type="submit" name="tm_allow_tracking" class="button"
				       value="<?php _e( 'No', 'tm-finance' ); ?>"/>
			</form>
			</p>
		</div>
		<?php
	} else {
		if ( isset( $_POST['tm_allow_tracking'] ) ) {
			?>
			<div class="updated">
				<p><?php _e( 'Thanks for your choosed!', 'tm-finance' ); ?></p>
			</div>
			<?php if ( get_option( 'tm_allow_tracking', '2' ) == '1' ) {
				?>
				<script>
					jQuery(document).ready(function () {
						jQuery.get("http://finance.thememove.com?tracking=<?php echo urlencode( get_home_url() );?>");
					});
				</script>
				<?php
			}
			?>
			<?php
		}
	}
}

add_action( 'admin_notices', 'tm_finance_rate_notice' );
function tm_finance_rate_notice() {
	if ( isset( $_POST['tm_hide_rate'] ) && ( $_POST['tm_hide_rate'] == 1 ) ) {
		update_option( 'tm_hide_rate', '1' );
	}
	if ( get_option( 'tm_hide_rate', '0' ) != '1' ) {
		?>
		<div class="tm_notice">
			<div style="margin-left: 100px"><h3>欢迎来到普罗米修律师事务所！</h3></div>
		</div>
		<?php
	}
}

function tm_finance_projects_fields( $fields ) {
	$fields['date'] = array(
		'name'        => __( 'Date', 'tm-finance' ),
		'description' => __( 'Enter the date of this project.', 'tm-finance' ),
		'type'        => 'text',
		'default'     => '',
		'section'     => 'info'
	);

	return $fields;
}

add_filter( 'projects_custom_fields', 'tm_finance_projects_fields' );
if ( class_exists( 'WooCommerce' ) ) {
	remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
	add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
	/**
	 * WooCommerce Loop Product Thumbs
	 **/
	if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
		function woocommerce_template_loop_product_thumbnail() {
			echo woocommerce_get_product_thumbnail();
		}
	}
	/**
	 * WooCommerce Product Thumbnail
	 **/
	if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {
		function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $placeholder_width = 0, $placeholder_height = 0 ) {
			global $post;
			$isize = wc_get_image_size( $size );
			if ( ! $placeholder_width ) {
				$placeholder_width = $isize['width'];
			}
			if ( ! $placeholder_height ) {
				$placeholder_height = $isize['height'];
			}
			$output = '<div class="product-image">';
			if ( has_post_thumbnail() ) {
				$output .= get_the_post_thumbnail( $post->ID, $size );
			} else {
				$output .= '<img src="' . wc_placeholder_img_src() . '" alt="Placeholder" width="' . $placeholder_width . '" height="' . $placeholder_height . '" />';
			}
			$output .= '</div>';

			return $output;
		}
	}
	add_filter( 'woocommerce_output_related_products_args', 'tm_finance_related_products_args' );
	function tm_finance_related_products_args( $args ) {
		$args['posts_per_page'] = 3;
		$args['columns']        = 3;

		return $args;
	}
}
// TM Core Functions
if ( ! function_exists( 'infinity_base_encode' ) ) {
	function infinity_base_encode( $data ) {
		return $data;
	}
}
if ( ! function_exists( 'infinity_base_decode' ) ) {
	function infinity_base_decode( $data ) {
		return $data;
	}
}
if ( ! function_exists( 'is_tree' ) ) {
	function is_tree( $pid ) {
		global $post;
		if ( is_page() && ( $post->post_parent == $pid || is_page( $pid ) ) ) {
			return true;
		} else {
			return false;
		}
	}
}
function tm_finance_search_filter( $query ) {
	if ( is_search() && ( ! isset( $query->query_vars['post_type'] ) ) ) {
		$query->set( 'post_type', array( 'post' ) );
	}
}

add_action( 'pre_get_posts', 'tm_finance_search_filter' );

add_action( 'init', 'tm_finance_remove_vc_tgm_update_notice' );
function tm_finance_remove_vc_tgm_update_notice() {
	global $vc_manager;
	if ( ! empty( $vc_manager ) ) {
		$updater = $vc_manager->updater();
		remove_filter( 'upgrader_pre_download', array( $updater, 'preUpgradeFilter' ), 10 );
	}
}

function tm_finance_cut_string( $str, $length, $char = "..." ) {
	$strlen = mb_strlen( $str, "UTF-8" );
	if ( $strlen <= $length ) {
		return $str;
	}
	$substr = mb_substr( $str, 0, $length, "UTF-8" );
	if ( mb_substr( $str, $length, 1, "UTF-8" ) == " " ) {
		return $substr . $char;
	}
	$strPoint = mb_strrpos( $substr, " ", "UTF-8" );
	if ( $strPoint < $length - 20 ) {
		return $substr . $char;
	} else {
		return mb_substr( $substr, 0, $strPoint, "UTF-8" ) . $char;
	}
}

add_filter( 'demo_options_settings', function ( $settings ) {
	$op = '.primary_color{color: $value !important} .header02 .main-navigation .menu > li > a{color: $value !important} .amount{color: $value !important} .popup-search-close:hover{color: $value !important} .site-header .social-menu ul li:hover a:before{color: $value !important} a:hover{color: $value !important} a:hover h1{color: $value !important} a:hover h2{color: $value !important} a:hover h3{color: $value !important} a:hover h4{color: $value !important} a:hover h5{color: $value !important} a:hover h6{color: $value !important} .site-footer a:hover{color: $value !important} .site-top a:hover{color: $value !important} .wpb-js-composer .eg-tm-service-02-element-33{color: $value !important} .wpb-js-composer .eg-tm-service-02-element-36{color: $value !important} .tm-ourhistory ul li strong:before{color: $value !important} .tm-ourhistory2 ul li strong:before{color: $value !important} .esg-entry-content .eg-tm-services-03-element-33{color: $value !important} .better-menu-widget .current-menu-item a{color: $value !important} .better-menu-widget .current_page_item a{color: $value !important} .tm-list ul li:before{color: $value !important} .tm-list2 ul li:before{color: $value !important} .widget_product_categories li.current-cat a{color: $value !important} .hentry .entry-meta a{color: $value !important} .widget_categories li.current-cat a{color: $value !important} .countdown .number{color: $value !important} .content404 .icon i{color: $value !important} .tm-list-2 ul li:before{color: $value !important} .tm-ourhistory ul li:before{color: $value !important} .tm-ourhistory2 ul li:before{color: $value !important}';
	$op .= '.primary_bgcolor{background-color: $value !important} .header02 .site-header .social-menu ul li{background-color: $value !important} input[type="submit"]{background-color: $value !important} .site-content input[type="submit"]{background-color: $value !important} .products .product-item .add_to_cart_button:hover{background-color: $value !important} .products .product-item .ajax_add_to_cart:hover{background-color: $value !important} .ourteam-type3 .ourteam-info .ourteam-socials .icon:hover{background-color: $value !important} .header01 .site-header .social-menu ul li:hover{background-color: $value !important} .testimonials-style3 .owl-item:before{background-color: $value !important} .testimonials-style4 .owl-item:before{background-color: $value !important} .testimonials-style5 .owl-item:before{background-color: $value !important} .testimonials-style6 .owl-item:before{background-color: $value !important} .testimonials-style7 .owl-item:before{background-color: $value !important} .projects-style1 .projects-item .projects-title a:hover{background-color: $value !important} .ourteam-type2 .ourteam-info .ourteam-socials .icon:hover{background-color: $value !important} #tm-services-01 li .esg-media-cover-wrapper .esg-entry-content .esg-content:first-child{background-color: $value !important} .products .product-item .onsale{background-color: $value !important} .single-product .product .cart .single_add_to_cart_button{background-color: $value !important} .single-product .product .cart .single_add_to_cart_button:hover{background-color: $value !important} .post-thumb .dates{background-color: $value !important} .hentry .entry-footer .read-more:hover{background-color: $value !important} .hentry .share a i:hover:before{background-color: $value !important} .tm-getconnected .social-menu .menu li:hover{background-color: $value !important} .woocommerce .widget_price_filter .ui-slider .ui-slider-range{background-color: $value !important} .woocommerce .widget_price_filter .price_slider_amount .button:hover{background-color: $value !important} .woocommerce table.shop_table thead{background-color: $value !important} .woocommerce .cart_totals .wc-proceed-to-checkout .checkout-button{background-color: $value !important}';
	$op .= '.primary_bdcolor{border-color: $value !important} input[type="submit"]{border-color: $value !important} .site-content input[type="submit"]{border-color: $value !important} .vc_tta.tm-accordion .vc_tta-panels .vc_tta-panel.vc_active .vc_tta-panel-heading{border-color: $value !important} .vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a{border-color: $value !important} .woocommerce div.product .woocommerce-tabs ul.tabs li.active{border-color: $value !important} .hentry .entry-footer .read-more:hover{border-color: $value !important} .countdown .number{border-color: $value !important} .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{border-color: $value !important} .woocommerce .widget_price_filter .price_slider_amount .button:hover{border-color: $value !important} .sidebar ul li.current-menu-item{border-color: $value !important}';
	$op .= '.tm-btn1:hover, .tm-btn2:hover, .tm-btn3:hover, .tm-btn4:hover, .tm-btn5:hover, .tm-btn6:hover {color: $value !important; border-color: $value !important; background: none !important}';

	return array_merge( $settings, array(
		array(
			'id'       => 'tm_finance_custom',
			'label'    => 'Custom',
			'settings' => array(
				array(
					'settings'  => 'color_preset',
					'type'      => 'colorpattern',
					'label'     => 'Primary Color',
					'transport' => 'postMessage',
					'default'   => 'red',
					'choices'   => array(
						'#3768B4' => '#3768B4',
						'#F43837' => '#F43837',
						'#13929E' => '#13929E',
						'#ED9F17' => '#ED9F17',
						'#3E923A' => '#3E923A',
						'#883B81' => '#883B81',
						'#EC6420' => '#EC6420',
						'#47AFE8' => '#47AFE8',
						'#8A3D28' => '#8A3D28',
						'#BBA16C' => '#BBA16C',
						'#1EC3A4' => '#1EC3A4',
						'#96B2B7' => '#96B2B7',
					),
					'output'    => $op
				),
				array(
					'settings'  => 'primary_color',
					'type'      => 'color',
					'label'     => 'Color Picker',
					'transport' => 'postMessage',
					'default'   => '#3768B4',
					'value'     => '#3768B4',
					'output'    => $op
				),
				array(
					'settings'  => 'header',
					'type'      => 'dropdown',
					'label'     => 'Header Style',
					'transport' => 'reload',
					'reload'    => 'page',
					'default'   => '/homepage-02/?preset=1',
					'choices'   => array(
						TM_FINANCE_HOME . '/homepage-01/?preset=1' => 'Header 01',
						TM_FINANCE_HOME . '/homepage-02/?preset=2' => 'Header 02',
						TM_FINANCE_HOME . '/homepage-03/?preset=3' => 'Header 03',
						TM_FINANCE_HOME . '/homepage-04/?preset=4' => 'Header 04',
						TM_FINANCE_HOME . '/homepage-04/?preset=5' => 'Header 05',
						TM_FINANCE_HOME . '/homepage-05/?preset=6' => 'Header 06'
					),
				),
				array(
					'settings'  => 'box_mode',
					'type'      => 'buttonset',
					'label'     => 'Layout',
					'transport' => 'reload',
					'reload'    => 'param',
					'default'   => '0',
					'choices'   => array(
						'1' => 'Boxed',
						'0' => 'Wide',
					)
				),
				array(
					'settings'  => 'background_pattern',
					'type'      => 'imagepattern',
					'label'     => 'Background Pattern',
					'transport' => 'postMessage',
					'default'   => '',
					'choices'   => array(
						DEMO_OPTIONS_URL . 'assets/patterns/1.png'  => DEMO_OPTIONS_URL . 'assets/patterns/1.png',
						DEMO_OPTIONS_URL . 'assets/patterns/2.png'  => DEMO_OPTIONS_URL . 'assets/patterns/2.png',
						DEMO_OPTIONS_URL . 'assets/patterns/3.png'  => DEMO_OPTIONS_URL . 'assets/patterns/3.png',
						DEMO_OPTIONS_URL . 'assets/patterns/4.png'  => DEMO_OPTIONS_URL . 'assets/patterns/4.png',
						DEMO_OPTIONS_URL . 'assets/patterns/5.png'  => DEMO_OPTIONS_URL . 'assets/patterns/5.png',
						DEMO_OPTIONS_URL . 'assets/patterns/6.png'  => DEMO_OPTIONS_URL . 'assets/patterns/6.png',
						DEMO_OPTIONS_URL . 'assets/patterns/7.png'  => DEMO_OPTIONS_URL . 'assets/patterns/7.png',
						DEMO_OPTIONS_URL . 'assets/patterns/8.png'  => DEMO_OPTIONS_URL . 'assets/patterns/8.png',
						DEMO_OPTIONS_URL . 'assets/patterns/9.png'  => DEMO_OPTIONS_URL . 'assets/patterns/9.png',
						DEMO_OPTIONS_URL . 'assets/patterns/11.png' => DEMO_OPTIONS_URL . 'assets/patterns/11.png',
						DEMO_OPTIONS_URL . 'assets/patterns/12.png' => DEMO_OPTIONS_URL . 'assets/patterns/12.png',
						DEMO_OPTIONS_URL . 'assets/patterns/13.png' => DEMO_OPTIONS_URL . 'assets/patterns/13.png',
					),
					'output'    => 'body {background-image: url("$value"); background-size:auto; background-repeat: repeat; background-attachment: fixed;}',
				),
				array(
					'settings'  => 'background_pattern',
					'type'      => 'imagepattern',
					'label'     => 'Background Image',
					'transport' => 'postMessage',
					'default'   => '',
					'choices'   => array(
						DEMO_OPTIONS_URL . 'assets/patterns/bg1.jpg' => DEMO_OPTIONS_URL . 'assets/patterns/bg1.jpg',
						DEMO_OPTIONS_URL . 'assets/patterns/bg2.jpg' => DEMO_OPTIONS_URL . 'assets/patterns/bg2.jpg',
						DEMO_OPTIONS_URL . 'assets/patterns/bg3.jpg' => DEMO_OPTIONS_URL . 'assets/patterns/bg3.jpg',
						DEMO_OPTIONS_URL . 'assets/patterns/bg4.jpg' => DEMO_OPTIONS_URL . 'assets/patterns/bg4.jpg',
					),
					'output'    => 'body {background-image: url("$value"); background-size:cover; background-repeat: no-repeat; background-attachment: fixed;}',
				),
			)
		)
	) );
} );