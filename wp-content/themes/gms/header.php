<?php
/**
 * Created by PhpStorm.
 * User: kazikkoduje
 * Date: 04.04.18
 * Time: 12:07
 */
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="container">
                <nav class="header">
                    <div id="logo" class="toHide">   <a href="<?php echo site_url('/'); ?>"><img alt="Logo" height="60px" src="/gms/wp-content/themes/gms/images/1.png"></a></div>
                    <div id="logo2" class="toShow">   <a href="<?php echo site_url('/'); ?>"><img alt="Logo" height="60px" src="/gms/wp-content/themes/gms/images/3.png"></a></div>
                    <label for="drop" class="toggle toggle-menu">Menu  <svg viewBox="0 0 24 24" height=".85em" width=".85em" style="position: relative; margin-right: 8px;"><title>Search</title><path fill="#fff" d="M23.33 20.1l-4.73-4.74a10.06 10.06 0 1 0-3.23 3.23l4.74 4.74a2.29 2.29 0 1 0 3.22-3.23zm-17.48-5.84a5.94 5.94 0 1 1 8.42 0 6 6 0 0 1-8.42 0z"></path></svg></label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li><a href="<?php echo site_url('/'); ?>" class="toHide">Home</a></li>
                        <li><a href="<?php echo site_url( '/?p=5/' ); ?>">O nas</a></li>
                        <li>

                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Oferta +</label>
                            <a href="#">Oferta</a>
                            <input type="checkbox" id="drop-2"/>
                            <ul>
                                <li>
                                    <a href="#"class="short">Rozwiązania</a>
                                </li>
<!--                                <li><a href="#"class="short toShow">Rozwiązania</a></li>-->
                                <li><a href="<?php echo site_url( '/?p=74/' ); ?>"class="short">Szkolenia</a></li>
                                <li><a href="<?php echo site_url( '/?p=78/' ); ?>"class="short">Gry biznesowe</a></li>
                                <li><a href="<?php echo site_url( '/?p=92/' ); ?>"class="short">Coaching</a></li>
                                <li><a href="<?php echo site_url( '/?p=94/' ); ?>"class="short">Badania</a></li>
                            </ul>
                        </li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <a href="#">Wiedza</a>
                        </li>

                        <li><a href="<?php echo site_url( '/?p=44/' ); ?>">Książki</a></li>
                        <li><a href="<?php echo site_url( '/?p=9/' ); ?>">Zaufali nam</a></li>
                    </ul>
                </nav>
    </div>
</header>
