<?php get_header(); ?>

<?php $Pays_texte = get_theme_mod('Pays_texte', ''); ?>

<section class="Pays">
        <p><?php echo $Pays_texte; ?></p>
  <div class="entete__nav" id="accueil">
                <?php wp_nav_menu(array(
                            'menu' => 'principal',
                            'container' => 'nav',
                            'container_class' => 'entete__menu',
                )); ?>
                <div class="entete__recherche">
                    <?php get_search_form(); ?>
                </div>
            </div>
</section>

<?php get_footer(); ?>