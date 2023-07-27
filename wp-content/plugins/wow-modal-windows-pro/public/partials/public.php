<?php
/**
 * Public final
 *
 * @package     Wow_Pluign
 * @subpackage  Public
 * @copyright   Copyright (c) 2019, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$close_type     = ! empty( $param['close_type'] ) ? $param['close_type'] : 'text';
$close_location = ! empty( $param['close_location'] ) ? $param['close_location'] : 'topRight';

$rotate_icon = ! empty( $param['rotate_icon'] ) ? ' ' . $param['rotate_icon'] : '';
if ( $param['button_type'] === '1' || empty( $param['button_type'] ) ) {
	$button_text = ( ! empty( $param['umodal_button_text'] ) ) ? $param['umodal_button_text'] : esc_attr__( 'Feedback' );
} elseif ( $param['button_type'] == '2' ) {

	if ( ! empty( $param['button_icon_after'] ) ) {
		$button_text = ( ! empty( $param['umodal_button_text'] ) ) ? $param['umodal_button_text'] : 'Feedback';
		$button_text .= ' <i class="' . esc_attr( $param['button_icon'] ) . $rotate_icon . '" aria-hidden="true"></i>';
	} else {
		$button_text = '<i class="' . esc_attr( $param['button_icon'] ) . esc_attr( $rotate_icon ) . '" aria-hidden="true"></i> ';
		$button_text .= ( ! empty( $param['umodal_button_text'] ) ) ? $param['umodal_button_text'] : 'Feedback';
	}

} elseif ( $param['button_type'] == '3' ) {
	$button_shape = ! empty( $param['button_shape'] ) ? $param['button_shape'] : 0;
	if ( ! empty( $button_shape ) ) {
		$button_text = '<span class="fa-stack fa-2x' . esc_attr( $rotate_icon ) . '">';
		$button_text .= '<i class="' . esc_attr( $param['button_shape'] ) . ' fa-stack-2x wow-icon-parent-' . absint( $id ) . '"></i>';
		$button_text .= '<i class="' . esc_attr( $param['button_icon'] ) . ' fa-stack-1x fa-inverse wow-icon-child-' . absint( $id ) . '"></i>';
		$button_text .= '</span>';
	} else {
		$button_text = '<i class="' . esc_attr( $param['button_icon'] ) . esc_attr( $rotate_icon ) . ' wow-icon-child-' . absint( $id ) . '"></i>';
	}


}
if ( ! empty( $param['include_overlay'] ) ) {
	$classoverlow = 'class="wow-modal-overlay"';
	$overclose    = 'class="wow-modal-overclose"';
} else {
	$classoverlow = '';
	$overclose    = '';
}

$form = '';
if ( ! empty( $param['include_form_name'] ) || ! empty( $param['include_form_email'] ) || ! empty( $param['include_form_text'] ) ) {
	$form .= '<form id="smwform-' . absint( $id ) . '" class="wow-modal-form"><div id="smwconfirm-' . absint( $id ) . '">';
	if ( ! empty( $param['include_form_name'] ) ) {
		$form .= '<input class="name smw-input" name="name" type="text" placeholder="' . esc_attr( $param['form_name'] ) . '" required>';
	}
	if ( ! empty( $param['include_form_email'] ) ) {
		$form .= '<input class="email smw-input" name="email" type="email" placeholder="' . esc_attr( $param['form_email'] ) . '" required>';
	}
	if ( ! empty( $param['include_form_text'] ) ) {
		$form .= '<textarea name="textarea" class="textarea" placeholder="' . esc_attr( $param['form_text'] ) . '" required></textarea>';
	}
	$form .= '<div id="smw-result-' . absint( $id ) . '"></div>';
	$form .= '<input type="submit" value="' . $param['form_button'] . '">';
	$form .= '<input type="hidden" name="smwid" value="' . absint( $id ) . '">';
	$form .= '</div></form>';
}

$content = do_shortcode( $param['content'] );
$content = str_replace( '{form}', $form, $content );

$modal = '';
if ( $param['umodal_button'] === 'yes' ) {
	$modal .= '<div class="wow-modal-button-' . absint( $id ) . ' ' . esc_attr( $param['umodal_button_position'] ) . '" id="wow-modal-id-' . absint( $id ) . '">' . $button_text . '</div>';
}
$modal .= '<div id="wow-modal-overlay-' . absint( $id ) . '" ' . ( $classoverlow ) . ' style="display:none;">';
$modal .= '<div id="wow-modal-overclose-' . absint( $id ) . '" ' . ( $overclose ) . '></div>';
$modal .= '<div id="wow-modal-window-' . absint( $id ) . '" class="wow-modal-window" style="display:none;">';
$modal .= '<div id="wow-modal-close-' . absint( $id ) . '" class="mw-close-btn ' . esc_attr( $close_location ) . ' ' . esc_attr( $close_type ) . '"></div>';

$modal .= '<div class="modal-window-content">';
if ( ! empty( $param['popup_title'] ) ) {
	$modal .= '<div class="mw-title">' . esc_attr( $val->title ) . '</div>';
}

$modal .= $content;
$modal .= '</div></div></div>';
echo $modal;