<?php 
  /**
   * Modèle de base de notre thème
   */
?>

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
                <img src="/4w4-wordpress/wp-content/themes/tp1/images/Arrière-plan logo supprimé.png" alt="logo voyage" width="100" height="100">
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
    <section class="hero">
        <div class="hero__contenu global">
            <h1 class="hero__titre">
            Voyagez Autrement avec Mondo Voyages !
            </h1>
            <p class="hero__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aspernatur est officiis, mollitia minus asperiores quas libero saepe consequuntur at blanditiis et eligendi, sequi sit quae laboriosam, ex delectus nesciunt.
            </p>
            <a href="" class="hero__courriel">
                info@cmaisonneuve.qc.ca
            </a>
            <button class="hero__bouton">
                Inscription
            </button>
            <div class="hero__icone-app">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
            </div>
        </div>
    </section>
    <section class="inscription">
    <div id="inscription__infos">
        <div class="nom">
            <p class="inscription__titre">NOM</p>
            <input type="text" id="nom" placeholder="Écrivez votre nom">
        </div>
        <div class="prenom">
            <p class="inscription__titre">PRENOM</p>
            <input type="text" id="prenom" placeholder="Écrivez votre prénom">
        </div>
        <div class="courriel">
            <p class="inscription__titre">COURRIEL</p>
            <input type="text" id="courriel" placeholder="Écrivez votre courriel">
        </div>
        <div class="telephone">
            <p class="inscription__titre">TELEPHONE</p>
            <input type="text" id="telephone" placeholder="Écrivez votre téléphone">
        </div>
    
            
            <button class="inscription__bouton">S'INSCRIRE</button>
        </div>
    </section>

    <section class="promotion">
        <h1 class="promotion__titre">Nos destinations favorites</h1>

        <div class="images__promotions">
            <img src="/4w4-wordpress/wp-content/themes/tp1/images/6.jpeg"   alt="">
            <img src="/4w4-wordpress/wp-content/themes/tp1/images/7.jpeg"   alt="">
            <img src="/4w4-wordpress/wp-content/themes/tp1/images/8.jpeg"   alt="">
            <img src="/4w4-wordpress/wp-content/themes/tp1/images/9.jpeg"  alt="">
            <img src="/4w4-wordpress/wp-content/themes/tp1/images/10.jpeg"  alt="">
            <img src="/4w4-wordpress/wp-content/themes/tp1/images/11.jpeg"  alt="">
            <img src="/4w4-wordpress/wp-content/themes/tp1/images/12.jpeg"   alt="">
            <img src="/4w4-wordpress/wp-content/themes/tp1/images/13.jpeg"  alt="">
            <img src="/4w4-wordpress/wp-content/themes/tp1/images/14.jpeg"   alt="">
            <img src="/4w4-wordpress/wp-content/themes/tp1/images/15.jpeg" alt="">
        </div>
    </section>


</body>
</html>