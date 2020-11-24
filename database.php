<?php
// Initialisation de la base de donné
function bbd() {

    // gestion des erreurs
    try{
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO("mysql:host=localhost;dbname=starkdb","root","",$pdo_options);



    }catch (Exception $e ){
        die('Erreur :' .$e->getMessage());
    }
    return $bdd;
}



?>