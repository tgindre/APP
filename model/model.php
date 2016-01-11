<?php
if(!isset($start) || !$start){
    session_start();
    $start=true;
}

if (!isset($bdd)){
function bdd(){
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
	return $bdd;
}
$bdd = bdd();
}