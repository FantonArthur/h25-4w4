<?php 
$hero_auteur = get_theme_mod('hero_auteur', ''); 

// Récupérer les images de fond pour le carrousel
$hero_bg = array();
for ($i = 1; $i <= 3; $i++) {
    $hero_bg[$i] = get_theme_mod('hero_background' . $i, get_template_directory_uri() . '/images/default-hero-' . $i . '.jpg');
}

$couleur = get_theme_mod('hero_couleur', '#fff');
$hero_email = get_theme_mod('hero_email', 'info@cmaisonneuve.qc.ca');
?>

<style>
    .hero__couleur {
        color: <?php echo $couleur ?>;
    }
</style>

<section class="hero">
    <!-- Contenu texte -->
    <div class="hero__contenu global">
    <div class="hero__animation">
             <h1 class="hero__titre">
                 <?php  bloginfo('name'); ?>
             </h1>
             <p class="hero__description">
             <?php  bloginfo('description'); ?>
             </p>
         </div>
        <a href="mailto:<?php echo esc_attr($hero_email); ?>" class="hero__courriel">
            <?php echo esc_html($hero_email); ?>
        </a>
        <button class="hero__bouton">Inscription</button>
        <div class="hero__icone-app">
            <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=f3d41c" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=f3d41c" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=f3d41c" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=f3d41c" width="20" height="20">
        </div>
        <p class="hero__auteur">Auteur : <?php echo esc_html($hero_auteur); ?></p>
    </div>

    <!-- Carrousel d'images de fond -->
    <div class="hero__carrousel" style="background-image: url('<?php echo esc_url($hero_bg[1]); ?>');"></div>
    <div class="hero__carrousel" style="background-image: url('<?php echo esc_url($hero_bg[2]); ?>');"></div>
    <div class="hero__carrousel" style="background-image: url('<?php echo esc_url($hero_bg[3]); ?>');"></div>




    <!-- Radio boutons pour changer de slide -->
    <div class="hero__radio">
        <input class="hero__radio__input" data-id_radio="0" type="radio" name="carroussel" checked="checked">
        <input class="hero__radio__input" data-id_radio="1" type="radio" name="carroussel">
        <input class="hero__radio__input" data-id_radio="2" type="radio" name="carroussel">
    </div>
</section>