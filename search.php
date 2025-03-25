<?php
/**
 * Modèle de recherche
 */
?>

<?php get_header(); ?>

<section class="populaire">
    <h2 class="populaire__search">Résultats de recherche pour: <?php echo get_search_query(); ?></h2>
    <div class="boiteflex global">
        <?php if (have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <?php get_template_part("gabarit/carte"); ?>
            <?php endwhile; ?>
        <?php else: ?>
         <?php get_template_part('404'); ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
</body>
</html>