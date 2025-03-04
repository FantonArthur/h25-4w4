<?php
/**
 * Modèle de recherche
 */
?>

<?php
get_header();
?>
<section class="populaire">
   <?php
   if (have_posts()):
      while(have_posts()): the_post(); ?>
      <article  class="populaire__article">
         <h2 class="populaire__article"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
         <div class="populaire__contenu"><?php echo wp_trim_words(get_the_excerpt(), 60, "...") ?></div>
      </article>
      <?php endwhile; ?>
   <?php endif; ?>
</section>
<?php
get_footer();  ?> 
</body>
</html>