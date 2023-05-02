<?php
// Vérifie qu'il provient d'un formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $age = $_POST["age"];
    $numtel = $_POST["numtel"];
    $mail = $_POST["mail"];

    if(!isset($name)){
        die("S'il vous plait entrer votre nom");
    }

    if(!isset($prenom)){
        die("S'il vous plait entrer votre prenom");
    }
    
    if(!isset($age)){
        die("S'il vous plait entrer votre age");
    }

    if(!isset($numtel)){
        die("S'il vous plait entrer votre numero de telephone");
    }

    if(!isset($mail) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("S'il vous plait entrer votre mail");
    }

    print "Salut " . $prenom . $nom . "!, votre adresse mail est : " . $mail . "et votre numéro de téléphone est " . $numtel;
}
?>
