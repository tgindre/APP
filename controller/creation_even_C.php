<?php
include('../model/modif_bdd.php');
include('../model/select_bdd.php');
include('../model/cree_bdd.php');

if (isset($_POST['creation_even'])) {
        $rep=creation_even($_SESSION['id'] ,$_POST['nom_even'], $_POST['description'], $_POST['type_even'] , $_POST['adresse_even'], $_POST['ville_even'], $_POST['type_public'], $_POST['date_debut'], $_POST['date_fin'], $_POST['horaire'], $_POST['tarif_min'], $_POST['tarif_max'], $_POST['nb_place']); 
        if(rep){
        $i=0;
        $nom_even=$_POST['nom_even'];
        $donnees= select_evenement_cree('nom_even',$nom_even);
        $_SESSION['id_createur'.$i] = $donnees['ID_createur'];
        $_SESSION['id_even'.$i] = $donnees['ID_even'];
        $_SESSION['nom_even'.$i] = $donnees['nom_even'];
        $_SESSION['description'.$i] = $donnees['description']; 
        $_SESSION['type_even'.$i] = $donnees['type_even'];
        $_SESSION['adresse_even'.$i] = $donnees['adresse_even']; 
        $_SESSION['ville_even'.$i] = $donnees['ville_even'];
        $_SESSION['type_public'.$i] = $donnees['type_public'];
        $_SESSION['date_debut'.$i] = $donnees['date_debut'];
        $_SESSION['date_fin'.$i] = $donnees['date_fin'];
        $_SESSION['horaire'.$i] = $donnees['horaire'];
        $_SESSION['tarif_min'.$i] = $donnees['tarif_min'];
        $_SESSION['tarif_max'.$i] = $donnees['tarif_max'];
        $_SESSION['nb_participants'.$i] = $donnees['nb_participants'];
        $_SESSION['photo_even'.$i] = $donnees['image'];
        
        header('Location: ../vue/even_V.php?nb='.$i);
        } else {
            print_r($bdd->errorInfo());
            $error = 2;
            header('Location: ../vue/creation_even_V.php?erreur=' . $error);
        }
        $insert->closeCursor();
    } else {
        $error = 1;
        header('Location: ../vue/inscription_V.php?erreur='. $error);
    }

