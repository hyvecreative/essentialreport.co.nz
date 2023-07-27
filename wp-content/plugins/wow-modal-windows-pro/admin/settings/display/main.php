<?php
/**
 * Targeting
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

<!--region Schedule-->
<div class="accordion-wrap">
    <div class="accordion-block">
        <div class="accordion-title">
            <span class="plus"><i class="dashicons dashicons-arrow-down-alt2"></i></span>
            <span class="minus"><i class="dashicons dashicons-arrow-up-alt2"></i></span>
            <span class="faq-title"><?php esc_attr_e( 'Schedule', $this->plugin['text'] ); ?></span>
        </div>
        <div class="accordion-content content">
            <div class="columns">
                <div class="column is-one-third">
					<?php $this->select( $weekday ); ?>
                </div>
                <div class="column is-one-third">
					<?php $this->time( $time_start ); ?>
                </div>
                <div class="column is-one-third">
					<?php $this->time( $time_end ); ?>
                </div>
            </div>
            <div class="columns">
                <div class="column is-one-third">
					<?php $this->checkbox( $set_dates ); ?>
                </div>
                <div class="column is-one-third date-set">
					<?php $this->date( $date_start ); ?>
                </div>
                <div class="column is-one-third date-set">
					<?php $this->date( $date_end ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--endregion-->

<!--region Devices-->
<div class="accordion-wrap">
    <div class="accordion-block">
        <div class="accordion-title">
            <span class="plus"><i class="dashicons dashicons-arrow-down-alt2"></i></span>
            <span class="minus"><i class="dashicons dashicons-arrow-up-alt2"></i></span>
            <span class="faq-title"><?php esc_attr_e( 'Devices Control', $this->plugin['text'] ); ?></span>
        </div>
        <div class="accordion-content content">
            <div class="columns is-multiline">
                <div class="column is-half">
					<?php $this->number($screen_more); ?>
                </div>
                <div class="column is-half">
	                <?php $this->number($screen); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--endregion-->

<!--region Users Role-->
<div class="accordion-wrap">
    <div class="accordion-block">
        <div class="accordion-title">
            <span class="plus"><i class="dashicons dashicons-arrow-down-alt2"></i></span>
            <span class="minus"><i class="dashicons dashicons-arrow-up-alt2"></i></span>
            <span class="faq-title"><?php esc_attr_e( 'User Role', $this->plugin['text'] ); ?></span>
        </div>
        <div class="accordion-content content">
            <div class="columns is-multiline">
                <div class="column is-half">
					<?php $this->select($item_user); ?>
                </div>
                <div class="column is-half user-role">
	                <?php $this->select($user_role); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--endregion-->

<!--region language-->
<div class="accordion-wrap">
    <div class="accordion-block">
        <div class="accordion-title">
            <span class="plus"><i class="dashicons dashicons-arrow-down-alt2"></i></span>
            <span class="minus"><i class="dashicons dashicons-arrow-up-alt2"></i></span>
            <span class="faq-title"><?php esc_attr_e( 'Site language', $this->plugin['text'] ); ?></span>
        </div>
        <div class="accordion-content content">
            <div class="columns is-multiline">
                <div class="column is-full">
					<?php $this->select($lang); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--endregion-->

<div class="accordion-wrap">
    <div class="accordion-block">
        <div class="accordion-title">
            <span class="plus"><i class="dashicons dashicons-arrow-down-alt2"></i></span>
            <span class="minus"><i class="dashicons dashicons-arrow-up-alt2"></i></span>
            <span class="faq-title"><?php esc_attr_e( 'Show if another popup already converted', $this->plugin['text'] ); ?></span>
        </div>
        <div class="accordion-content content">
            <div class="columns is-multiline">
                <div class="column is-half">
					<?php $this->select($previous_popup); ?>
                </div>
                <div class="column is-half">

                </div>
                <div class="column is-half">

                </div>
                <div class="column is-half">

                </div>
            </div>
        </div>
    </div>
</div>

<!--region Display-->
<div class="accordion-wrap">
    <div class="accordion-block">
        <div class="accordion-title">
            <span class="plus"><i class="dashicons dashicons-arrow-down-alt2"></i></span>
            <span class="minus"><i class="dashicons dashicons-arrow-up-alt2"></i></span>
            <span class="faq-title"><?php esc_attr_e( 'Display on site', $this->plugin['text'] ); ?></span>
        </div>
        <div class="accordion-content content">
            <div class="columns">
                <div class="column is-half">
					<?php $this->select($show); ?>
                </div>
                <div class="column is-half taxonomy">
	                <?php $this->select($taxonomy); ?>
                </div>
                <div class="column is-half id-post">
	                <?php $this->input($id_post); ?>
                </div>

            </div>
            <div class="columns">
                <div class="column is-full shortcode">
                    <label class="label"><?php esc_attr_e( 'Shortcode', $this->plugin['text'] ); ?></label>
                    <code>[<?php echo $this->plugin['shortcode']; ?> id="<?php echo $tool_id; ?>"]</code>
                </div>
            </div>
        </div>
    </div>
</div>
<!--endregion-->