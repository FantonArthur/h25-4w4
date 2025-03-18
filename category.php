<?php get_header() ?>

<h1>category.php</h1>

<section class="populaire">
        <h2 class="populaire__titre"><?php the_category(); ?></h2>
        <div class="boiteflex global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (in_category('galerie')){
                the_content();
            } else { ?>
            <?php get_template_part("gabarit/carte"); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>

  <?php get_footer(); ?>