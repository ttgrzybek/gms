<?php get_header(); ?>

<div class="hero">
<div class="container first--content">
    <div class="row">
        <div class="col--big toHide">
            <div class="row left slider1">
                <div class="col slider--text">Rozwiązania</div>
                <div class="col slider--text">Rozwiązania</div>
                <div class="col slider--text">Rozwiązania</div>
            </div>
        </div>
        <div class="col--big">
            <section class="navigation-tiles">
                <div class="row">
                    <a href="" class="col">Rozwiązania</a>
                    <a href="" class="col red">Szkolenia</a>
                </div>
                <div class="row">
                    <a href="" class="col red">Gry biznesowe</a>
                    <a href="" class="col">Coaching</a>
                </div>
                <div class="row">
                    <a href="" class="col">Badania</a>
                    <a href="" class="col red">Książki</a>
                </div>
            </section>
        </div>
    </div>
</div>
</div>
<div class="container container--slider">
        <?php
        $q = new WP_Query([

            'post_type' => 'client',
            'posts_per_page' => '100',
        ]);
        ?>

        <div class="slider2">
            <?php if ($q->have_posts()) : while ($q->have_posts()) : $q->the_post(); ?>
                <!-- post -->
            <div class="img--container"><div>
                    <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                </div>
            </div>
                <?php wp_reset_postdata(); ?> <!-- to się zabezpiecza przed spierdoleniem, trzeba przy wszystkich własnych pętlach to robić na koniec


            <?php endwhile; ?>
                <!-- post navigation -->
            <?php else: ?>
                <!-- no posts found -->
            <?php endif; ?>
        </div>
</div>
<?php get_footer(); ?>
