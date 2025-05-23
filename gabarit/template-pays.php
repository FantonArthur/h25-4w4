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

    <div class="destination__list"></div>
    <?php vague('blue'); ?>
</section>

<?php
$galerie = get_field('galerie'); // 'galerie' est le nom du champ ACF sur la page
if ($galerie) {
    echo '<section class="galerie"><div class="boiteflex global">';
    foreach ($galerie as $image) {
        echo '<img src="' . esc_url($image['sizes']['medium']) . '" alt="' . esc_attr($image['alt']) . '" style="margin:0 10px 10px 0;max-width:150px;max-height:150px;">';
    }
    echo '</div></section>';
}
?>

<?php get_footer(); ?>