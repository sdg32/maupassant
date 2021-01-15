<?php

/**
 * Register custom settings.
 */
function maupassant_register_settings() {
	add_option( 'zh_cn_l10n_icp_num' );
	add_settings_field(
		'zh_cn_l10n_icp_num',
		__( 'ICP Number', 'maupassant' ),
		'maupassant_zh_cn_l10n_icp_num_callback',
		'general',
	);
	register_setting( 'general', 'zh_cn_l10n_icp_num' );
}

add_action( 'admin_init', 'maupassant_register_settings' );

/**
 * Output zh_cn_l10n_icp_num field.
 */
function maupassant_zh_cn_l10n_icp_num_callback() {
	printf(
		'<input id="%s" name="%s" class="regular-text" type="text" value="%s">',
		'zh_cn_l10n_icp_num',
		'zh_cn_l10n_icp_num',
		esc_attr( get_option( 'zh_cn_l10n_icp_num' ) ),
	);
}
