<?php get_header(); ?>

<div class="col-8" id="main">
    <div class="res-cons">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_format() );

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile;
		?>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
