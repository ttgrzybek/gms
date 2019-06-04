<?php get_header(); ?>

<div class="background--image"></div>
<div class="container">
    <div class="row first--content row--one--column last--content">
        <div class="col col--texttop">
            <h3 class="coaching">Polityka prywatnosci</h3>
            <p class="">


                <?php
                $q2 = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => '1',
                    'category_name' => 'politykaprywatnosci',
                ]);
                ?>

                        <?php if ($q2->have_posts() ) : while ( $q2->have_posts() ) :    $q2->the_post(); ?>

                                <?php the_content();?>
                            <?php wp_reset_postdata(); ?>
                        <?php endwhile; ?>
                        <?php else: ?>
                        <?php endif; ?>




            </p>
        </div>
    </div>
</div>


<?php get_footer(); ?>
