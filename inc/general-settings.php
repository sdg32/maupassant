<?php

/**
 * Register general options.
 */
function maupassant_zh_cn_l10n_settings_init() {
	add_option( 'zh_cn_l10n_icp_num' );

	if ( defined( 'WP_ZH_CN_ICP_NUM' ) && WP_ZH_CN_ICP_NUM ) {
		add_settings_field(
			'zh_cn_l10n_icp_num',
			__( 'ICP Number', 'maupassant' ),
			'maupassant_zh_cn_l10n_icp_num_callback',
			'general',
		);
		register_setting( 'general', 'zh_cn_l10n_icp_num' );
	}
}

add_action( 'admin_init', 'maupassant_zh_cn_l10n_settings_init' );

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
