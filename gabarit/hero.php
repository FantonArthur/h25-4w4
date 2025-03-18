<?php $hero_bg = get_theme_mod('hero_background_image');
      $hero_auteur = get_theme_mod('hero_auteur', 'Arthur Fanton');
      $hero_courriel = get_theme_mod('hero_courriel', 'info@cmaisonneuve.qc.ca');
      $couleur = get_theme_mod('hero_couleur', '#fff');
 ?>
<style>
  .hero_couleur {
    color: <?php echo $couleur; ?>;
  }
</style>

<section class="hero" style=" background-repeat: no-repeat;">
        <div class="hero__contenu global">
            <h1 class="hero__titre hero_couleur" >
                <?php  bloginfo('name'); ?>
            </h1>
            <p class="hero__description">
            <?php  bloginfo('description'); ?>
            </p>
            <a href="" class="hero__courriel hero_couleur">
                <p><?= $hero_courriel; ?></p>
            </a>
            <a class="hero__bouton" href="">Inscription</a>
            <?php get_template_part("gabarit/icone_sociaux"); ?>
            <p class="hero__auteur hero_couleur">
                Auteur: <?php echo $hero_auteur; ?>
            </p>
        </div>
    </section>