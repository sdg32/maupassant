<?php if ( post_password_required() ) {
	return;
} ?>

<div id="comments">
	<?php if ( have_comments() ) : ?>
        <h3><?php maupassant_comments_popup_link(); ?></h3>

        <ol class="comment-list">
			<?php wp_list_comments( array(
				'type' => 'comment',
			) ) ?>
        </ol>

		<?php maupassant_comments_pagination( array(
			'prev_text'          => __( 'Previous', 'maupassant' ),
			'next_text'          => __( 'Next', 'maupassant' ),
			'screen_reader_text' => ' ',
			'type'               => 'list',
		) ) ?>
	<?php endif; ?>

	<?php comment_form( array(
		'id_form'       => 'comment-form',
		'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s">%4$s</button>',
	) ) ?>
</div>
