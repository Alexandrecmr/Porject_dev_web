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

function create($Type_Carte, $Num_Carte, $Nom_Carte, $Expiration, $Code){
    try {
        $conn = dbConnect();
        $hash = hash('sha256',$Code);
        
        $sql = "INSERT INTO paiement (Type_Carte, Num_Carte, Nom_Carte, Expiration, Code)
                VALUES ('$Type_Carte', '$Num_Carte', '$Nom_Carte', '$Expiration', '$Code')";
        $conn->exec($sql);
        //echo $sql;
    } catch (PDOException $pe) {
        throw new Exception($pe->getMessage());
    }
}
?>