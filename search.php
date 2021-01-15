<?php get_header(); ?>

<div class="col-8" id="main">
    <div class="res-cons">
		<?php if ( have_posts() ) : ?>
            <header>
                <h1 class="archive-title">
					<?php printf( __( 'Search Results for: %s', 'maupassant' ), get_search_query() ); ?>
                </h1>
            </header>

			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;

			maupassant_posts_pagination();
			?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
