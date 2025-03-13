<footer>
    <?php $footer_mission = get_theme_mod('footer_mission', ''); 
    $footer_adresse = get_theme_mod('footer_adresse', '');
    $footer_telephone = get_theme_mod('footer_telephone', '');
    ?>


    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__compagnies"> 
                <h2>Compagnies de voyages</h2>
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe"
                )); ?>
                </div>
            <div class="piedpage__s1__externe">
                <h2>À propos de nous</h2>
                <div class="piedpage__s1__adresse__coord">
                <p>Auteur : Arthur Fanton</p>
                <a href=""><?= $footer_adresse; ?></a>
                <p><?= $footer_telephone; ?></p>
                <a href="" class="hero__courriel">
                info@cmaisonneuve.qc.ca
                </a>
            </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <h2>Notre misssion</h2>
                <?= $footer_mission; ?>
            </div>
            <div class="entete__nav">
                <?php wp_nav_menu(array(
                            'menu' => 'principal',
                            'container' => 'nav',
                            'container_class' => 'entete__menu',
                )); ?>
                </div>
        </section>
    </div>
</footer>
<?php wp_footer() ?>