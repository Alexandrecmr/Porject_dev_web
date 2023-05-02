<?php

function dbConnect()
{
    try {
        $conn = new PDO("mysql:host=localhost;dbname=omnes_sante", 'root', '');
        return $conn;
    } catch (PDOException $pe) {
        throw new Exception($pe->getMessage());
    }
}

function login($Email_U, $Mdp_U)
{
    $conn = dbConnect();
    $hash = hash('sha256', $Mdp_U);
    $res = $conn->query("SELECT * FROM utilisateur WHERE Email_U=\"$Email_U\" AND Mdp_U=\"$hash\"");
    if($res) {
        return true;
    } else {
        return false;
    }
}

function create($Nom_U, $Prenom_U, $Email_U, $Mdp_U, $Ville_U, $Code_Postal, $Pays, $Telephone_U){
    try {
        $conn = dbConnect();
        $hash = hash('sha256',$Mdp_U);
        
        $sql = "INSERT INTO utilisateur (Nom_U, Prenom_U, Email_U, Mdp_U, Ville_U, Code_Postal, Pays, Telephone_U)
                VALUES ('$Nom_U', '$Prenom_U', '$Email_U', '$hash', '$Ville_U', '$Code_Postal', '$Pays', '$Telephone_U')";
        $conn->exec($sql);
        //echo $sql;
    } catch (PDOException $pe) {
        throw new Exception($pe->getMessage());
    }
}
?>