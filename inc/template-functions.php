<?php
/**
 * Add a pingback url for single posts, pages and attachments.
 */
function maupassant_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}

add_action( 'wp_head', 'maupassant_pingback_header' );

/**
 * Remove the `no-js` class from body if JS is supported.
 */
function maupassant_supports_js() {
	echo '<script>document.body.classList.remove("no-js");</script>';
}

add_action( 'wp_footer', 'maupassant_supports_js' );

/**
 * Add custom class to the array of body classes
 *
 * @param $classes
 *
 * @return mixed
 */
function maupassant_body_class( $classes = array() ): array {
	$classes[] = 'no-js';

	return $classes;
}

add_filter( 'body_class', 'maupassant_body_class' );

/**
 * Show comments pagination.
 *
 * @param array $args
 */
function maupassant_comments_pagination( $args = array() ) {
	echo maupassant_get_comments_pagination( $args );
}

/**
 * Get comments pagination.
 *
 * @param array $args
 *
 * @return string
 */
function maupassant_get_comments_pagination( $args = array() ): string {
	$navigation = '';
	$links      = paginate_comments_links( $args );
	if ( $links ) {
		$navigation = _navigation_markup( $links, 'comments-pagination', $args['screen_reader_text'] );
	}

	return $navigation;
}

/**
 * Show post thumbnail.
 */
function maupassant_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	echo '<div class="post-thumbnail">';
	the_post_thumbnail();
	echo '</div>';
}

/**
 * Show comments popup link.
 */
function maupassant_comments_popup_link() {
	comments_popup_link(
		__( 'No Comments', 'maupassant' ),
		__( '1 Comment', 'maupassant' ),
		__( '% Comments', 'maupassant' )
	);
}

/**
 * Show posts pagination.
 */
function maupassant_posts_pagination() {
	the_posts_pagination( array(
		'prev_text'          => __( 'Previous', 'maupassant' ),
		'next_text'          => __( 'Next', 'maupassant' ),
		'screen_reader_text' => ' ',
		'type'               => 'list',
	) );
}

/**
 * Show ICP link.
 *
 * @param string $prefix
 * @param string $suffix
 */
function zh_cn_l10n_icp_num( $prefix = '', $suffix = '' ) {
	if ( defined( 'WP_ZH_CN_ICP_NUM' ) && WP_ZH_CN_ICP_NUM && get_option( 'zh_cn_l10n_icp_num' ) ) {
		echo $prefix;
		echo '<a href="https://beian.miit.gov.cn" rel="nofollow" target="_blank">';
		echo esc_attr( get_option( 'zh_cn_l10n_icp_num' ) );
		echo '</a>';
		echo $suffix;
	}
}
