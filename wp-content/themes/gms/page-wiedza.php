<?php get_header(); ?>
    <div class="background--image"></div>
    <div class="container container--about first--content">
        <?php
        $q4 = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => '30',
            'category_name' => 'blog',
            'orderby' => 'date',
            'order' => 'desc'
        ]);
        ?>
        <div class="row last--content">
            <div class="col col--big">
                <div class="container">
                    <?php if ($q4->have_posts() ) : while ( $q4->have_posts() ) :    $q4->the_post(); ?>
                        <div class="post">
                            <?php the_title('<h3>', '</h3>');?>
                            <?php the_content('<p>', '</p>');?>
                           <!-- <a href="<?php /*the_permalink(); */?>">Czytaj więcej...</a>-->

                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>