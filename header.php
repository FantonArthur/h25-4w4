<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4W4-Voyage</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <img src="<?php echo get_template_directory_uri() . '/images/Arrière-plan logo supprimé.png' ?>" alt="logo voyage" width="100" height="100">
            </figure>
            <div class="entete__nav">
                <nav class="entete__menu">
                <div class="menu">
                    <input type="checkbox" id="menu-toggle" class="menu__checkbox">
                    <label for="menu-toggle" class="menu__burger">☰</label>
                    <nav class="menu__items">
                        <ul class="menu__ul">
                            <li class="menu__li">
                                <a class="menu__a" href="#">Aventure</a>
                            </li>
                            <li class="menu__li">
                                <a class="menu__a" href="#">Sportive</a>
                            </li>
                            <li class="menu__li">
                                <a class="menu__a"  href="#">Culturelle</a>
                            </li>
                            <li class="menu__li">
                                <a  class="menu__a" href="#">Zen</a>
                            </li>
                            <li class="menu__li">
                                <a class="menu__a" href="#">Économique</a>
                            </li>
                            <li class="menu__li">
                                <a class="menu__a"  href="#">Pleine nature</a>
                            </li>
                            <li class="menu__li">
                                <a  class="menu__a" href="#">Croisière</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                </nav>
                <div class="entete__recherche">
                    <form  class="recherche">
                        <input type="text" class="recherche__input">
                        <img  class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="20" height="20">
                    </form>
                </div>
            </div>
        </div>
    </header>