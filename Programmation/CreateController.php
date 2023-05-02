<?php
session_start();

require './model.php';

try {
    if(!isset($_POST['Nom_U'])) {
        throw new Exception("nom manquant!");
    }
    if(!isset($_POST['Prenom_U'])) {
        throw new Exception("prenom manquant!");
    }
     if(!isset($_POST['Email_U'])) {
        throw new Exception("email manquant!");
    }
    if(!isset($_POST['Mdp_U'])) {
        throw new Exception("mdp manquant!");
    }
    if(!isset($_POST['Ville_U'])) {
        throw new Exception("ville manquant!");
    }
    if(!isset($_POST['Code_Postal'])) {
        throw new Exception("cp manquant!");
    }
    if(!isset($_POST['Telephone_U'])) {
        throw new Exception("telephone manquant!");
    }
    $Nom_U = $_POST['Nom_U'];
    $Prenom_U = $_POST['Prenom_U'];
    $Email_U = $_POST['Email_U'];
    $Mdp_U = $_POST['Mdp_U'];
    $Ville_U = $_POST['Ville_U'];
    $Code_Postal = $_POST['Code_Postal'];
    $Pays = $_POST['Pays'];
    $Telephone_U = $_POST['Telephone_U'];

    create($Nom_U, $Prenom_U, $Email_U, $Mdp_U, $Ville_U, $Code_Postal, $Pays, $Telephone_U);
    
} catch(Exception $e) {
    echo $e -> getMessage();
    //require './errorView.php';
}
?>
