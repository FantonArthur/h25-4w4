<?php get_header(); ?>

<?php $erreur_titre = get_theme_mod('erreur_titre', 'Default title'); ?>
<?php $erreur_explication = get_theme_mod('erreur_explication', ''); ?>

<section class="error-404 not-found">
    <header class="page-header">
        <h1 class="page-title"><?= $erreur_titre; ?></h1>
    </header>
    <div class="page-content">
        <p><?php echo $erreur_explication; ?></p>
        <?php get_search_form(); ?>
    </div>
</section>

<?php get_footer(); ?>