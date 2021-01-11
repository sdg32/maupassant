<?php get_header(); ?>

<div class="col-8" id="main">
    <div class="res-cons">
        <?php if ( have_posts() ) : ?>
            <header>
                <?php
                the_archive_title( '<h1 class="archive-title">', '</h1>' );
                the_archive_description( '<div>', '</div>' );
                ?>
            </header>
            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_format() );
            endwhile;

            the_posts_pagination( array(
                'prev_text' => __( 'Previous', 'maupassant' ),
                'next_text' => __( 'Next', 'maupassant' ),
                'screen_reader_text' => ' ',
                'type' => 'list',
            ) );
            ?>
        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
