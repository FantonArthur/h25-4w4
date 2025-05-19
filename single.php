<?php
/**
 *  single.php est le modèle pour chaque article individuel
 */
$hero_auteur = get_theme_mod('hero_auteur', ''); 
?>
<?php get_header() ?>
    <section class="populaire">
        <div class="global single">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populaire__article">
                <?php 
                if (has_post_thumbnail())
                the_post_thumbnail(); ?>
                <h2 class="populaire__nom"><?php the_title(); ?></h2>
                <div class="populaire__contenu"><?php the_content(); ?></div>
                    <p class="temp_min">Température minimum : <?php echo the_field('temperature_minimum'); ?> &#xB0;C</p>
                    <p class="temp_max">Température maximum : <?php echo the_field('temperature_maximum'); ?> &#xB0;C</p>
                    <p class="temp_moy">Température moyenne : <?php echo the_field('temperature_moyenne'); ?> &#xB0;C</p>
            </article>
                <?php
                    $categories = get_the_category();
                        if (!empty($categories)) {
                            foreach ($categories as $category) {
                            echo '<a class="carte__bouton carte__bouton--categorie" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                            }
                        }
                    ?>
            <p class="hero__auteur">Auteur : <?php echo esc_html($hero_auteur); ?></p>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>