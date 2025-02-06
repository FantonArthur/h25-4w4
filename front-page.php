<?php 
  /**
   * Modèle de base de notre thème
   */
?>

<?php get_header(); ?>
    <h1>Front-page</h1>
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
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populaire__article"> 
                <h2 class="populaire__titre" ><?php the_title(); ?></h2>
                <div class="populaire__contenu" ><?= wp_trim_words(get_the_content(), 20, "..."); ?></div>
            </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>