<?php get_header(); ?>

<div class="col-8" id="main">
    <div class="res-cons">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                get_template_part( 'tpl-parts/content', get_post_format() );
            endwhile;

            the_posts_pagination( array(
                'prev_text'             => __( 'Previous', 'maupassant' ),
                'next_text'             => __( 'Next', 'maupassant' ),
                'screen_reader_text'    => ' ',
                'type'                  => 'list',
            ) );

        else :
            get_template_part( 'tpl-parts/content', 'none' );

        endif;
        ?>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>