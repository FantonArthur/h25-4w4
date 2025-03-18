<?php
/**
 *  single.php est le modèle pour chaque article individuel
 */
?>
<?php get_header() ?>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populaire__article">
                <?php 
                if (has_post_thumbnail())
                the_post_thumbnail(); ?>
                <h2 class="populaire__nom"><?php the_title(); ?></h2>
                <div class="populaire__contenu"><?php the_content(); ?></div>
            </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>