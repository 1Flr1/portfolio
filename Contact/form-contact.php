<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 

require_once('db.php');
include('contact.php');


if(isset($_POST['submit'])){
    $to = "floriansejnera@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['nom'];

    $objet = $_POST['objet'];

    $message = $name .  " a écrit" . "\n\n" . $_POST['message'];
    echo "Mail envoyé, merci " . $first_name ;

    mail($to,$objet,$message);
    // sends a copy of the message to the sender
    echo "Mail envoyé, merci " . $first_name ;
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
    
?>
</body>
</html>


