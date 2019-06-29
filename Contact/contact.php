<?php 

require_once('../db.php');



if(isset($_POST['submit'])){
    $to = "floriansejnera@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['nom'];

    $objet = $_POST['objet'];

    $message = $name . " avec l'email " . $from . " a écrit" . "\n\n" . $_POST['message'];
    

    mail($to,$objet,$message);
    // sends a copy of the message to the sender
    echo "Mail envoyé, merci " . $first_name ;
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>F-SEJNERA</title>
    <link rel="stylesheet" type="text/css" href="style-contact.css">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">


</head>

<body>


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
                    
                        <div class="menu-link" id="contact"><a id="contact-link" href="#">
                            Contact</a>
                        </div>
                    
                </div>
                <button class="fermer" id="header-button" type="button">Fermer <ion-icon name="close-circle-outline"></ion-icon></button>
        
     </header>

     <div id="div-menu-button">
         <div id="contour-button"></div><div id="contour-button2"></div><button id="menu-button" type="button">Menu</button>
    </div>

    <div id="nom">
        Contact
        <p id="mail">@mail : floriansejnera@gmail.com</p>
        
    </div>
    
    <button id="accueil-button" type="button">Accueil</button>

    <form id="form" action='' method="post">
        Nom:<br>
        <input type="text" name="nom" value="" placeholder="Nom"><br>
        Mail:<br>
        <input type="text" name="email" value="" placeholder="Mail"><br>
        Objet: <br>
        <input type="text" name="objet" value="" placeholder="Objet"><br><br>
        Votre Message:
        <br>
        <textarea type="text" name="message" id="message" value="" placeholder="Votre message"></textarea><br><br>
        <input type="submit" id ="submit" name="submit" value="Submit">
    </form>

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
        
        <p id="politique">
            Politique de confidentialité
        </p>

        <p id="copyright">
            ©Florian Sejnera - 2019
        </p>
    </footer>



</body>



<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="contact.js"></script>
</html>