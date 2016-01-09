<?php
include('../model/model.php');
include('../model/modif_bdd.php');
include('../model/select_bdd.php');
$even_cree=select_even_utilisateur_($_SESSION['id']);
$k=1;
while ($donnees = $even_cree->fetch(PDO::FETCH_ASSOC)){
        $_SESSION['id_createur'.$k] = $donnees['ID_createur'];
        $_SESSION['id_even'.$k] = $donnees['ID_even'];
        $_SESSION['nom_even'.$k] = $donnees['nom_even'];
        $_SESSION['description'.$k] = $donnees['description']; 
        $_SESSION['type_even'.$k] = $donnees['type_even'];
        $_SESSION['adresse_even'.$k] = $donnees['adresse_even']; 
        $_SESSION['ville_even'.$k] = $donnees['ville_even'];
        $_SESSION['type_public'.$k] = $donnees['type_public'];
        $_SESSION['date_debut'.$k] = $donnees['date_debut'];
        $_SESSION['date_fin'.$k] = $donnees['date_fin'];
        $_SESSION['horaire'.$k] = $donnees['horaire'];
        $_SESSION['tarif_min'.$k] = $donnees['tarif_min'];
        $_SESSION['tarif_max'.$k] = $donnees['tarif_max'];
        $_SESSION['nb_participants'.$k] = $donnees['nb_participants'];
        $_SESSION['photo_even'.$k] = $donnees['image'];
        $_SESSION['nb']=$k;
        $k++;
        $even=true;
}
$even_cree->closeCursor();
