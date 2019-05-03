<?php get_header(); ?>

<div class="background--image"></div>

<div class="hero">
<div class="container first--content--fp">
    <div class="row">
        <div class="col--big toHide">
            <div class="row left slider1">
                <div class="col slider--text--fp">
                    <a class="clicker" href="<?php echo site_url( '/?p=103/' ); ?>"></a>
                </div>
                <div class="col slider--text--fp">
                    <a class="clicker" href="<?php echo site_url( '/?p=103/' ); ?>"></a>
                </div>
                <div class="col slider--text--fp">
                    <a class="clicker" href="<?php echo site_url( '/?p=103/' ); ?>"></a>
                </div>
            </div>
        </div>
        <div class="col--big">
            <section class="navigation-tiles">
                <div class="row">
                    <a href="<?php echo site_url( '/?p=103/' ); ?>" class="col animated">Rozwiązania</a>
                    <a href="<?php echo site_url( '/?p=74/' ); ?>" class="col animated red">Szkolenia</a>
                </div>
                <div class="row">
                    <a href="<?php echo site_url( '/?p=78/' ); ?>" class="col animated red">Gry biznesowe</a>
                    <a href="<?php echo site_url( '/?p=92/' ); ?>" class="col animated">Coaching</a>
                </div>
                <div class="row">
                    <a href="<?php echo site_url( '/?p=94/' ); ?>" class="col animated">Badania</a>
                    <a href="<?php echo site_url( '/?p=44/' ); ?>" class="col animated red">Książki</a>
                </div>
            </section>
        </div>
    </div>
</div>
</div>
<div class="container--slider">
    <div class="container">
        <?php
        $q = new WP_Query([

            'post_type' => 'client',
            'posts_per_page' => '50',
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

</div>
<?php get_footer(); ?>
