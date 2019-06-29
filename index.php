<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>F-SEJNERA</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">


</head>
<body>
    <?php

        session_start();
        require_once('db.php');

        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', TRUE);

        
    ?>
<header name = "header">
            
            <p id="blaze">
                F-SEJNERA
            </p>    
                <div id="lien">
                    
                        <div class="menu-link" id="accueil"><a id="accueil-link" href="#">Accueil</a></div>
                    

                    
                        <div class="menu-link" id="Projets"><a id="projets-link" href="Projets/projets.php">
                            Projets</a>
                        </div>
                    
                        <div class="menu-link" id="competences"><a id="competences-link" href="Competences/competences.php">
                            Compétences</a>
                        </div>
                    
                        <div class="menu-link" id="contact"><a id="contact-link" href="Contact/contact.php">
                            Contact</a>
                        </div>
                    
                </div>
                <button class="fermer" id="header-button" type="button">Fermer <ion-icon name="close-circle-outline"></ion-icon></button>
        
    </header>

     <div id="div-menu-button">
         <div id="contour-button"></div><div id="contour-button2"></div><button id="menu-button" type="button">Menu</button>
    </div>

    <div id="nom">
        Florian Sejnera
        <p id="desc">Étudiant Informatique</p>
    </div>

    <button id="projets-button" type="button">Projets</button>

    <div id='apropos'>
        <p>
            A propos
        </p>
    </div>
    <footer>
        <button class="fermer" id="footer-button" type="button">Fermer <ion-icon name="close-circle-outline"></ion-icon></button>
        <p id="mentions">
            Mentions légales
        </p>
        <p id="copyright">
            ©Florian Sejnera - 2019
        </p>
        <p id="politique">
            Politique de confidentialité
        </p>
    </footer>
</body>

<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>
</html>