        </div>
    </div>
</div>
<footer id="footer">
    <div class="container">
        &copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>.
        Powered by: <a href="https://wordpress.org">WordPress</a>.
        <?php 
            if ( defined('WP_ZH_CN_ICP_NUM') && WP_ZH_CN_ICP_NUM && get_option('zh_cn_l10n_icp_num') ) {
                echo 'ICP: <a href="https://beian.miit.gov.cn" rel="nofollow" target="_blank">';
                echo esc_attr( get_option( 'zh_cn_l10n_icp_num' ) );
                echo '</a>.';
            }
        ?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
