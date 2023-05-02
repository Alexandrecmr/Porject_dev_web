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
        $count=0;
        $database = "omnes_sante";
        //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
        $db_handle = mysqli_connect('localhost', 'root', '');
        $db_found = mysqli_select_db($db_handle, $database);
        $hash = hash('sha256', $Mdp_U);
        if ($db_found) {
            //code MySQL. $sql est basé sur le choix de l’utilisateur
            $sql = "SELECT * FROM utilisateur WHERE Email_U=\"$Email_U\" AND Mdp_U=\"$hash\"";
        }
        $result = mysqli_query($db_handle, $sql);
        while ($data = mysqli_fetch_assoc($result))
        {
            $count++;
        }
        if($count==0) {
            return 1;
        } else {
            return 0;
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