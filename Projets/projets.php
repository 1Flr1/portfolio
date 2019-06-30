<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projets - F-SEJNERA</title>
    <link rel="stylesheet" type="text/css" href="style-projet.css">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

</head>
    <body>

        <?php

            session_start();

            $x=0;
            ini_set('error_reporting', E_ALL);
            ini_set('display_errors', TRUE);
            require_once('../db.php');
            $rqtNmbreProjets='SELECT count(id) FROM projets';
            $stmtNmbreProjets=$pdo->prepare($rqtNmbreProjets);
            $rqtProjets='SELECT logo FROM projets WHERE id=?';
            $stmtProjets=$pdo->prepare($rqtProjets);
            $rqtNom='SELECT nom FROM projets WHERE id=?';
            $stmtNom=$pdo->prepare($rqtNom);

            $stmtNmbreProjets->execute();
            $nmbreProjets=$stmtNmbreProjets->fetch();


            $nmbre=$nmbreProjets['count(id)'];


            while ($x<=$nmbre) 
                {
                    $stmtProjets->execute([$x]);
                    $result[$x]=$stmtProjets->fetch();
                    
                    $stmtNom->execute([$x]);
                    $nom[$x]=$stmtNom->fetch();
                    
                    $x=$x+1;
                    
                }




         ?>

        <header name = "header">
            
            <p id="blaze">
                F-SEJNERA
            </p>    
                <div id="lien">
                    
                        <div class="menu-link" id="accueil"><a id="accueil-link" href="../index.php">Accueil</a></div>
                    

                    
                        <div class="menu-link" id="Projets"><a id="projets-link" href="#">
                            Projets</a>
                        </div>
                    
                        <div class="menu-link" id="competences"><a id="competences-link" href="../Competences/competences.php">
                            Compétences</a>
                        </div>
                    
                        <div class="menu-link" id="contact"><a id="contact-link" href="../Contact/contact.php">
                            Contact</a>
                        </div>
                    
                </div>
                <button class="fermer" id="header-button" type="button">Fermer <ion-icon name="close-circle-outline"></ion-icon></button>
        
    </header>

        <div id="div-menu-button">
            <div id="contour-button"></div><div id="contour-button2"></div><button id="menu-button" type="button">Menu</button>
        </div>

        <div id="conteneur-projets">

            <div id="projet1">
                <img src="<?php echo $result[1]['logo'];?>" alt="Image de projet">
            </div>
            <div id="projet2">
                <img src="<?php echo $result[2]['logo'];?>" alt="Image de projet">
            </div>
            <div id="projet3">
                <img src="<?php echo $result[3]['logo'];?>" alt="Image de projet">
            </div>
            
        </div>
        <div id="buttons-contener">
            <button id="competences-button" type="button">Compétences</button>
            <button id="retour-button" type="button">Retour</button>
        </div>

        <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        <script type="text/javascript" src="projet.js"></script>
    </body>
</html>