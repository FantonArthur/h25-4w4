<?php 
    // Récupération des images de fond depuis le customizer
    $hero_bg = array();
    for ($i = 1; $i <= 3; $i++) {
        $hero_bg[$i] = get_theme_mod('hero_background' . $i, '');
    }

    // Récupération des autres paramètres du customizer
    $hero_auteur = get_theme_mod('hero_auteur', 'Arthur Fanton');
    $hero_courriel = get_theme_mod('hero_courriel', 'info@cmaisonneuve.qc.ca');
    $couleur = get_theme_mod('hero_couleur', '#fff');
?>
<style>
  .hero_couleur {
    color: <?php echo esc_attr($couleur); ?>;
  }
</style>

<section class="hero" style="background-repeat: no-repeat;">
    <?php foreach ($hero_bg as $bg): ?>
        <?php if (!empty($bg)): ?>
            <div class="hero__carrousel" style="background-image: url('<?php echo esc_url($bg); ?>');"></div>
        <?php endif; ?>
    <?php endforeach; ?>

    <div class="hero__contenu global">
        <h1 class="hero__titre hero_couleur">
            <?php bloginfo('name'); ?>
        </h1>
        <p class="hero__description">
            <?php bloginfo('description'); ?>
        </p>
        <a href="mailto:<?php echo esc_attr($hero_courriel); ?>" class="hero__courriel hero_couleur">
            <p><?php echo esc_html($hero_courriel); ?></p>
        </a>
        <a class="hero__bouton" href="#">Inscription</a>
        <?php get_template_part("gabarit/icone_sociaux"); ?>
        <p class="hero__auteur hero_couleur">
            Auteur: <?php echo esc_html($hero_auteur); ?>
        </p>
    </div>
</section>