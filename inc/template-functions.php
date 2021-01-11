<?php
/**
 * Display comments pagination.
 *
 * @param array $args
 */
function maupassant_comments_pagination( $args = array() ) {
    echo get_maupassant_comments_pagination( $args );
}

/**
 * Get comments pagination.
 *
 * @param array $args
 * @return string
 *
 * @see get_the_comments_pagination()
 */
function get_maupassant_comments_pagination( $args = array() ) {
    $navigation = '';
    $links = paginate_comments_links( $args );
    if ( $links ) {
        $navigation = _navigation_markup( $links, 'comments-pagination', $args[ 'screen_reader_text' ] );
    }
    return $navigation;
}

function maupassant_post_thumbnail() {
    if ( post_password_required() || is_attachment() || !has_post_thumbnail() ) {
        return;
    }

    echo '<div class="post-thumbnail">';
    the_post_thumbnail();
    echo '</div>';
}

/**
 * Render ICP link.
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
