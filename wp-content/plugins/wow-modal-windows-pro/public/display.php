<?php
/**
 * Display
 *
 * @package     Public
 * @subpackage
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $wpdb;
$table  = $wpdb->prefix . "wow_" . $this->plugin['prefix'];
$result = $wpdb->get_results( "SELECT * FROM " . $table . " order by id asc" );

if ( count( $result ) > 0 ) {
	foreach ( $result as $key => $val ) {
		$param         = unserialize( $val->param );
		$param['show'] = ! empty( $param['show'] ) ? $param['show'] : 'all';
		if ( $param['show'] == 'all' ) {
			echo do_shortcode( '[' . $this->plugin['shortcode'] . ' id=' . $val->id . ']' );
		} elseif ( $param['show'] == 'onlypost' ) {
			if ( is_single() ) {
				echo do_shortcode( '[' . $this->plugin['shortcode'] . ' id=' . $val->id . ']' );
			}
		} elseif ( $param['show'] == 'onlypage' ) {
			if ( is_page() ) {
				echo do_shortcode( '[' . $this->plugin['shortcode'] . ' id=' . $val->id . ']' );
			}
		} elseif ( $param['show'] == 'posts' ) {
			if ( is_single( preg_split( "/[,]+/", $param['id_post'] ) ) ) {
				echo do_shortcode( '[' . $this->plugin['shortcode'] . ' id=' . $val->id . ']' );
			}
		} elseif ( $param['show'] == 'postsincat' ) {
			if ( in_category( preg_split( "/[,]+/", $param['id_post'] ) ) ) {
				echo do_shortcode( '[' . $this->plugin['shortcode'] . ' id=' . $val->id . ']' );
			}
		} elseif ( $param['show'] == 'pages' ) {
			if ( is_page( preg_split( "/[,]+/", $param['id_post'] ) ) ) {
				echo do_shortcode( '[' . $this->plugin['shortcode'] . ' id=' . $val->id . ']' );
			}
		} elseif ( $param['show'] == 'expost' ) {
			if ( ! is_single( preg_split( "/[,]+/", $param['id_post'] ) ) ) {
				echo do_shortcode( '[' . $this->plugin['shortcode'] . ' id=' . $val->id . ']' );
			}
		} elseif ( $param['show'] == 'expage' ) {
			if ( ! is_page( preg_split( "/[,]+/", $param['id_post'] ) ) ) {
				echo do_shortcode( '[' . $this->plugin['shortcode'] . ' id=' . $val->id . ']' );
			}
		} elseif ( $param['show'] == 'taxonomy' ) {
			$taxonomy = $param['taxonomy'];
			$term     = $param['id_post'];
			$terms    = preg_split( "/[,]+/", $param['id_post'] );
			$is_in    = is_tax( $taxonomy, $terms );
			if ( $is_in ) {
				echo do_shortcode( '[' . $this->plugin['shortcode'] . ' id=' . $val->id . ']' );
			}
			if ( is_single() ) {
				if ( has_term( $terms, $taxonomy ) ) {
					echo do_shortcode( '[' . $this->plugin['shortcode'] . ' id=' . $val->id . ']' );
				}
			}
		}
	}
}
	
	
