<?php
/**
 * Pour l'ajout d'options à notre thème
 */
function theme_31w_customize_register($wp_customize) {
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  $wp_customize->add_section('hero_section', array(
    'title' => __('Hero Section', 'theme_31w'),
    'priority' => 30,
  ));

  // Auteur
  $wp_customize->add_setting('hero_auteur', array(
    'default' => __('Arthur Fanton', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('hero_auteur', array(
    'label' => __('Auteur', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
  ));

  // Courriel
  $wp_customize->add_setting('hero_courriel', array(
    'default' => __('info@cmaisonneuve.qc.ca', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('hero_courriel', array(
    'label' => __('Courriel', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
  ));

  // Background Image
  for( $i = 1; $i <= 3; $i++) {
    $wp_customize->add_setting('hero_background' . $i, array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background' . $i, array(
      'label' => __('Image en Background' . $i, 'theme_31w'),
      'section' => 'hero_section',
    )));
  }

  // Couleur
  $wp_customize->add_setting('hero_couleur', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
    'label' => __('Couleur du texte', 'theme_31w'),
    'section' => 'hero_section',
  )));

  // Footer
  $wp_customize->add_section('footer_section', array(
    'title' => __('Section Pied de page', 'theme_31w'),
    'priority' => 30,
  ));

  // Mission
  $wp_customize->add_setting('footer_mission', array(
    'default' => __('Mission du club de voyage', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('footer_mission', array(
    'label' => __('Mission', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'textarea',
  ));

  // Adresse
  $wp_customize->add_setting('footer_adresse', array(
    'default' => __('Adresse', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_adresse', array(
    'label' => __('Adresse', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  // Telephone
  $wp_customize->add_setting('footer_telephone', array(
    'default' => __('Telephone', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_telephone', array(
    'label' => __('Telephone', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  // Couleur de fond
  $wp_customize->add_setting('footer_couleur_arriere', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_couleur_arriere', array(
    'label' => __('Couleur de fond', 'theme_31w'),
    'section' => 'footer_section',
  )));

  // Erreur 404
  $wp_customize->add_section('error_404_section', array(
    'title' => __('Erreur 404', 'theme_31w'),
    'priority' => 30,
  ));

  // Erreur 404 titre
  $wp_customize->add_setting('erreur_titre', array(
    'default' => __('Page non trouvée', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('erreur_titre', array(
    'label' => __('Erreur titre', 'theme_31w'),
    'section' => 'error_404_section',
    'type' => 'text',
  ));

  // Erreur 404 explication
  $wp_customize->add_setting('erreur_explication', array(
    'default' => __('Désolé, mais rien ne correspond à votre recherche. Essayez de nouveau avec des mots-clés différents.', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('erreur_explication', array(
    'label' => __('Explication', 'theme_31w'),
    'section' => 'error_404_section',
    'type' => 'text',
  ));

    // Erreur 404 image background
    $wp_customize->add_setting('erreur_image', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_image', array(
      'label' => __('Image en Background', 'theme_31w'),
      'section' => 'error_404_section',
    )));
}

add_action('customize_register', 'theme_31w_customize_register');