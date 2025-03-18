<?php
/**
 * Modèle de recherche
 */
?>

<?php
get_header();
?>
<h1>search.php</h1>

<section class="populaire">
<h2 class="populaire__search">Résultats de recherche pour: <?php echo get_search_query(); ?></h2>
<div class="boiteflex global">
   <?php
   if (have_posts()):
      while(have_posts()): the_post(); ?>
     <?php get_template_part("gabarit/carte"); ?>
      <?php endwhile; ?>
   <?php endif; ?>
</div>
</section>
<?php
get_footer();  ?> 
</body>
</html>