<?php 
/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categories_liste($parent_slug) {
    // Récupérer la catégorie parente à partir de son slug
    $parent_category = get_category_by_slug($parent_slug); 

    // Vérifier si la catégorie parente existe
    if ($parent_category) {
        $parent_id = $parent_category->term_id;

        // Récupérer les sous-catégories
        $sous_categories = get_categories(array(
            'parent' => $parent_id,
            'hide_empty' => true,
        ));

        // Vérifier s'il y a des sous-catégories
        if (!empty($sous_categories)) {
            echo '<ul class="categorie__ul">';
            foreach ($sous_categories as $categorie) {
                echo '<li data-id="' . esc_html($categorie->term_id) . '" class="categorie__ul__li">' . esc_html($categorie->name) . '</li>';
            }
            echo '</ul>';
        }
    }
}
?>