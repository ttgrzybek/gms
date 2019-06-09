<?php get_header(); ?>

<div class="background--image"></div>
<div class="container first--content last--content">

    <?php
    $q2 = new WP_Query([
        'post_type' => 'post',
        'category_name' => 'szkolenia',
    ]);
    ?>

    <?php if ($q2->have_posts() ) : while ( $q2->have_posts() ) :    $q2->the_post(); ?>
        <div class="row row--one--column">
            <div class="col col--workshop post--content">

                <?php the_title('<h3 class="coaching">', '</h3>');?>

                <?php the_content('<h3 class="coaching">', '</h3>');?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>


</div>


<?php get_footer(); ?>


