<?php
include('../model/model.php');
if (isset($_POST['creation_even'])) {
        $insert = $bdd->prepare("INSERT INTO evenement (ID_createur, nom_even, description, adresse_even, ville_even, type_public , date_debut, date_fin, horaire, tarif_min, tarif_max, nb_participants) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if ($insert->execute(array($_SESSION['id'] ,$_POST['nom_even'], $_POST['description'], $_POST['adresse_even'], $_POST['ville_even'], $_POST['type_public'], $_POST['date_debut'], $_POST['date_fin'], $_POST['horaire'], $_POST['tarif_min'], $_POST['tarif_max'], $_POST['nb_place']))) { 
        $_SESSION['nom_even'] = $_POST['nom_even'];
        $_SESSION['description'] = $_POST['description']; 
        $_SESSION['adresse_even'] = $_POST['adresse_even']; 
        $_SESSION['ville_even'] = $_POST['ville_even'];
        $_SESSION['type_public'] = $_POST['type_public'];
        $_SESSION['date_debut'] = $_POST['date_debut'];
        $_SESSION['date_fin'] = $_POST['date_fin'];
        $_SESSION['horaire'] = $_POST['horaire'];
        $_SESSION['tarif_min'] = $_POST['tarif_min'];
        $_SESSION['tarif_max'] = $_POST['tarif_max'];
        $_SESSION['nb_participants'] = $_POST['nb_participants'];
        
            header('Location: ../vue/even_V.php');
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

