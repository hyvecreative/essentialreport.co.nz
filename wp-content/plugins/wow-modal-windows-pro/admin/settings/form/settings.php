<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Modal Form settings
 *
 * @package     Wow_Plugin
 * @subpackage  Settings
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

//region Fields
$form_name = array(
	'label'    => esc_attr__( 'Name', $this->plugin['text'] ),
	'attr'     => [
		'name'  => 'param[form_name]',
		'id'    => 'form_name',
		'value' => isset( $param['form_name'] ) ? $param['form_name'] : 'Your Name',
	],
	'checkbox' => [
		'name'  => 'param[include_form_name]',
		'id'    => 'include_form_name',
		'class' => 'checkLabel',
		'value' => isset( $param['include_form_name'] ) ? $param['include_form_name'] : 1,
	],
	'tooltip'  => esc_attr__( 'Enable Name field in the form and enter the placeholder for it.', $this->plugin['text'] ),
);

$form_email = array(
	'label'    => esc_attr__( 'Email', $this->plugin['text'] ),
	'attr'     => [
		'name'  => 'param[form_email]',
		'id'    => 'form_email',
		'value' => isset( $param['form_email'] ) ? $param['form_email'] : 'Your Name',
	],
	'checkbox' => [
		'name'  => 'param[include_form_email]',
		'id'    => 'include_form_email',
		'class' => 'checkLabel',
		'value' => isset( $param['include_form_email'] ) ? $param['include_form_email'] : 1,
	],
	'tooltip'  => esc_attr__( 'Enable Email field in the form and enter the placeholder for it.', $this->plugin['text'] ),
);

$form_text = array(
	'label'    => esc_attr__( 'Textarea', $this->plugin['text'] ),
	'attr'     => [
		'name'  => 'param[form_text]',
		'id'    => 'form_text',
		'value' => isset( $param['form_text'] ) ? $param['form_text'] : 'Write a Comment',
	],
	'checkbox' => [
		'name'  => 'param[include_form_text]',
		'id'    => 'include_form_text',
		'class' => 'checkLabel',
		'value' => isset( $param['include_form_text'] ) ? $param['include_form_text'] : 1,
	],
	'tooltip'  => esc_attr__( 'Enable Textarea field in the form and enter the placeholder for it.', $this->plugin['text'] ),
);

$form_button = array(
	'label'   => esc_attr__( 'Button text', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[form_button]',
		'id'    => 'form_button',
		'value' => isset( $param['form_button'] ) ? $param['form_button'] : 'Send',
	],
	'tooltip' => esc_attr__( 'Enter the text for Submit button.', $this->plugin['text'] ),
);
//endregion

//region Form Style
$form_width = array(
	'label'   => esc_attr__( 'Width', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[form_width]',
		'id'    => 'form_width',
		'value' => isset( $param['form_width'] ) ? $param['form_width'] : '100%',
	],
	'tooltip' => esc_html__( 'Specify form width. Can be in px, % or auto.', $this->plugin['text'] ),
	'help'    => sprintf( __( '%s More information about CSS property %s', $this->plugin['text'] ),
		'<a href="https://www.w3schools.com/cssref/pr_dim_width.asp" target="_blank">',
		'</a>'
	),
);

$form_padding = array(
	'label'   => esc_attr__( 'Padding', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[form_padding]',
		'id'    => 'form_padding',
		'value' => isset( $param['form_padding'] ) ? $param['form_padding'] : '10px',
	],
	'tooltip' => esc_html__( 'Specify form inner padding.', $this->plugin['text'] ),
	'help'    => sprintf( __( '%s More information about CSS property %s', $this->plugin['text'] ),
		'<a href="https://www.w3schools.com/css/css_padding.asp" target="_blank">',
		'</a>'
	),
);

$form_margin = array(
	'label'   => esc_attr__( 'Margin', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[form_margin]',
		'id'    => 'form_margin',
		'value' => isset( $param['form_margin'] ) ? $param['form_margin'] : '0 auto',
	],
	'tooltip' => esc_html__( 'Specify form margin.', $this->plugin['text'] ),
	'help'    => sprintf( __( '%s More information about CSS property %s', $this->plugin['text'] ),
		'<a href="https://www.w3schools.com/css/css_margin.asp" target="_blank">',
		'</a>'
	),
);

$form_border = array(
	'label'   => esc_attr__( 'Border width', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[form_border]',
		'id'    => 'form_border',
		'value' => isset( $param['form_border'] ) ? $param['form_border'] : '1px',
	],
	'tooltip' => esc_html__( 'Set the border width for Form.', $this->plugin['text'] ),
	'help'    => sprintf( __( '%s More information about CSS property %s', $this->plugin['text'] ),
		'<a href="https://www.w3schools.com/css/css_border_width.asp" target="_blank">',
		'</a>'
	),
);

$form_radius = array(
	'label'   => esc_attr__( 'Border radius', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[form_radius]',
		'id'    => 'form_radius',
		'value' => isset( $param['form_radius'] ) ? $param['form_radius'] : '0px',
	],
	'tooltip' => esc_html__( 'Set the border radius for Form.', $this->plugin['text'] ),
	'help'    => sprintf( __( '%s More information about CSS property %s', $this->plugin['text'] ),
		'<a href="https://www.w3schools.com/css/css_border_rounded.asp" target="_blank">',
		'</a>'
	),
);


$form_background = array(
	'label'   => esc_attr__( 'Background', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[form_background]',
		'id'    => 'form_background',
		'value' => isset( $param['form_background'] ) ? $param['form_background'] : '#ffffff',
	],
	'tooltip' => esc_html__( 'Set the color for Form background.', $this->plugin['text'] ),
);

$form_border_color = array(
	'label'   => esc_attr__( 'Border color', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[form_border_color]',
		'id'    => 'form_border_color',
		'value' => isset( $param['form_border_color'] ) ? $param['form_border_color'] : '#ffffff',
	],
	'tooltip' => esc_html__( 'Set the color for Form border.', $this->plugin['text'] ),
);
//endregion

//region Field Style
$field_border = array(
	'label'   => esc_attr__( 'Border width', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[field_border]',
		'id'    => 'field_border',
		'value' => isset( $param['field_border'] ) ? $param['field_border'] : '1px',
	],
	'tooltip' => esc_html__( 'Set the border width for Fields.', $this->plugin['text'] ),
	'help'    => sprintf( __( '%s More information about CSS property %s', $this->plugin['text'] ),
		'<a href="https://www.w3schools.com/css/css_border_width.asp" target="_blank">',
		'</a>'
	),
);


$field_radius = array(
	'label'   => esc_attr__( 'Border radius', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[field_radius]',
		'id'    => 'field_radius',
		'value' => isset( $param['field_radius'] ) ? $param['field_radius'] : '0px',
	],
	'tooltip' => esc_html__( 'Set the border radius for Fields.', $this->plugin['text'] ),
	'help'    => sprintf( __( '%s More information about CSS property %s', $this->plugin['text'] ),
		'<a href="https://www.w3schools.com/css/css_border_rounded.asp" target="_blank">',
		'</a>'
	),
);

$form_text_size = array(
	'label'   => esc_attr__( 'Text size', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[form_text_size]',
		'id'    => 'form_text_size',
		'value' => isset( $param['form_text_size'] ) ? $param['form_text_size'] : '16px',
	],
	'tooltip' => esc_html__( 'Set the font size for Fields.', $this->plugin['text'] ),
	'help'    => sprintf( __( '%s More information about CSS property %s', $this->plugin['text'] ),
		'<a href="https://www.w3schools.com/cssref/pr_font_font-size.asp" target="_blank">',
		'</a>'
	),
);

$form_input_height = array(
	'label'   => esc_attr__( 'Input height', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[form_input_height]',
		'id'    => 'form_input_height',
		'value' => isset( $param['form_input_height'] ) ? $param['form_input_height'] : '36px',
	],
	'tooltip' => esc_html__( 'Set the height for Field.', $this->plugin['text'] ),
	'help'    => sprintf( __( '%s More information about CSS property %s', $this->plugin['text'] ),
		'<a href="https://www.w3schools.com/cssref/pr_dim_height.asp" target="_blank">',
		'</a>'
	),
);

$form_textarea_height = array(
	'label'   => esc_attr__( 'Textarea height', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[form_textarea_height]',
		'id'    => 'form_textarea_height',
		'value' => isset( $param['form_textarea_height'] ) ? $param['form_textarea_height'] : '72px',
	],
	'tooltip' => esc_html__( 'Set the height for Textarea.', $this->plugin['text'] ),
	'help'    => sprintf( __( '%s More information about CSS property %s', $this->plugin['text'] ),
		'<a href="https://www.w3schools.com/cssref/pr_dim_height.asp" target="_blank">',
		'</a>'
	),
);

$field_background = array(
	'label'   => esc_attr__( 'Background', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[field_background]',
		'id'    => 'field_background',
		'value' => isset( $param['field_background'] ) ? $param['field_background'] : '#ffffff',
	],
	'tooltip' => esc_html__( 'Set the color for Field background.', $this->plugin['text'] ),
);

$field_border_color = array(
	'label'   => esc_attr__( 'Border color', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[field_border_color]',
		'id'    => 'field_border_color',
		'value' => isset( $param['field_border_color'] ) ? $param['field_border_color'] : '#383838',
	],
	'tooltip' => esc_html__( 'Set the color for Field border.', $this->plugin['text'] ),
);

$form_text_color = array(
	'label'   => esc_attr__( 'Text color', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[form_text_color]',
		'id'    => 'form_text_color',
		'value' => isset( $param['form_text_color'] ) ? $param['form_text_color'] : '#383838',
	],
	'tooltip' => esc_html__( 'Set the color for Field border.', $this->plugin['text'] ),
);
//endregion

//region Button Style
$form_button_size = array(
	'label'   => esc_attr__( 'Text size', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[form_button_size]',
		'id'    => 'form_button_size',
		'value' => isset( $param['form_button_size'] ) ? $param['form_button_size'] : '16px',
	],
	'tooltip' => esc_html__( 'Set the font size for Button.', $this->plugin['text'] ),
	'help'    => sprintf( __( '%s More information about CSS property %s', $this->plugin['text'] ),
		'<a href="https://www.w3schools.com/cssref/pr_font_font-size.asp" target="_blank">',
		'</a>'
	),
);

$form_button_text_color = array(
	'label'   => esc_attr__( 'Text color', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[form_button_text_color]',
		'id'    => 'form_button_text_color',
		'value' => isset( $param['form_button_text_color'] ) ? $param['form_button_text_color'] : '#ffffff',
	],
	'tooltip' => esc_html__( 'Set the color for Button text.', $this->plugin['text'] ),
);

$button_background_color = array(
	'label'   => esc_attr__( 'Background', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[button_background_color]',
		'id'    => 'button_background_color',
		'value' => isset( $param['button_background_color'] ) ? $param['button_background_color'] : '#e95645',
	],
	'tooltip' => esc_html__( 'Set the color for Button background.', $this->plugin['text'] ),
);

$button_hover_color = array(
	'label'   => esc_attr__( 'Background on hover', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[button_hover_color]',
		'id'    => 'button_hover_color',
		'value' => isset( $param['button_hover_color'] ) ? $param['button_hover_color'] : '#d45041',
	],
	'tooltip' => esc_html__( 'Set the color for Button background on hover.', $this->plugin['text'] ),
);
//endregion

//region Email Settings
$mail_send_text = array(
	'label'   => esc_attr__( 'Confirmation text', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[mail_send_text]',
		'id'    => 'mail_send_text',
		'value' => isset( $param['mail_send_text'] ) ? $param['mail_send_text'] : esc_attr__('Thank you. We will contact you shortly.', $this->plugin['text'] ),
	],
	'tooltip' => esc_html__( 'Set the text after sending Form.', $this->plugin['text'] ),
);

$mail_send_text_size = array(
	'label'   => esc_attr__( 'Confirmation text size', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[mail_send_text_size]',
		'id'    => 'mail_send_text_size',
		'value' => isset( $param['mail_send_text_size'] ) ? $param['mail_send_text_size'] : '16',
	],
	'addon' => [
		'unit'    => 'px',
	],
	'tooltip' => esc_html__( 'Set confirmation text size.', $this->plugin['text'] ),
);

$mail_send_text_color = array(
	'label'   => esc_attr__( 'Confirmation text color', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[mail_send_text_color]',
		'id'    => 'mail_send_text_color',
		'value' => isset( $param['mail_send_text_color'] ) ? $param['mail_send_text_color'] : '#48c774',
	],
	'tooltip' => esc_html__( 'Set the color for Confirmation text.', $this->plugin['text'] ),
);


$mail_send_error_text = array(
	'label'   => esc_attr__( 'Error text', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[mail_send_error_text]',
		'id'    => 'mail_send_error_text',
		'value' => isset( $param['mail_send_error_text'] ) ? $param['mail_send_error_text'] : esc_attr__('Correct the fields, please.', $this->plugin['text'] ),
	],
	'tooltip' => esc_html__( 'Set the text for Error.', $this->plugin['text'] ),
);

$mail_send_error_size = array(
	'label'   => esc_attr__( 'Confirmation text size', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[mail_send_error_size]',
		'id'    => 'mail_send_error_size',
		'value' => isset( $param['mail_send_error_size'] ) ? $param['mail_send_error_size'] : '16',
	],
	'addon' => [
		'unit'    => 'px',
	],
	'tooltip' => esc_html__( 'Set Error text size.', $this->plugin['text'] ),
);

$mail_send_error_color = array(
	'label'   => esc_attr__( 'Error text color', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[mail_send_error_color]',
		'id'    => 'mail_send_error_color',
		'value' => isset( $param['mail_send_error_color'] ) ? $param['mail_send_error_color'] : '#f14668',
	],
	'tooltip' => esc_html__( 'Set the color for Error text.', $this->plugin['text'] ),
);

$mail_send_timer = array(
	'label'   => esc_attr__( 'Close popup after sending', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[mail_send_timer]',
		'id'    => 'mail_send_timer',
		'value' => isset( $param['mail_send_timer'] ) ? $param['mail_send_timer'] : '3',
	],
	'addon' => [
		'unit'    => 'px',
	],
	'tooltip' => esc_html__( 'Set timer for closing modal window after sending email.', $this->plugin['text'] ),
);

$emsi = array(
	'label'   => esc_attr__( 'EMS_Integration', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[emsi]',
		'id'    => 'emsi',
		'value' => isset( $param['emsi'] ) ? $param['emsi'] : '0',
	],
	'tooltip' => esc_html__( 'Set integration with plugin EMSI. You must install the plugin EMSI', $this->plugin['text'] ),
	'help'    => sprintf( __( '%s More information plugin %s', $this->plugin['text'] ),
		'<a href="https://wordpress.org/plugins/email-marketing-services-integration/" target="_blank">',
		'</a>'
	),
);
//endregion

//region Admin Email
$send_to_admin = array(
	'label'   => esc_attr__( 'Send email to admin', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[send_to_admin]',
		'id'    => 'send_to_admin',
		'class' => 'checkBlock',
		'value' => isset( $param['send_to_admin'] ) ? $param['send_to_admin'] : '0',
	],
	'tooltip' => esc_html__( 'Set checkbox if you want to send email to admin.', $this->plugin['text'] ),
);

$mail_send_admin_mail = array(
	'label'   => esc_attr__( 'Send to email', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[mail_send_admin_mail]',
		'id'    => 'mail_send_admin_mail',
		'value' => isset( $param['mail_send_admin_mail'] ) ? $param['mail_send_admin_mail'] : get_option( 'admin_email' ),
	],
	'tooltip' => esc_html__( 'Set the email to which the message will be sent.', $this->plugin['text'] ),
);

$mail_send_mail_subject = array(
	'label'   => esc_attr__( 'Email subject', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[mail_send_mail_subject]',
		'id'    => 'mail_send_mail_subject',
		'value' => isset( $param['mail_send_mail_subject'] ) ? $param['mail_send_mail_subject'] : esc_attr__('Letter from the site', $this->plugin['text']),
	],
	'tooltip' => esc_html__( 'Set the subject for Email.', $this->plugin['text'] ),
);

$admincontent = array(
	'label'   => esc_attr__( 'Email content', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[admincontent]',
		'id'    => 'admincontent',
		'value' => isset( $param['admincontent'] ) ? $param['admincontent'] : '',
	],
	'tooltip' => esc_html__( 'Enter the text that is sent to the email.', $this->plugin['text'] ),
);
//endregion

//region User Email
$send_to_user = array(
	'label'   => esc_attr__( 'Send email to user', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[send_to_user]',
		'id'    => 'send_to_user',
		'class' => 'checkBlock',
		'value' => isset( $param['send_to_user'] ) ? $param['send_to_user'] : '0',
	],
	'tooltip' => esc_html__( 'Set checkbox if you want to send email to user.', $this->plugin['text'] ),
);

$mail_send_from_mail = array(
	'label'   => esc_attr__( 'Email from', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[mail_send_from_mail]',
		'id'    => 'mail_send_from_mail',
		'value' => isset( $param['mail_send_from_mail'] ) ? $param['mail_send_from_mail'] : get_option( 'admin_email' ),
	],
	'tooltip' => esc_html__( 'Set the email to be indicated in the message.', $this->plugin['text'] ),
);

$mail_send_user_subject = array(
	'label'   => esc_attr__( 'Email subject', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[mail_send_user_subject]',
		'id'    => 'mail_send_user_subject',
		'value' => isset( $param['mail_send_user_subject'] ) ? $param['mail_send_user_subject'] : esc_attr__('Letter from the site', $this->plugin['text']),
	],
	'tooltip' => esc_html__( 'Set the subject for Email.', $this->plugin['text'] ),
);

$mail_send_from_text = array(
	'label'   => esc_attr__( 'Text From', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[mail_send_from_text]',
		'id'    => 'mail_send_from_text',
		'value' => isset( $param['mail_send_from_text'] ) ? $param['mail_send_from_text'] : get_option( 'blogname' ),
	],
	'tooltip' => esc_html__( 'Set the text From for message.', $this->plugin['text'] ),
);


$usercontent = array(
	'label'   => esc_attr__( 'Email content', $this->plugin['text'] ),
	'attr'    => [
		'name'  => 'param[usercontent]',
		'id'    => 'usercontent',
		'value' => isset( $param['usercontent'] ) ? $param['usercontent'] : '',
	],
	'tooltip' => esc_html__( 'Enter the text that is sent to the email.', $this->plugin['text'] ),
);
//endregion