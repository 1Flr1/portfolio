<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projets - F-SEJNERA</title>
    <link rel="stylesheet" type="text/css" href="projet2.css">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

</head>
    <body>


        <?php

            $x=0;
            ini_set('error_reporting', E_ALL);
            ini_set('display_errors', TRUE);
            require_once('../db.php');

            $rqtProjets='SELECT logo FROM projets WHERE id=2';
            $stmtProjets=$pdo->prepare($rqtProjets);
            $rqtNom='SELECT nom FROM projets WHERE id=2';
            $stmtNom=$pdo->prepare($rqtNom);
            $rqtDesc='SELECT description FROM projets WHERE id=2';
            $stmtDesc=$pdo->prepare($rqtDesc);







            $stmtProjets->execute();
            $result=$stmtProjets->fetch();

            $stmtNom->execute();
            $nom=$stmtNom->fetch();

                        
            $stmtDesc->execute();
            $desc=$stmtDesc->fetch();
                    
                




    ?>


        <header name = "header">
                
                <p id="blaze">
                    F-SEJNERA
                </p>    
                    <div id="lien">
                        
                            <div class="menu-link" id="accueil"><a id="accueil-link" href="../index.php">Accueil</a></div>
                        

                        
                            <div class="menu-link" id="Projets"><a id="projets-link" href="../Projets/projets.php">
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

        <div id="nom-projet">
        <?php echo $nom['nom'];?>
       </div>

       <p id="arrow"><i id="left"></i><i id="right"></i><p>
       

       <p id="desc-projet"><?php echo $desc['description'] ?></p>

        
        <div id="buttons-contener">
            <button id="competences-button" type="button">Compétences</button>
            <button id="retour-button" type="button">Retour</button>
        </div>

        <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        <script type="text/javascript" src="projet2.js"></script>
    </body>
</html>