<?php 
    get_header();
?>
    <div class="container_principal">
        <div class="container_formations">
            <div class="titre_container">
                <hr class="hr_divider" width="250px" height="10px" backgroung-color="black">
                <h1>
                    <?php $year = date("Y"); echo "Formations PUB020 : Wordpress, " . $year;?> 
                </h1>
                <hr class="hr_divider" width="250px" height="10px" backgroung-color="black">
            </div>

            <div class="contenu">
                <div class="container_bouton">
                    <button class="bouton_developper" onclick="expandAll()" id="expand_all toggleButton">
                        Tout développer
                    </button>
                </div>

                <div class="contenu_formation">
                    <div class="drag_chapitre collapsible">
                        <?php
                            $tableau_posts = array(
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'orderby' => 'date', // Tri par date de publication
                                'order' => 'ASC', // Du plus récent au plus ancien
                            );
                            
                            $query = new WP_Query($tableau_posts);
                            
                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                    $post_id = get_the_ID();
                                    $comments = get_comments(array(
                                        'post_id' => $post_id,
                                        'orderby' => 'comment_date',
                                        'order' => 'ASC'
                                    ));


                                    $comment_list = '<ul class="collapse_liste">';

                                    foreach ($comments as $comment) {
                                        $comment_list .= '<li class="collapse_item collapsible-content"><a href="#" class="collapse_link">' . esc_html($comment->comment_content) . '</a></li>'; 
                                    }

                                    $comment_list .= '</ul>';
                        ?>
                            <div class="chapitre1">
                                <div class="chapitre2 collapsible-header">
                                    <a href="#" class="lien_chapitre collapsible">
                                        <span class="span">
                                            <?php the_title(); ?>
                                        </span>
                                    </a>
                                </div> <!-- Fin de div pour chapitre2 et collapsible-header -->
                            </div> <!-- Fin de div pour chapitre1 -->
                            <div class="collapse_chapitre">
                                <div class="collapse_fiche_chapitre">
                                    <!-- <ul class="collapse_liste">
                                        <li class="collapse_item collapsible-content">
                                            <a href="#" class="collapse_link"> -->
                                                <?php echo $comment_list; ?>
                                            <!-- </a>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                            endif;
                        ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
<?php 
    get_footer();
?>