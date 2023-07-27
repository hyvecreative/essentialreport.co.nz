<?php
/**
 * Modal Form
 *
 * @package     Wow_Pluign
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
include_once( 'settings.php' );

?>
<p class="is-size-6"><span class="has-text-danger">Notice!</span> For insert form into modal window content use tag <b>{form}</b>. Simple insert <b>{form}</b> into popup content.</p>
<div class="accordion-wrap">
	<div class="accordion-block">
		<div class="accordion-title">
			<span class="plus"><i class="dashicons dashicons-arrow-down-alt2"></i></span>
			<span class="minus"><i class="dashicons dashicons-arrow-up-alt2"></i></span>
			<span class="faq-title"><?php esc_attr_e( 'Fields', $this->plugin['text'] ); ?></span>
		</div>
		<div class="accordion-content content">
			<div class="columns is-multiline">
                <div class="column is-full">

                </div>

				<div class="column is-half">
					<?php $this->input($form_name); ?>
				</div>
				<div class="column is-half">
					<?php $this->input($form_email); ?>
				</div>
				<div class="column is-half">
					<?php $this->input($form_text); ?>
				</div>
				<div class="column is-half">
					<?php $this->input($form_button); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="accordion-wrap">
    <div class="accordion-block">
        <div class="accordion-title">
            <span class="plus"><i class="dashicons dashicons-arrow-down-alt2"></i></span>
            <span class="minus"><i class="dashicons dashicons-arrow-up-alt2"></i></span>
            <span class="faq-title"><?php esc_attr_e( 'Form Style', $this->plugin['text'] ); ?></span>
        </div>
        <div class="accordion-content content">
            <div class="columns is-multiline">
                <div class="column is-one-third">
					<?php $this->input($form_width); ?>
                </div>
                <div class="column is-one-third">
	                <?php $this->input($form_padding); ?>
                </div>
                <div class="column is-one-third">
	                <?php $this->input($form_margin); ?>
                </div>
                <div class="column is-one-third">
		            <?php $this->input($form_border); ?>
                </div>
                <div class="column is-one-third">
		            <?php $this->input($form_radius); ?>
                </div>
                <div class="column is-one-third">
		            <?php $this->color($form_background); ?>
                </div>
                <div class="column is-one-third">
		            <?php $this->color($form_border_color); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="accordion-wrap">
    <div class="accordion-block">
        <div class="accordion-title">
            <span class="plus"><i class="dashicons dashicons-arrow-down-alt2"></i></span>
            <span class="minus"><i class="dashicons dashicons-arrow-up-alt2"></i></span>
            <span class="faq-title"><?php esc_attr_e( 'Fields Style', $this->plugin['text'] ); ?></span>
        </div>
        <div class="accordion-content content">
            <div class="columns is-multiline">
                <div class="column is-one-third">
					<?php $this->input($field_border); ?>
                </div>
                <div class="column is-one-third">
	                <?php $this->input($field_radius); ?>
                </div>
                <div class="column is-one-third">
	                <?php $this->input($form_text_size); ?>
                </div>
                <div class="column is-one-third">
	                <?php $this->input($form_input_height); ?>
                </div>
                <div class="column is-one-third">
		            <?php $this->input($form_textarea_height); ?>
                </div>
                <div class="column is-one-third">
		            <?php $this->color($field_background); ?>
                </div>
                <div class="column is-one-third">
		            <?php $this->color($field_border_color); ?>
                </div>
                <div class="column is-one-third">
		            <?php $this->color($form_text_color); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="accordion-wrap">
    <div class="accordion-block">
        <div class="accordion-title">
            <span class="plus"><i class="dashicons dashicons-arrow-down-alt2"></i></span>
            <span class="minus"><i class="dashicons dashicons-arrow-up-alt2"></i></span>
            <span class="faq-title"><?php esc_attr_e( 'Button Style', $this->plugin['text'] ); ?></span>
        </div>
        <div class="accordion-content content">
            <div class="columns is-multiline">
                <div class="column is-one-third">
					<?php $this->input($form_button_size); ?>
                </div>
                <div class="column is-one-third">
	                <?php $this->color($form_button_text_color); ?>
                </div>
                <div class="column is-one-third">
	                <?php $this->color($button_background_color); ?>
                </div>
                <div class="column is-one-third">
	                <?php $this->color($button_hover_color); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="accordion-wrap">
    <div class="accordion-block">
        <div class="accordion-title">
            <span class="plus"><i class="dashicons dashicons-arrow-down-alt2"></i></span>
            <span class="minus"><i class="dashicons dashicons-arrow-up-alt2"></i></span>
            <span class="faq-title"><?php esc_attr_e( 'Email Settings', $this->plugin['text'] ); ?></span>
        </div>
        <div class="accordion-content content">
            <div class="columns is-multiline">
                <div class="column is-one-third">
					<?php $this->input($mail_send_text); ?>
                </div>
                <div class="column is-one-third">
		            <?php $this->number($mail_send_text_size); ?>
                </div>
                <div class="column is-one-third">
					<?php $this->color($mail_send_text_color); ?>
                </div>
                <div class="column is-one-third is-hidden">
		            <?php $this->input($mail_send_error_text); ?>
                </div>
                <div class="column is-one-third is-hidden">
		            <?php $this->number($mail_send_error_size); ?>
                </div>
                <div class="column is-one-third is-hidden">
		            <?php $this->color($mail_send_error_color); ?>
                </div>
                <div class="column is-one-third">
		            <?php $this->number($mail_send_timer); ?>
                </div>
                <div class="column is-one-third">
		            <?php $this->checkbox($emsi); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="accordion-wrap">
    <div class="accordion-block">
        <div class="accordion-title">
            <span class="plus"><i class="dashicons dashicons-arrow-down-alt2"></i></span>
            <span class="minus"><i class="dashicons dashicons-arrow-up-alt2"></i></span>
            <span class="faq-title"><?php esc_attr_e( 'Email to Admin', $this->plugin['text'] ); ?></span>
        </div>
        <div class="accordion-content content">
            <div class="columns is-multiline">
                <div class="column is-full">
					<?php $this->checkbox($send_to_admin); ?>
                </div>
                <div class="column is-one-third blockHidden">
					<?php $this->input($mail_send_admin_mail); ?>
                </div>
                <div class="column is-one-third blockHidden">
					<?php $this->input($mail_send_mail_subject); ?>
                </div>
                <div class="column is-full editor blockHidden">
					<?php $this->editor($admincontent); ?>
                    <p class="has-text-weight-bold">HTML is accepted. Available template tags:</p>
                    <p class="help is-marginless">{email} - <?php esc_attr_e( 'User email', $this->plugin['text'] ); ?></p>
                    <p class="help is-marginless">{name} - <?php esc_attr_e( 'User Name', $this->plugin['text'] ); ?></p>
                    <p class="help is-marginless">{text} - <?php esc_attr_e( 'Email Text', $this->plugin['text'] ); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="accordion-wrap">
    <div class="accordion-block">
        <div class="accordion-title">
            <span class="plus"><i class="dashicons dashicons-arrow-down-alt2"></i></span>
            <span class="minus"><i class="dashicons dashicons-arrow-up-alt2"></i></span>
            <span class="faq-title"><?php esc_attr_e( 'Email to User', $this->plugin['text'] ); ?></span>
        </div>
        <div class="accordion-content content">
            <div class="columns is-multiline">
                <div class="column is-full">
					<?php $this->checkbox($send_to_user); ?>
                </div>
                <div class="column is-one-third blockHidden">
					<?php $this->input($mail_send_from_mail); ?>
                </div>
                <div class="column is-one-third blockHidden">
					<?php $this->input($mail_send_user_subject); ?>
                </div>
                <div class="column is-one-third blockHidden">
		            <?php $this->input($mail_send_from_text); ?>
                </div>
                <div class="column is-full editor blockHidden">
					<?php $this->editor($usercontent); ?>
                    <p class="has-text-weight-bold">HTML is accepted. Available template tags:</p>
                    <p class="help is-marginless">{email} - <?php esc_attr_e( 'User email', $this->plugin['text'] ); ?></p>
                    <p class="help is-marginless">{name} - <?php esc_attr_e( 'User Name', $this->plugin['text'] ); ?></p>
                    <p class="help is-marginless">{text} - <?php esc_attr_e( 'Email Text', $this->plugin['text'] ); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>