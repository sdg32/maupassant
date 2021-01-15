<article class="post">
    <header>
        <h1 class="post-title screen-render-text">
			<?php _e( 'Nothing Found', 'maupassant' ) ?>
        </h1>
    </header>
    <div class="post-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
            <p>
				<?php
				printf(
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'maupassant' ),
					esc_url( admin_url( 'post-new.php' ) )
				);
				?>
            </p>
		<?php elseif ( is_search() ) : ?>
            <p>
				<?php
				_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'maupassant' );
				?>
            </p>
		<?php else : ?>
            <p>
				<?php
				_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'maupassant' );
				?>
            </p>
		<?php endif; ?>
    </div>
</article>
