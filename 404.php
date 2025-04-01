<?php get_header(); ?>

<?php $erreur_titre = get_theme_mod('erreur_titre', 'Default title'); ?>
<?php $erreur_explication = get_theme_mod('erreur_explication', ''); ?>
<?php $erreur_bg = get_theme_mod('erreur_image', ''); ?>

<section class="error-404 not-found" style="background-image: url(<?php echo esc_url($erreur_bg); ?>); width: 100%; height: 100vh; background-size: cover; background-position: center;">
    <header class="page-header">
        <h1 class="page-title"><?= $erreur_titre; ?></h1>
    </header>
    <div class="page-content" >
        <p><?php echo $erreur_explication; ?></p>
        <!-- Bouton retour a l'accueil -->
        <?php wp_nav_menu(array(
                            'menu' => 'Erreur_404',
                            'container' => 'nav',
                            'container_class' => 'menu__404',
                )); ?>
        <?php get_search_form(); ?>
    </div>
</section>

<?php get_footer(); ?>