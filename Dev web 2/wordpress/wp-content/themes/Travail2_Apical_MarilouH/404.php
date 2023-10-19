<?php 
    get_header();
?>
    <div class="container_principal">
        <div class="container_formations">
            <div class="titre_container">
                <hr class="hr_divider" width="250px" height="10px" backgroung-color="black">
                <h1>
                    La page demandée n'existe pas
                </h1>
                <hr class="hr_divider" width="250px" height="10px" backgroung-color="black">
            </div>

            <div class="contenu">
                <p>La page demandée n'existe pas. Voici les pages disponibles sur Apical :</p>
                <ul class="list_contenu404">
                    <li class="contenu_404">
                        <?php
                            // Remplacez 123 par l'ID de la page que vous voulez afficher
                            $page_id = 180;

                            // Récupérer la page par son ID
                            $page = get_post($page_id);

                            // Vérifier si la page existe
                            if ($page) {
                                // Afficher le titre de la page
                                echo '<a href="<?php echo esc_url(home_url()); ?>">' . esc_html($page->post_title) . '</a>';

                                // Afficher le contenu de la page
                                echo apply_filters('the_content', $page->post_content);
                            } else {
                                // Si la page n'existe pas
                                echo "Page introuvable.";
                            }
                        ?>
                    </li>
                    <li class="contenu_404">
                        <?php
                            // Remplacez 123 par l'ID de la page que vous voulez afficher
                            $page_id = 144;

                            // Récupérer la page par son ID
                            $page = get_post($page_id);

                            // Vérifier si la page existe
                            if ($page) {
                                // Afficher le titre de la page
                                echo '<a>' . esc_html($page->post_title) . '</a>';

                                // Afficher le contenu de la page
                                echo apply_filters('the_content', $page->post_content);
                            } else {
                                // Si la page n'existe pas
                                echo "Page introuvable.";
                            }
                        ?>
                    </li>
                    <li class="contenu_404">
                        <?php
                            // Remplacez 123 par l'ID de la page que vous voulez afficher
                            $page_id = 148;

                            // Récupérer la page par son ID
                            $page = get_post($page_id);

                            // Vérifier si la page existe
                            if ($page) {
                                // Afficher le titre de la page
                                echo '<a>' . esc_html($page->post_title) . '</a>';

                                // Afficher le contenu de la page
                                echo apply_filters('the_content', $page->post_content);
                            } else {
                                // Si la page n'existe pas
                                echo "Page introuvable.";
                            }
                        ?>
                    </li>
                    <li class="contenu_404">
                        <?php
                            // Remplacez 123 par l'ID de la page que vous voulez afficher
                            $page_id = 183;

                            // Récupérer la page par son ID
                            $page = get_post($page_id);

                            // Vérifier si la page existe
                            if ($page) {
                                // Afficher le titre de la page
                                echo '<a>' . esc_html($page->post_title) . '</a>';

                                // Afficher le contenu de la page
                                echo apply_filters('the_content', $page->post_content);
                            } else {
                                // Si la page n'existe pas
                                echo "Page introuvable.";
                            }
                        ?>
                    </li>
                    <li class="contenu_404">
                        <?php
                            // Remplacez 123 par l'ID de la page que vous voulez afficher
                            $page_id = 185;

                            // Récupérer la page par son ID
                            $page = get_post($page_id);

                            // Vérifier si la page existe
                            if ($page) {
                                // Afficher le titre de la page
                                echo '<a>' . esc_html($page->post_title) . '</a>';

                                // Afficher le contenu de la page
                                echo apply_filters('the_content', $page->post_content);
                            } else {
                                // Si la page n'existe pas
                                echo "Page introuvable.";
                            }
                        ?>
                    </li>
                </ul>

            </div>

        </div>
    </div>










<?php 
    get_footer();
?>