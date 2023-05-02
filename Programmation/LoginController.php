<?php 
session_start();

require './model.php';

try {
    if(!isset($_POST['Email_U'])) {
        throw new Exception("email manquant!");
    }
    if(!isset($_POST['Mdp_U'])) {
        throw new Exception("mdp manquant!");
    }
    $Email_U = $_POST['Email_U'];
    $Mdp_U = $_POST['Mdp_U'];
    $INDICE=(login($Email_U, $Mdp_U));
    if($INDICE==0) {
        $_SESSION["Connect"]=true;
        $_SESSION["Email_U"]=$Email_U;
        //echo "connection ok";
        header('Location: ./mon_compte_in.php');
    } else {
        echo "connection pas ok";
    }
    
} catch(Exception $e) {
    echo $e -> getMessage();
    //require './errorView.php';
}


?>
