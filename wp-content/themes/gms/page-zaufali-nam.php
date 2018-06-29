<?php get_header(); ?>

<div class="background--image"></div>

    <div class="container container--slider first--content">
        <div class="row row--one--column">
            <div class="col col--left--justify">
                <?php
                $q3 = new WP_Query([

                    'post_type' => 'client',
                    'posts_per_page' => '100',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'tax_query' => [
                        [
                            'taxonomy' => 'branch',
                            'field' => 'slug',
                            'terms' => 'fmcg'
                        ]
                    ]
                ]);
                ?>
                <ul><h2>FMCG</h2>

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
                </ul>
            </div>
            <div class="col red col--left--justify">
                <?php
                $q4 = new WP_Query([

                    'post_type' => 'client',
                    'posts_per_page' => '100',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'tax_query' => [
                        [
                            'taxonomy' => 'branch',
                            'field' => 'slug',
                            'terms' => 'medyczna'
                        ]
                    ]
                ]);
                ?>
                <ul><h2>Medyczna</h2>

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
                </ul>
            </div>
            <div class="col col--left--justify">
                <?php
                $q5 = new WP_Query([

                    'post_type' => 'client',
                    'posts_per_page' => '100',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'tax_query' => [
                        [
                            'taxonomy' => 'branch',
                            'field' => 'slug',
                            'terms' => 'Budowlana'
                        ]
                    ]
                ]);
                ?>
                <ul><h2>Budowlana</h2>

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
                </ul>
            </div>
        </div>
        <div class="row last--content row--one--column">
            <div class="col red col--left--justify">
                <?php
                $q3 = new WP_Query([

                    'post_type' => 'client',
                    'posts_per_page' => '100',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'tax_query' => [
                        [
                            'taxonomy' => 'branch',
                            'field' => 'slug',
                            'terms' => 'fmcg'
                        ]
                    ]
                ]);
                ?>
                <ul><h2>FMCG</h2>

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
                </ul>
            </div>
            <div class="col col--left--justify">
                <?php
                $q4 = new WP_Query([

                    'post_type' => 'client',
                    'posts_per_page' => '100',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'tax_query' => [
                        [
                            'taxonomy' => 'branch',
                            'field' => 'slug',
                            'terms' => 'medyczna'
                        ]
                    ]
                ]);
                ?>
                <ul><h2>Medyczna</h2>

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
                </ul>
            </div>
            <div class="col red col--left--justify">
                <?php
                $q5 = new WP_Query([

                    'post_type' => 'client',
                    'posts_per_page' => '100',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'tax_query' => [
                        [
                            'taxonomy' => 'branch',
                            'field' => 'slug',
                            'terms' => 'Budowlana'
                        ]
                    ]
                ]);
                ?>
                <ul><h2>Budowlana</h2>

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
                </ul>
            </div>
        </div>
    </div>



</div>


<?php get_footer(); ?>
