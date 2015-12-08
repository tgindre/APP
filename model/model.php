<?php session_start();

try{
    //connexion à la bdd
    $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    //Sinon on affiche l'erreur
    die('Erreur : ' . $e->getMessage());
    $erreur = 0;
}