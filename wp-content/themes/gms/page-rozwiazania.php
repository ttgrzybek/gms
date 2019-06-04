<?php get_header(); ?>

<div class="background--image"></div>
<div class="container first--content">

                <?php
                $q2 = new WP_Query([
                    'post_type' => 'post',
                    'category_name' => 'rozwiazania',
                ]);
                ?>

                <?php if ($q2->have_posts() ) : while ( $q2->have_posts() ) :    $q2->the_post(); ?>
            <div class="row row--one--column">
                <div class="col col--texttop post--content">

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






<?php /*get_header(); */?><!--

<div class="background--image"></div>
<div class="container">

    <div class="row row--one--column first--content">
        <div class="col">
            <h3 class="coaching">Wdrażanie standardów</h3>
            <p class="coaching">Mirror™ to metoda badawcza z grupy 360° pozwalająca na pozyskanie informacji na temat kompetencji menedżerskich. Zachowania menedżerów badane są dzięki zebraniu i analizie informacji zwrotnych od pięciu grup osób: samego menedżera, jego przełożonych, jego współpracowników, jego podwładnych oraz od innych osób, z którymi pracuje tj. klientów, dystrybutorów, członków zespołu projektowego. Badanie jest przeprowadzane w oparciu o model kompetencji menedżerskich GM Solutions lub o model kompetencji klienta. W efekcie badania przygotowywany jest obszerny, 11-częściowy raport. Badanie zwiększa świadomość kompetencji własnych menedżera i pozwala na odpowiednie ukierunkowanie jego rozwoju zawodowego.</p>
        </div>
    </div>
    <div class="row row--one--column">
        <div class="col">
            <h3 class="coaching">PR Liderów?</h3>
            <p class="coaching">Assessment Centre jest rozbudowanym narzędziem diagnostycznym opartym na specjalnie dobranych zadaniach symulujących rzeczywiste sytuacje zachodzące w miejscu pracy. Pozwala na obiektywne zbadanie potencjału i możliwości jednostki w procesie rekrutacji oraz w programach rozwojowych. Assessment jest narzędziem selekcji, Development Centre – rozwoju. Najsilniejsze efekty rozwojowe obserwujemy w przypadku sesji Development Centre, gdzie po każdej sesji zadaniowej uczestnik otrzymuje informację zwrotną, którą może wykorzystać w kolejnym zadaniu.</p>
        </div>
    </div>

    <div class="row row--one--column last--content">
        <div class="col">
            <h3 class="coaching">Akademie sprzedaży</h3>
            <p class="coaching">Assessment Centre jest rozbudowanym narzędziem diagnostycznym opartym na specjalnie dobranych zadaniach symulujących rzeczywiste sytuacje zachodzące w miejscu pracy. Pozwala na obiektywne zbadanie potencjału i możliwości jednostki w procesie rekrutacji oraz w programach rozwojowych. Assessment jest narzędziem selekcji, Development Centre – rozwoju. Najsilniejsze efekty rozwojowe obserwujemy w przypadku sesji Development Centre, gdzie po każdej sesji zadaniowej uczestnik otrzymuje informację zwrotną, którą może wykorzystać w kolejnym zadaniu.</p>
        </div>
    </div>


</div>


--><?php /*get_footer(); */?>
