<?php /**
 *  Gabarit permettant d'afficher une carte
 */ 
?>

<article class="carte carte--grande">
                <div class="carte__contenu">
                    <?php
                    if (has_post_thumbnail()) {
                        // permet d'afficher la petite image associé à l'article (image mise en avant)
                        the_post_thumbnail('thumbnail'); }
                    ?>
                    <h2 class="carte__titre"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></h2>
                    <p class="carte__description"><?php echo wp_trim_words(get_the_excerpt(), 20, "...") ; ?></p>
                    <?php
                        $categories = get_the_category();
                            if (!empty($categories)) {
                            foreach ($categories as $category) {
                            echo '<a class="carte__bouton carte__bouton--categorie" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                            }
                        }
                    ?>
                    <p class="temp_min">Température minimum : <?php echo the_field('temperature_minimum'); ?> &#xB0;C</p>
                    <p class="temp_max">Température maximum : <?php echo the_field('temperature_maximum'); ?> &#xB0;C</p>
                </div>
            </article>