<?php get_header(); ?>

<div class="col-8" id="main">
    <div class="res-cons">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;

			maupassant_posts_pagination();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
