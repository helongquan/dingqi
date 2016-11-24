<?php
/**
 * Initial setup
 * =============
 */
$new_vc_dir = get_template_directory() . '/inc/vc-template';
if ( function_exists( "vc_set_shortcodes_templates_dir" ) ) {
	vc_set_shortcodes_templates_dir( $new_vc_dir );
}

if ( class_exists( 'WPBakeryShortCode' ) ) {

	class WPBakeryShortCode_Thememove_Testimonial extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Skill extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_RoundedIcon extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_History extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_NewsUpdate extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_OurTeam extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_ProjectDetails extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_CountDown extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Button extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Projects extends WPBakeryShortCode {
	}

	class WPBakeryShortCode_Thememove_Gmaps extends WPBakeryShortCode {
		public function __construct( $settings ) {
			parent::__construct( $settings );
			$this->jsScripts();
		}

		public function jsScripts() {
			wp_enqueue_script( 'thememove-js-maps', 'http://maps.google.com/maps/api/js?sensor=false&amp;language=en' );
			wp_enqueue_script( 'thememove-js-gmap3', TM_FINANCE_THEME_ROOT . '/assets/libs/gmap3/gmap3.min.js' );
		}
	}
}
require_once get_template_directory() . '/inc/vc-maps/gmaps.php';
require_once get_template_directory() . '/inc/vc-maps/testimonial.php';
require_once get_template_directory() . '/inc/vc-maps/skill.php';
require_once get_template_directory() . '/inc/vc-maps/history.php';
require_once get_template_directory() . '/inc/vc-maps/roundedicon.php';
require_once get_template_directory() . '/inc/vc-maps/ourteam.php';
require_once get_template_directory() . '/inc/vc-maps/projectdetail.php';
require_once get_template_directory() . '/inc/vc-maps/countdown.php';
require_once get_template_directory() . '/inc/vc-maps/newsupdate.php';
require_once get_template_directory() . '/inc/vc-maps/button.php';
require_once get_template_directory() . '/inc/vc-maps/projects.php';

// disable auto update of VC
add_action( 'vc_before_init', 'disable_updater' );
function disable_updater() {
	vc_manager()->disableUpdater();
}