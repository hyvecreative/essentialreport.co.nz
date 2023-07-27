<?php
/**
 * EMS Integration
 *
 * @package
 * @subpackage  Send
 * @copyright   Copyright (c) 2017, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       2.2
 */

if ( !defined( 'ABSPATH' ) ) exit;


$userdata = array(
  'EMAIL' => $mail,
  'NAME'  => $name,
  'LNAME' => '',
);
do_action( 'ems_integration', $userdata );