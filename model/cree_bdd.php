<?php
include('../model/model.php');

function creation_even($id, $nom_even, $description, $type_even, $adresse_even, $ville_even, $type_public, $date_debut, $date_fin, $horaire, $tarif_min, $tarif_max,$nb_place){
    global $bdd;
    $insert = $bdd->prepare('INSERT INTO evenement (ID_createur, nom_even, description, type_even, adresse_even, ville_even, type_public , date_debut, date_fin, horaire, tarif_min, tarif_max, nb_participants) VALUES (:id_createur, :nom_even, :description , :type_even, :adresse_even, :ville_even, :type_public, :date_debut, :date_fin, :horaire, :tarif_min, :tarif_max, :nb_place)');
    $insert->execute(array(
        'id_createur'=>$id, 
        'nom_even'=>$nom_even, 
        'description'=>$description, 
        'type_even'=>$type_even, 
        'adresse_even'=>$adresse_even, 
        'ville_even'=>$ville_even, 
        'type_public'=>$type_public, 
        'date_debut'=>$date_debut,
        'date_fin'=>$date_fin,
        'horaire'=>$horaire, 
        'tarif_min'=>$tarif_min,
        'tarif_max'=>$tarif_max, 
        'nb_place'=>$nb_place));
   $rep=true;
    return($rep);
}

function creation_categorie($name){
    global $bdd;
    $insert = $bdd->prepare('INSERT INTO categories (name) VALUES (:name)');
    $insert->execute(array(
        'name'=>$name));
   $rep=true;
    return($rep);
}

function creation_sujet($name,$name_categorie){
    global $bdd;
    $insert = $bdd->prepare('INSERT INTO sujet (name, categorie) VALUES (:name, :categorie)');
    $insert->execute(array(
        'name'=>$name,
        'categorie'=>$name_categorie
        ));
   $rep=true;
    return($rep);
}

function creation_aide($question,$reponse){
    global $bdd;
    $insert = $bdd->prepare('INSERT INTO aide (question, reponse) VALUES (:question, :reponse)');
    $insert->execute(array(
        'question'=>$question,
        'reponse'=>$reponse
        ));
   $rep=true;
    return($rep);
}