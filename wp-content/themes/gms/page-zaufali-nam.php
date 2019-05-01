<?php get_header(); ?>

<div class="background--image"></div>

    <div class="container first--content">
        <div class="row row--one--column">
            <div class="col col--left--justify">
                <?php
                $q3 = new WP_Query([

                    'post_type' => 'client',
                    'posts_per_page' => '100',
                    'orderby' => 'title',
                    'order' => 'ASC',
                  /*  'tax_query' => [
                        [
                            'taxonomy' => 'branch',
                           // 'field' => 'slug',
                            'terms' => 'fmcg'
                        ]
                    ] */
                ]);
                ?>
                <ul class="text--columns"><h2>Zaufali nam</h2>

                    <?php if ($q3->have_posts()) : while ($q3->have_posts()) : $q3->the_post(); ?>
                        <!-- post -->

                                <?php the_title('<li>', '</li>'); ?>

                        <?php wp_reset_postdata(); ?> <!-- to się zabezpiecza przed spierdoleniem, trzeba przy wszystkich własnych pętlach to robić na koniec


            <?php endwhile; ?>
                <!-- post navigation -->
                    <?php else: ?>
                        <!-- no posts found -->
                    <?php endif; ?>
                </ul>
            </div>

    </div>

</div>


<?php get_footer(); ?>
