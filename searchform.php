<form id="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="search-input" class="screen-reader-text"><?php _e( 'Search...', 'maupassant' ) ?></label>
    <input type="text" id="search-input" name="s" class="text" placeholder="<?php _e( 'Search...', 'maupassant' ) ?>">
    <button type="submit" class="submit"></button>
</form>
