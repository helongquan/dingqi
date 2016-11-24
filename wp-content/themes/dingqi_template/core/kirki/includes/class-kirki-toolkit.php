<?php
/**
 * The main Kirki object
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2015, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Kirki_Toolkit' ) ) {
	final class Kirki_Toolkit {

		/** @var Kirki The only instance of this class */
		public static $instance = null;

		public static $version = '2.0.7';

		public $font_registry = null;
		public $scripts = null;
		public $api = null;
		public $styles = array();

		/**
		 * Access the single instance of this class
		 * @return Kirki
		 */
		public static function get_instance() {
			if ( null == self::$instance ) {
				self::$instance = new Kirki_Toolkit();
			}

			return self::$instance;
		}

		/**
		 * Shortcut method to get the translation strings
		 */
		public static function i18n() {

			$i18n = array(
				'background-color'      => esc_attr__( 'Background Color', 'tm-finance' ),
				'background-image'      => esc_attr__( 'Background Image', 'tm-finance' ),
				'no-repeat'             => esc_attr__( 'No Repeat', 'tm-finance' ),
				'repeat-all'            => esc_attr__( 'Repeat All', 'tm-finance' ),
				'repeat-x'              => esc_attr__( 'Repeat Horizontally', 'tm-finance' ),
				'repeat-y'              => esc_attr__( 'Repeat Vertically', 'tm-finance' ),
				'inherit'               => esc_attr__( 'Inherit', 'tm-finance' ),
				'background-repeat'     => esc_attr__( 'Background Repeat', 'tm-finance' ),
				'cover'                 => esc_attr__( 'Cover', 'tm-finance' ),
				'contain'               => esc_attr__( 'Contain', 'tm-finance' ),
				'background-size'       => esc_attr__( 'Background Size', 'tm-finance' ),
				'fixed'                 => esc_attr__( 'Fixed', 'tm-finance' ),
				'scroll'                => esc_attr__( 'Scroll', 'tm-finance' ),
				'background-attachment' => esc_attr__( 'Background Attachment', 'tm-finance' ),
				'left-top'              => esc_attr__( 'Left Top', 'tm-finance' ),
				'left-center'           => esc_attr__( 'Left Center', 'tm-finance' ),
				'left-bottom'           => esc_attr__( 'Left Bottom', 'tm-finance' ),
				'right-top'             => esc_attr__( 'Right Top', 'tm-finance' ),
				'right-center'          => esc_attr__( 'Right Center', 'tm-finance' ),
				'right-bottom'          => esc_attr__( 'Right Bottom', 'tm-finance' ),
				'center-top'            => esc_attr__( 'Center Top', 'tm-finance' ),
				'center-center'         => esc_attr__( 'Center Center', 'tm-finance' ),
				'center-bottom'         => esc_attr__( 'Center Bottom', 'tm-finance' ),
				'background-position'   => esc_attr__( 'Background Position', 'tm-finance' ),
				'background-opacity'    => esc_attr__( 'Background Opacity', 'tm-finance' ),
				'on'                    => esc_attr__( 'ON', 'tm-finance' ),
				'off'                   => esc_attr__( 'OFF', 'tm-finance' ),
				'all'                   => esc_attr__( 'All', 'tm-finance' ),
				'cyrillic'              => esc_attr__( 'Cyrillic', 'tm-finance' ),
				'cyrillic-ext'          => esc_attr__( 'Cyrillic Extended', 'tm-finance' ),
				'devanagari'            => esc_attr__( 'Devanagari', 'tm-finance' ),
				'greek'                 => esc_attr__( 'Greek', 'tm-finance' ),
				'greek-ext'             => esc_attr__( 'Greek Extended', 'tm-finance' ),
				'khmer'                 => esc_attr__( 'Khmer', 'tm-finance' ),
				'latin'                 => esc_attr__( 'Latin', 'tm-finance' ),
				'latin-ext'             => esc_attr__( 'Latin Extended', 'tm-finance' ),
				'vietnamese'            => esc_attr__( 'Vietnamese', 'tm-finance' ),
				'hebrew'                => esc_attr__( 'Hebrew', 'tm-finance' ),
				'arabic'                => esc_attr__( 'Arabic', 'tm-finance' ),
				'bengali'               => esc_attr__( 'Bengali', 'tm-finance' ),
				'gujarati'              => esc_attr__( 'Gujarati', 'tm-finance' ),
				'tamil'                 => esc_attr__( 'Tamil', 'tm-finance' ),
				'telugu'                => esc_attr__( 'Telugu', 'tm-finance' ),
				'thai'                  => esc_attr__( 'Thai', 'tm-finance' ),
				'serif'                 => _x( 'Serif', 'font style', 'tm-finance' ),
				'sans-serif'            => _x( 'Sans Serif', 'font style', 'tm-finance' ),
				'monospace'             => _x( 'Monospace', 'font style', 'tm-finance' ),
				'font-family'           => esc_attr__( 'Font Family', 'tm-finance' ),
				'font-size'             => esc_attr__( 'Font Size', 'tm-finance' ),
				'font-weight'           => esc_attr__( 'Font Weight', 'tm-finance' ),
				'line-height'           => esc_attr__( 'Line Height', 'tm-finance' ),
				'letter-spacing'        => esc_attr__( 'Letter Spacing', 'tm-finance' ),
				'top'                   => esc_attr__( 'Top', 'tm-finance' ),
				'bottom'                => esc_attr__( 'Bottom', 'tm-finance' ),
				'left'                  => esc_attr__( 'Left', 'tm-finance' ),
				'right'                 => esc_attr__( 'Right', 'tm-finance' ),
				'color'                 => esc_attr__( 'Color', 'tm-finance' ),
				'add-image'             => esc_attr__( 'Add Image', 'tm-finance' ),
				'change-image'          => esc_attr__( 'Change Image', 'tm-finance' ),
				'remove'                => esc_attr__( 'Remove', 'tm-finance' ),
				'no-image-selected'     => esc_attr__( 'No Image Selected', 'tm-finance' ),
			);

			$config = apply_filters( 'kirki/config', array() );

			if ( isset( $config['i18n'] ) ) {
				$i18n = wp_parse_args( $config['i18n'], $i18n );
			}

			return $i18n;

		}

		/**
		 * Shortcut method to get the font registry.
		 */
		public static function fonts() {
			return self::get_instance()->font_registry;
		}

		/**
		 * Constructor is private, should only be called by get_instance()
		 */
		private function __construct() {
		}

		/**
		 * Return true if we are debugging Kirki.
		 */
		public static function kirki_debug() {
			return (bool) ( defined( 'KIRKI_DEBUG' ) && KIRKI_DEBUG );
		}

		/**
		 * Take a path and return it clean
		 *
		 * @param string $path
		 *
		 * @return string
		 */
		public static function clean_file_path( $path ) {
			$path = str_replace( '', '', str_replace( array( "\\", "\\\\" ), '/', $path ) );
			if ( '/' === $path[ strlen( $path ) - 1 ] ) {
				$path = rtrim( $path, '/' );
			}

			return $path;
		}

		/**
		 * Determine if we're on a parent theme
		 *
		 * @param $file string
		 *
		 * @return bool
		 */
		public static function is_parent_theme( $file ) {
			$file = self::clean_file_path( $file );
			$dir  = self::clean_file_path( get_template_directory() );
			$file = str_replace( '//', '/', $file );
			$dir  = str_replace( '//', '/', $dir );
			if ( false !== strpos( $file, $dir ) ) {
				return true;
			}

			return false;
		}

		/**
		 * Determine if we're on a child theme.
		 *
		 * @param $file string
		 *
		 * @return bool
		 */
		public static function is_child_theme( $file ) {
			$file = self::clean_file_path( $file );
			$dir  = self::clean_file_path( get_stylesheet_directory() );
			$file = str_replace( '//', '/', $file );
			$dir  = str_replace( '//', '/', $dir );
			if ( false !== strpos( $file, $dir ) ) {
				return true;
			}

			return false;
		}

		/**
		 * Determine if we're running as a plugin
		 */
		private static function is_plugin() {
			if ( false !== strpos( self::clean_file_path( __FILE__ ), self::clean_file_path( get_stylesheet_directory() ) ) ) {
				return false;
			}
			if ( false !== strpos( self::clean_file_path( __FILE__ ), self::clean_file_path( get_template_directory_uri() ) ) ) {
				return false;
			}
			if ( false !== strpos( self::clean_file_path( __FILE__ ), self::clean_file_path( WP_CONTENT_DIR . '/themes/' ) ) ) {
				return false;
			}

			return true;
		}

		/**
		 * Determine if we're on a theme
		 *
		 * @param $file string
		 *
		 * @return bool
		 */
		public static function is_theme( $file ) {
			if ( true == self::is_child_theme( $file ) || true == self::is_parent_theme( $file ) ) {
				return true;
			}

			return false;
		}
	}
}
