<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__compagnies"> 
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
                3800 R. Sherbrooke E, Montréal, QC H1X 2A2
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <h2>Notre misssion</h2>
                Notre mission est d’inspirer et guider les voyageurs en offrant des conseils experts, des itinéraires personnalisés et des offres exclusives. Nous facilitons la découverte de destinations uniques, favorisons des expériences authentiques et simplifions l’organisation de chaque voyage pour le rendre inoubliable et sans stress.
            </div>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>


    </div>
</footer>
<?php wp_footer() ?>