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
                        <li><a href="#" class="toHide">Home</a></li>
                        <li><a href="#">O nas</a></li>
                        <li>

                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Oferta +</label>
                            <a href="#">Oferta</a>
                            <input type="checkbox" id="drop-2"/>
                            <ul>
                                <li class="toHide">

                                    <!-- Second Tier Drop Down -->
                                    <label for="drop-3" class="toggle">Rozwiązania +</label>
                                    <a href="#"class="short">Rozwiązania</a>
                                    <input type="checkbox" id="drop-3"/>
                                    <ul>
                                        <li><a href="#"class="short">Wdrażanie standardów</a></li>
                                        <li><a href="#"class="short">Programy rozwoju liderów</a></li>
                                        <li><a href="#"class="short">Akademie sprzedaży</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"class="short toShow">Rozwiązania</a></li>
                                <li><a href="#"class="short">Szkolenia</a></li>
                                <li><a href="#"class="short">Gry biznesowe</a></li>
                                <li><a href="#"class="short">Coaching</a></li>
                                <li><a href="#"class="short">Badania</a></li>
                            </ul>
                        </li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-1" class="toggle">Wiedza +</label>
                            <a href="#">Wiedza</a>
                            <input type="checkbox" id="drop-1"/>
                            <ul>
                                <li><a href="#" class="short">Blog</a></li>
                                <li><a href="#" class="short">Strefa wiedzy</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Książki</a></li>
                        <li><a href="#">Zaufali nam</a></li>
                    </ul>
                </nav>
    </div>
</header>
