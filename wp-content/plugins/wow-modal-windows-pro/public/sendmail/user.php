<?php
/**
 * Send to User
 *
 * @package     Sendmail
 * @subpackage
 * @copyright   Copyright (c) 2017, Dmytro Lobov
 * @since       2.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$frommail     = ! empty( $param['mail_send_from_mail'] ) ? $param['mail_send_from_mail'] : get_option( 'admin_email' );
$mailusertext = ! empty( $param['mail_send_user_subject'] ) ? $param['mail_send_user_subject'] : 'Letter from the site';
$fromusertext = ! empty( $param['mail_send_from_text'] ) ? $param['mail_send_from_text'] : get_option( 'blogname' );

$message = $param['usercontent'];
$message = str_replace( '{email}', $mail, $message );
$message = str_replace( '{name}', $name, $message );
$message = str_replace( '{text}', $text, $message );

$headers = null;
$headers .= "content-type: text/html; charset=utf-8\r\n";
$headers .= "From: " . $fromusertext . " <" . $frommail . ">\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
wp_mail( $mail, $mailusertext, $message, $headers );

