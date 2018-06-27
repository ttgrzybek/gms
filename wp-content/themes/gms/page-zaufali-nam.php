<?php get_header(); ?>

<div class="container container--slider first--content">
    <?php
    $q3 = new WP_Query([

        'post_type' => 'client',
        'posts_per_page' => '100',
        'tax_query' => [
            [
                'taxonomy' => 'branch',
                'field' => 'slug',
                'terms' => 'fmcg'
            ]
            ]
    ]);
    ?>
    <h2><ul>FMCG

        <?php if ($q3->have_posts()) : while ($q3->have_posts()) : $q3->the_post(); ?>
            <!-- post -->
            <div class=""><div>
                    <?php the_title('<li>', '</li>'); ?>
                </div>
            </div>
            <?php wp_reset_postdata(); ?> <!-- to się zabezpiecza przed spierdoleniem, trzeba przy wszystkich własnych pętlach to robić na koniec


            <?php endwhile; ?>
                <!-- post navigation -->
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>
    </ul></h2>
</div>

<?php get_footer(); ?>
