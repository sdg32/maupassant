<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php maupassant_post_thumbnail(); ?>

    <header<?php if ( is_sticky() ) : ?> class="sticky-post"<?php endif; ?>>
		<?php if ( is_sticky() ) : ?><span class="sticky"></span><?php endif; ?>
		<?php if ( is_single() ) : ?>
            <h1 class="post-title"><?php the_title() ?></h1>
		<?php else : ?>
            <h2 class="post-title">
                <a href="<?php the_permalink(); ?>">
					<?php the_title() ?>
                </a>
            </h2>
		<?php endif; ?>
    </header>

    <ul class="post-meta">
        <li><?php the_time( get_option( 'date_format' ) ) ?></li>
        <li><?php echo get_the_tag_list( ' ', ', ' ) ?></li>
        <li class="comment-count">
			<?php maupassant_comments_popup_link(); ?>
        </li>
    </ul>

    <div class="post-content">
		<?php
		the_content(
			sprintf(
				__( 'Continue reading %s', 'maupassant' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			)
		);
		wp_link_pages();
		?>
    </div>
</article>