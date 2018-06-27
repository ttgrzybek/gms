<?php get_header(); ?>

<div class="container container--about">

        <?php

        $q2 = new WP_Query([

            'post_type' => 'post',
            'posts_per_page' => '6',
            'category_name' => 'o-nas'

        ]);
        ?>
<div class="row">
    <div class="col--big">
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
    <div class="col--big toHide">
        <img src="/gms/wp-content/themes/gms/images/leadership-1.jpg" alt="chess" class="chess toHide">
    </div>
    </div>

</div>


<?php get_footer(); ?>
