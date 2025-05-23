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
    
    <?php
    // Affiche les sous-catégories de la catégorie "pays"
    if (function_exists('categories_liste')) {
        categories_liste('pays');
    }
    ?>
</section>

<?php get_footer(); ?>