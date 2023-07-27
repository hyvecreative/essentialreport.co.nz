<?php
/**
 * Send to Admin
 *
 * @package     Sendmail
 * @subpackage
 * @copyright   Copyright (c) 2017, Dmytro Lobov
 * @since       2.2
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$myemail    = ! empty( $param['mail_send_admin_mail'] ) ? $param['mail_send_admin_mail'] : get_option( 'admin_email' );
$thank      = ! empty( $param['mail_send_text'] ) ? $param['mail_send_text'] : 'Thank you. We will contact you shortly.';
$colorthank = ! empty( $param['mail_send_text_color'] ) ? $param['mail_send_text_color'] : '#4fad35';
$sizethank  = ! empty( $param['mail_send_text_size'] ) ? $param['mail_send_text_size'] : '16';
$mailtext   = ! empty( $param['mail_send_mail_subject'] ) ? $param['mail_send_mail_subject'] : 'Letter from the site';
$timer      = ! empty( $param['mail_send_timer'] ) ? $param['mail_send_timer'] * 1000 : '3000';

if ( ! empty( $param['send_to_admin'] ) ) {
	$message = $param['admincontent'];
	$message = str_replace( '{email}', $mail, $message );
	$message = str_replace( '{name}', $name, $message );
	$message = str_replace( '{text}', $text, $message );

	$headers = null;
	$headers .= "content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: " . $name . " <" . $mail . ">\r\n";
	$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
	wp_mail( $myemail, $mailtext, $message, $headers );
}

$primsg = '<center><span style="color:' . $colorthank . ';font-size:' . $sizethank . 'px;">' . $thank . '</span></center>';
print "<script language='Javascript'>function reload() {jQuery('#wow-modal-close-$id').trigger('click'); }; setTimeout('reload()', \"$timer\");</script>$primsg";
