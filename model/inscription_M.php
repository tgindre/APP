<?php

include("model.php");

//Vérification de l'unicité du mail
$req = $bdd->prepare('SELECT mail FROM utilisateur WHERE mail = :mail');		
$req->execute(array(
	'mail' => $_POST['mail']));

$resultat = $req->fetch();

function insertion_utilisateur($mail, $pass, $nom, $prenom, $pseudo, $date_n, $adresse, $code_postal, $ville, $pays, $sexe, $admin){
    global $bdd;
    $insert = $bdd->prepare('INSERT INTO utilisateur (mail, pass, nom, prenom, pseudo, date_n, adresse, code_postal, ville, pays, sexe, administrateur) VALUES (:mail, :pass, :nom , :prenom, :pseudo, :date_n, :adresse, :code_postal, :ville, :pays, :sexe, :admin)');
    $insert->execute(array(
        'mail'=>$mail, 
        'pass'=>$pass, 
        'nom'=>$nom, 
        'prenom'=>$prenom, 
        'pseudo'=>$pseudo, 
        'date_n'=>$date_n, 
        'adresse'=>$adresse, 
        'code_postal'=>$code_postal,
        'ville'=>$ville, 
        'pays'=>$pays, 
        'sexe'=>$sexe, 
        'admin'=>$admin));
    $rep=true;
    return($rep);
}

function donnees_utilisateur($mail){
    global $bdd;
    $inscription_req = $bdd->prepare('SELECT * FROM utilisateur WHERE mail = :mail');
    $inscription_req->execute(array(
       'mail'=>$mail));
    $inscript=$inscription_req->fetch();
    return($inscript);
}