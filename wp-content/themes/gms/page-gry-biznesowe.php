<?php get_header(); ?>
    <div class="background--image"></div>
    <div class="container container--about first--content first--content--op">
        <?php
        $q2 = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => '6',
            'category_name' => 'game',
            'order' => 'ASC'
        ]);
        ?>
        <div class="row last--content">
            <div class="col col--big">
                <div class="slider3">
                    <?php if ($q2->have_posts() ) : while ( $q2->have_posts() ) :    $q2->the_post(); ?>
                        <div class="slider3--text">
                            <?php the_title('<h3>', '</h3>');?>

                            <?php the_content('<p>', '</p>');?>

                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>