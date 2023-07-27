<?php
/**
 * Public Class
 *
 * @package     Wow_Plugin
 * @subpackage  Public
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

namespace modal_window_pro;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Wow_Plugin_Public {

	private $info;

	public function __construct( $info ) {

		$this->plugin = $info['plugin'];
		$this->url    = $info['url'];
		$this->rating = $info['rating'];

		add_shortcode( 'Wow-Modal-Windows-Pro', array( $this, 'shortcode' ) );
		add_shortcode( $this->plugin['shortcode'], array( $this, 'shortcode' ) );

		add_shortcode( 'videoBox', array( $this, 'video_shortcode' ) );
		add_shortcode( 'buttonBox', array( $this, 'button_shortcode' ) );
		add_shortcode( 'iframeBox', array( $this, 'iframe_shortcode' ) );

		// Shortcodes for columns
		add_shortcode( 'w-row', array( $this, 'shortcode_row' ) );
		add_shortcode( 'w-column', array( $this, 'shortcode_columns' ) );

		// shortcode for icon
		add_shortcode( 'wow-icon', array( $this, 'shortcode_icon' ) );

		add_action( 'wp_footer', array( $this, 'display' ) );

		// Form
		if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
			add_action( 'wp_ajax_send_modal_window', array( $this, 'send_modal_window' ) );
			add_action( 'wp_ajax_nopriv_send_modal_window', array( $this, 'send_modal_window' ) );
		}

	}

	function shortcode( $atts ) {
		ob_start();
		require plugin_dir_path( __FILE__ ) . 'shortcode.php';
		$shortcode = ob_get_contents();
		ob_end_clean();

		return $shortcode;
	}

	function shortcode_icon( $atts ) {
		ob_start();
		require plugin_dir_path( __FILE__ ) . 'shortcode_icon.php';
		$shortcode = ob_get_contents();
		ob_end_clean();

		return $shortcode;
	}

	function shortcode_row( $atts, $content = null ) {
		return '<div class="wow-col">' . do_shortcode( $content ) . '</div>';
	}

	function shortcode_columns( $atts, $content = null ) {
		extract( shortcode_atts( array( 'width' => "", 'align' => '' ), $atts ) );
		$width = ! empty( $width ) ? $width : '12';
		$align = ! empty( $align ) ? $align : 'left';

		return '<div class="wow-col-' . $width . '" style="text-align: ' . $align . '">' . do_shortcode( $content ) . '</div>';
	}

	function button_shortcode( $atts, $content ) {
		$atts = shortcode_atts( array(
			'type'      => 'close',
			'link'      => '',
			'target'    => '_blank',
			'color'     => 'white',
			'bgcolor'   => 'mediumaquamarine',
			'size'      => 'normal',
			'fullwidth' => 'no',
		), $atts, 'buttonBox' );

		$size      = 'is-' . $atts['size'];
		$button    = '';
		$fullwidth = ( $atts['fullwidth'] === 'yes' ) ? 'is-fullwidth' : '';
		if ( $atts['type'] === 'close' ) {
			$button = '<button class="ds-button ds-close-popup ' . esc_attr( $size ) . ' ' . esc_attr( $fullwidth ) . '" style="color:' . esc_attr( $atts['color'] ) . '; background:' . esc_attr( $atts['bgcolor'] ) . '">' . esc_attr( $content ) . '</button>';
		} elseif ( $atts['type'] === 'link' ) {
			$button = '<a href="' . esc_url( $atts['link'] ) . '" target="' . esc_attr( $atts['target'] ) . '" class="ds-button ' . esc_attr( $size ) . ' ' . esc_attr( $fullwidth ) . '" style="color:' . esc_attr( $atts['color'] ) . '; background:' . esc_attr( $atts['bgcolor'] ) . '">' . esc_attr( $content ) . '</a>';
		}

		return $button;
	}

	function video_shortcode( $atts ) {
		$atts = shortcode_atts( array(
			'id'     => '',
			'from'   => 'youtube',
			'width'  => '560',
			'height' => '315',
		), $atts, 'videoBox' );

		if ( empty( $atts['id'] ) ) {
			return false;
		}

		if ( $atts['from'] === 'youtube' ) {
			$url = 'https://www.youtube.com/embed/';
		} elseif ( $atts['from'] === 'vimeo' ) {
			$url = 'https://player.vimeo.com/video/';
		}

		$video = '<iframe width="' . absint( $atts['width'] ) . '" height="' . absint( $atts['height'] ) . '" src="' . esc_url( $url ) . esc_attr( $atts['id'] ) . '" allow=autoplay frameborder="0" ></iframe>';

		return $video;
	}

	function iframe_shortcode($atts) {
		$atts = shortcode_atts( array(
			'link'     => '',
			'width'  => '560',
			'height' => '450',
		), $atts, 'iframeBox' );

		$iframe = '<iframe width="' . absint( $atts['width'] ) . '" height="' . absint( $atts['height'] ) . '" src="' . esc_url( $atts['link'] ) . '" frameborder="0" style="border:0" ></iframe>';

		return $iframe;
	}

	function send_modal_window() {
		$id   = absint( $_REQUEST['smwid'] );
		$text = sanitize_text_field( $_POST['textarea'] );
		$name = sanitize_text_field( $_POST['name'] );
		$mail = sanitize_email( $_POST['email'] );

		global $wpdb;
		$data   = $wpdb->prefix . "wow_" . $this->plugin['prefix'];
		$sSQL   = $wpdb->prepare( "select * from $data WHERE id = %d", $id );
		$result = $wpdb->get_results( $sSQL );
		if ( count( $result ) > 0 ) {
			foreach ( $result as $key => $val ) {
				$param = unserialize( $val->param );
				include( 'sendmail/admin.php' );
				if ( ! empty( $param['send_to_user'] ) ) {
					include( 'sendmail/user.php' );
				}
				if ( ! empty( $param['emsi'] ) ) {
					include( 'sendmail/emsi.php' );
				}
			}
		}
		exit();
	}

	function display() {
		require plugin_dir_path( __FILE__ ) . 'display.php';
	}

	private function check_user( $param ) {
		$user      = true;
		$item_user = ! empty( $param['item_user'] ) ? $param['item_user'] : '1';
		if ( $item_user == 1 ) {
			$user = true;
		} elseif ( $item_user == 2 ) {
			if ( is_user_logged_in() ) {
				if ( $param['user_role'] == 'all' ) {
					$user = true;
				} else {
					$current_user = wp_get_current_user();
					if ( $param['user_role'] == $current_user->roles[0] ) {
						$user = true;
					} else {
						$user = false;
					}
				}
			} else {
				$user = false;
			}
		} elseif ( $item_user == 3 ) {
			$user = ! is_user_logged_in();
		}

		return $user;
	}

	private function check_language( $param ) {
		$lang = true;
		if ( ! empty( $param['depending_language'] ) ) {
			$item_lang = $param['umodallang'];
			$site_lang = get_locale();
			if ( substr( $site_lang, 0, 2 ) == $item_lang ) {
				$lang = true;
			} else {
				$lang = false;
			}
		} elseif ( empty( $param['depending_language'] ) ) {
			$lang = true;
		}

		return $lang;
	}

	private function check_popup( $param ) {
		$afterpopup = true;
		if ( ! empty( $param['after_popup'] ) ) {
			if ( isset( $_COOKIE[ $param['popup'] ] ) ) {
				$afterpopup = true;
			} else {
				$afterpopup = false;
			}
		} else if ( empty( $param['after_popup'] ) ) {
			$afterpopup = true;
		}

		return $afterpopup;
	}

	private function check_cookie( $param, $id ) {
		$popupcookie = true;
		if ( $param['use_cookies'] === 'yes' ) {
			$namecookie = 'wow-modal-id-' . $id;
			if ( ! isset( $_COOKIE[ $namecookie ] ) ) {
				$popupcookie = true;
			} else {
				$popupcookie = false;
			}
		}
		if ( $param['use_cookies'] === 'no' ) {
			$popupcookie = true;
		}

		return $popupcookie;
	}

	private function check_license() {
		$license = get_option( 'wow_license_key_' . $this->plugin['prefix'] );
		$status  = get_option( 'wow_license_status_' . $this->plugin['prefix'] );
		if ( ! empty( $license ) && $status === 'valid' ) {
			return true;
		} else {
			return false;
		}
	}

	private function check_day( $param ) {
		$weekday = isset( $param['weekday'] ) ? $param['weekday'] : 'none';
		$day     = true;
		if ( $weekday !== 'none' ) {
			if ( $weekday != date( 'N' ) ) {
				$day = false;
			}
		}

		return $day;
	}

	private function check_date( $param ) {
		$date = true;
		if ( ! empty( $param['set_dates'] ) ) {
			$current = date( 'Y-m-d' );
			$start   = $param['date_start'];
			$end     = $param['date_end'];
			if ( $start <= $current && $current <= $end ) {
				$date = true;
			} else {
				$date = false;
			}
		}

		return $date;
	}

	private function check_time( $param ) {

		$time_start = isset( $param['time_start'] ) ? $param['time_start'] : '00:00';
		$time_end   = isset( $param['time_end'] ) ? $param['time_end'] : '23:59';

		$start   = str_replace( ':', ',', $time_start );
		$end     = str_replace( ':', ',', $time_end );
		$current = date( 'H,i' );

		if ( $start <= $current && $current <= $end ) {
			return true;
		} else {
			return false;
		}
	}

	private function check( $param, $id ) {
		$check   = true;
		$user    = $this->check_user( $param );
		$lang    = $this->check_language( $param );
		$popup   = $this->check_popup( $param );
		$cookie  = $this->check_cookie( $param, $id );
		$day    = $this->check_day( $param );
		$time   = $this->check_time( $param );
		$date   = $this->check_date( $param );
		$license = $this->check_license();
		if ( $license === false ) {
			$check = false;
		}

		if ( empty($param['test_mode']) ) {
			if ( $user === false || $lang === false || $day === false || $time === false || $date === false || $popup === false || $cookie === false ) {
				$check = false;
			}

		} else {
			if ( ! current_user_can( 'administrator' ) ) {
				$check = false;
			}
		}

		return $check;
	}

}