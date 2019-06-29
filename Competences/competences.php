<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compétences - F-SEJNERA</title>
    <link rel="stylesheet" type="text/css" href="style-competences.css">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

</head>

    <body>
    
    <?php

        $x=0;
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', TRUE);
        require_once('../db.php');
        $rqtNmbreCompetences='SELECT count(id) FROM competences';
        $stmtNmbreCompetences=$pdo->prepare($rqtNmbreCompetences);
        $rqtCompetences='SELECT niveau FROM competences WHERE id=?';
        $stmtCompetences=$pdo->prepare($rqtCompetences);
        $rqtNom='SELECT nom FROM competences WHERE id=?';
        $stmtNom=$pdo->prepare($rqtNom);

        $stmtNmbreCompetences->execute();
        $nmbreCompetences=$stmtNmbreCompetences->fetch();


        $nmbre=$nmbreCompetences['count(id)'];


        while ($x<=$nmbre) 
            {
                $stmtCompetences->execute([$x]);
                $result[$x]=$stmtCompetences->fetch();
                
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
                

                
                    <div class="menu-link" id="Projets"><a id="projets-link" href="../Projets/projets.php">
                        Projets</a>
                    </div>
                
                    <div class="menu-link" id="competences"><a id="competences-link" href="#">
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

        <div id="conteneur-competences">

            <div id="competence1">
                  <div class ="progress" id="progress1"> <div class="inner">
                  <span class="niveau" id="niveau_1"><?php echo $result[1]['niveau'];?></span> 
                  <?php echo $nom[1]['nom']; ?>
                  </div></div>
                
            </div>
            <div id="competence2">
            <div class ="progress" id="progress2"> <div class="inner">
            <span class="niveau" id="niveau_2"><?php echo $result[2]['niveau'];?></span>
            <?php echo $nom[2]['nom']; ?>
                  </div></div>
            </div>
            <div id="competence3">
            <div class ="progress" id="progress3"> <div class="inner">
            <span class="niveau" id="niveau_3"><?php echo $result[3]['niveau'];?></span>
            <?php echo $nom[3]['nom']; ?>
                  </div></div>
            </div>
            <div id="competence4">
            <div class ="progress" id="progress4"> <div class="inner">
            <span class="niveau" id="niveau_4"><?php echo $result[4]['niveau'];?></span>
            <?php echo $nom[4]['nom']; ?>
                  </div></div>
            </div>
            
        </div>

        <div id="conteneur-cv">
        <a href="CV.pdf" target="_blank"><button id="cv-button" type="button">Mon C.V</button></a>
        </div>
        <div id="buttons-contener">
            <button id="contact-button" type="button">Contact</button>
            <button id="retour-button" type="button">Retour</button>
        </div>

        
        <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
        <script src="https://cdn.rawgit.com/kimmobrunfeldt/progressbar.js/0.5.6/dist/progressbar.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="competences.js"></script>



    </body>
</html>