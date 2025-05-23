<?php
/*
Template Name: Gabarit Pays
*/
?>

<?php get_header(); ?>

<?php $Pays_texte = get_theme_mod('Pays_texte', ''); ?>

<section class="Pays">
    <h2 class="Pays__titre">Pays incontournables</h2>
    <p><?php echo $Pays_texte; ?></p>
    <?php vague($footer_couleur_arriere); ?>

    <div class="entete__nav" id="accueil">
        <?php wp_nav_menu(array(
            'menu' => 'Pays',
            'container' => 'nav',
            'container_class' => 'Pays_menu',
        )); ?>
    </div>

    <section class="galerie">
        <div class="boiteflex global">
          <section class="galerie">
                        <?php if (in_category('galerie')){
                the_content();
            } ?>
            <img src="" alt="">
          </section>
        </div>
    </section>

    <div class="destination__list"></div>
    <?php vague('blue'); ?>
</section>

<?php get_footer(); ?>