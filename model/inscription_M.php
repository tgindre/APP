﻿<?php

include("model.php");

//Vérification de l'unicité du mail
$req = $bdd->prepare('SELECT mail FROM membres WHERE mail = :mail');		
$req->execute(array(
	'mail' => $_POST['mail']));

$resultat = $req->fetch();