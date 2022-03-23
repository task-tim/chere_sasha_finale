<?php
// Effectue la connexion à la BDD
// Crée et renvoie l'objet PDO associé
function getBdd()
{
    $bdd = new PDO('mysql:host=localhost;dbname=chere_sasha;charset=utf8', 'root', 'root', array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
    return $bdd;
}
?>