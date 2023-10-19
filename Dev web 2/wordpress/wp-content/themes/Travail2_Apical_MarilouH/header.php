<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Apical | Travail 2</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Reproduction du site web de Christiane, Apical, sur Wordpress comme TP 2 en Dev. Web 2">
    <meta name="author" content="Marilou Héon">    
    
    <?php 
        wp_head();
    ?>

</head> 

<body>
    <header class="entete_principal"> 
        <div class="premier_menu">
            <div class="menu_container">
                <div class="gauche1">
                    <div class="gauche2">
                        <a href="#" class="titre_Apical">
                            <img src="https://apical.xyz/medias/fr/LogoApical-blanc.svg" width="350px" alt="Logo Apical">
                        </a>  
                    </div> 
                </div>
                
                <div class="droite">
                    <div class="menu_icones">
                        <a href="<?php echo esc_url(home_url()); ?>" class="home icones " >
                            <span class="tooltip" data-tooltip="Menu Principal">
                            <img class="image_icones" src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Logo Apical">
                            </span>
                        </a>
                        <a href="" class="favoris icones ">
                            <span class="tooltip" data-tooltip="Favoris">
                            <img class="image_icones" src="https://apical.xyz/medias/commun/Favoris-MenuSecondaire.svg" alt="Logo Apical">
                            </span>
                        </a>
                        
                        <a href="" class="rechercher icones ">
                            <span class="tooltip"  data-tooltip="Recherche">
                            <img class="image_icones" src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Logo Apical">
                            </span>
                        </a>
                        <div class="authentification">
                            <a class="connection icones" onclick="ouvrir_authentification()">
                                <span class="tooltip" data-tooltip="Authentification">
                                <img class="image_icones" src="https://apical.xyz/medias/commun/LoginFait-MenuSecondaire.svg" alt="Logo Apical">
                                </span>
                            </a>
                            <div class="container_authentification container_fermer">
                                <div class="formulaire_authentification">
                                    <form class="formulaire" method="post" action="connexion.php">
                                        <div class="divFormulaire1">
                                            <div class="ligne-formulaire  label_usager">
                                                <label for="code" class="aligne usager">* Usager: </label>
                                                <input type="text" id="code" name="code">                                            </div>
                                            <div class="ligne-formulaire label_mdp">
                                                <label for="motdepasse" class="aligne mdp">* Mot de passe: </label>
                                                <input type="password" id="motdepasse" name="motdepasse">                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="divPasImportante2"></div>
                                            <div class="divFormulaire2">
                                                <div class="ligne-formulaire">
                                                    <label>
                                                        <input class="form-check-input " type="checkbox" id="resterconnecte" name="resterconnecte" data-gtm-form-interact-field-id="2">
                                                        Rester connecté
                                                    </label>
                                                </div>
                                                <div class="ligne-formulaire">
                                                    <input type="submit" id="soumettre" name="submit" value="Soumettre">
                                                </div>
                                                <div>
                                                    <a class="nouvel_usager">Nouvel usager</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <span class="boutonRefermer" id="boutonRefermer" onclick="fermer_authentification()"><i class="fa-solid fa-xmark"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="menu_navigation">
            <div class="menu_navBar">
                <ul class="liste_link_nav">
                    <li class="item_nav">
                        <div class="dropdown_nav_link">
                            <?php
                                // Remplacez 123 par l'ID de la page que vous voulez afficher
                                $page_id = 142;

                                // Récupérer la page par son ID
                                $page = get_post($page_id);

                                // Vérifier si la page existe
                                if ($page) {
                                    // Afficher le titre de la page
                                    echo '<a href="#" class="nav_link">' . esc_html($page->post_title) . '</a>';

                                    // Afficher le contenu de la page
                                    echo apply_filters('the_content', $page->post_content);
                                } else {
                                    // Si la page n'existe pas
                                    echo "Page introuvable.";
                                }
                            ?>
                        </div>
                        <div class="dropdown dropdown_formation" id="dropdown">
                            <h6>Dernières formations consultées</h6>
                            <a class="dropdown_item" href="#">Réinitialiser la liste</a>
                        </div>
                    </li>
                    <li class="item_nav">
                        <div class="dropdown_nav_link">
                        <?php
                            // Remplacez 123 par l'ID de la page que vous voulez afficher
                            $page_id = 144;

                            // Récupérer la page par son ID
                            $page = get_post($page_id);

                            // Vérifier si la page existe
                            if ($page) {
                                // Afficher le titre de la page
                                echo '<a href="#" class="nav_link">' . esc_html($page->post_title) . '</a>';

                                // Afficher le contenu de la page
                                echo apply_filters('the_content', $page->post_content);
                            } else {
                                // Si la page n'existe pas
                                echo "Page introuvable.";
                            }
                        ?>
                        </div>
                        <div class="dropdown dropdown_questions" id="dropdown">
                            <a class="dropdown_item" href="#">Questionnaires</a>
                            <div class="dropdown_divider"></div>
                            <a class="dropdown_item" href="#">Résultats évaluations</a>
                        </div>
                    </li>
                    <li class="item_nav">
                        <?php
                            // Remplacez 123 par l'ID de la page que vous voulez afficher
                            $page_id = 146;

                            // Récupérer la page par son ID
                            $page = get_post($page_id);

                            // Vérifier si la page existe
                            if ($page) {
                                // Afficher le titre de la page
                                echo '<a href="#" class="nav_link">' . esc_html($page->post_title) . '</a>';

                                // Afficher le contenu de la page
                                echo apply_filters('the_content', $page->post_content);
                            } else {
                                // Si la page n'existe pas
                                echo "Page introuvable.";
                            }
                        ?>
                    </li>
                    <li class="item_nav">
                        <?php
                            // Remplacez 123 par l'ID de la page que vous voulez afficher
                            $page_id = 148;

                            // Récupérer la page par son ID
                            $page = get_post($page_id);

                            // Vérifier si la page existe
                            if ($page) {
                                // Afficher le titre de la page
                                echo '<a href="#" class="nav_link">' . esc_html($page->post_title) . '</a>';

                                // Afficher le contenu de la page
                                echo apply_filters('the_content', $page->post_content);
                            } else {
                                // Si la page n'existe pas
                                echo "Page introuvable.";
                            }
                        ?>
                    </li>
                    <li class="item_nav">
                        <div class="dropdown_nav_link">
                            <?php
                                // Remplacez 123 par l'ID de la page que vous voulez afficher
                                $page_id = 150;

                                // Récupérer la page par son ID
                                $page = get_post($page_id);

                                // Vérifier si la page existe
                                if ($page) {
                                    // Afficher le titre de la page
                                    echo '<a href="#" class="nav_link">' . esc_html($page->post_title) . '</a>';

                                    // Afficher le contenu de la page
                                    echo apply_filters('the_content', $page->post_content);
                                } else {
                                    // Si la page n'existe pas
                                    echo "Page introuvable.";
                                }
                            ?>
                        </div>
                        <div class="dropdown dropdown_outils" id="dropdown">
                            <a class="dropdown_item" href="#">Hachage bcrypt</a>
                            <div class="dropdown_divider"></div>
                            <a class="dropdown_item" href="#">Générateur aléatoire</a>
                            <div class="dropdown_divider"></div>
                            <a class="dropdown_item" href="#">Icônes Font Awesome</a>
                        </div>
                    </li>
                    <li class="item_nav">
                        <?php
                            // Remplacez 123 par l'ID de la page que vous voulez afficher
                            $page_id = 152;

                            // Récupérer la page par son ID
                            $page = get_post($page_id);

                            // Vérifier si la page existe
                            if ($page) {
                                // Afficher le titre de la page
                                echo '<a href="#" class="nav_link">' . esc_html($page->post_title) . '</a>';

                                // Afficher le contenu de la page
                                echo apply_filters('the_content', $page->post_content);
                            } else {
                                // Si la page n'existe pas
                                echo "Page introuvable.";
                            }
                        ?>
                    </li>
                    <li class="item_nav">
                        <div class="dropdown_nav_link">
                            <?php
                                // Remplacez 123 par l'ID de la page que vous voulez afficher
                                $page_id = 154;

                                // Récupérer la page par son ID
                                $page = get_post($page_id);

                                // Vérifier si la page existe
                                if ($page) {
                                    // Afficher le titre de la page
                                    echo '<a href="#" class="nav_link">' . esc_html($page->post_title) . '</a>';

                                    // Afficher le contenu de la page
                                    echo apply_filters('the_content', $page->post_content);
                                } else {
                                    // Si la page n'existe pas
                                    echo "Page introuvable.";
                                }
                            ?>
                        </div>
                        <div class="dropdown dropdown_help" id="dropdown">
                            <a class="dropdown_item" href="#">Contact</a>
                            <div class="dropdown_divider"></div>
                            <a class="dropdown_item" href="#">À propos</a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </header>