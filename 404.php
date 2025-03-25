<?php get_header(); ?>

<section class="error-404 not-found">
  <h1>Error404.php</h1>
    <header class="page-header">
        <h1 class="page-title">Page non trouvée</h1>
    </header><!-- .page-header -->

    <div class="page-content">
        <p>Désolé, mais rien ne correspond à votre recherche. Essayez de nouveau avec des mots-clés différents.</p>
        <?php get_search_form(); ?>
    </div><!-- .page-content -->
</section><!-- .error-404 -->

<?php get_footer(); ?>