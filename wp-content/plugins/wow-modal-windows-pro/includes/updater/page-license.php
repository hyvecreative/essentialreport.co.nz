<?php
/**
 * License Page
 *
 * @package     Wow_Plugin
 * @subpackage  Update/Licese_Page
 * @author      Dmytro Lobov <i@wpbiker.com>
 * @copyright   2019 Wow-Company
 * @license     GNU Public License
 * @version     1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$license = get_option( 'wow_license_key_' . $this->plugin['prefix'] );
$status  = get_option( 'wow_license_status_' . $this->plugin['prefix'] );

?>

<div class="about-wrap wow-box license">
    <div class="feature-section one-col">
        <div class="col">

            <form method="post" action="options.php">
                <?php settings_fields( 'wow_license_' . $this->plugin['prefix'] );?>
                <label class="label"><?php esc_html_e( 'License Key', $this->plugin['text'] ); ?></label>
                <div class="field has-addons">
                    <div class="control is-expanded">
                        <input class="input is-radiusless is-size-6" type="text" placeholder="<?php esc_html_e( 'Enter License key', $this->plugin['text'] ); ?>" name="wow_license_key_<?php echo $this->plugin['prefix']; ?>" value="<?php esc_attr_e( $license ); ?>">
                    </div>
                    <div class="control">
		                <?php if ( ! empty( $license ) ) : ?>

			                <?php wp_nonce_field( 'wow_nonce_' . $this->plugin['prefix'], 'wow_nonce_' . $this->plugin['prefix'] ); ?>

			                <?php if ( $status !== false && $status == 'valid' ) : ?>
                                <button class="button is-size-6 is-radiusless" name="wow_license_deactivate_<?php echo $this->plugin['prefix']; ?>">
	                                <?php esc_html_e( 'Deactivate License', $this->plugin['text'] ); ?>
                                </button>
			                <?php else: ?>
                                <button class="button is-size-6 is-radiusless" name="wow_license_activate_<?php echo $this->plugin['prefix']; ?>">
					                <?php esc_html_e( 'Activate License', $this->plugin['text'] ); ?>
                                </button>
			                <?php endif; ?>

		                <?php endif; ?>
                    </div>
                </div>
	                <?php if ( ! empty( $license ) ) : ?>
	                <?php if ( $status !== false && $status == 'valid' ) : ?>
                        <p>
                            <span class="has-text-weight-semibold"><?php esc_html_e( 'Plugin Status', $this->plugin['text'] ); ?>:</span>
                            <span class="has-text-success"><?php esc_html_e( 'Active', $this->plugin['text'] ); ?></span>
                        </p>
	                <?php else: ?>
                            <p>
                                <span class="has-text-weight-semibold"><?php esc_html_e( 'Plugin Status', $this->plugin['text'] ); ?>:</span>
                                <span class="has-text-danger"><?php esc_html_e( 'Inactive', $this->plugin['text'] ); ?></span>
                            </p>
                        <p class="help is-info">
	                        <?php esc_html_e( 'Click the button "Activate License" to activate the plugin.', $this->plugin['text'] ); ?>
                        </p>
		                <?php endif; ?>
	                <?php endif; ?>
	            <?php submit_button(null , 'primary is-radiusless'); ?>
            </form>
        </div>
    </div>
</div>