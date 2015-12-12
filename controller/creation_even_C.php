<?php
include('../model/model.php');
if (isset($_POST['creation_even'])) {
        $insert = $bdd->prepare("INSERT INTO evenement (ID_createur, nom_even, description, type_even, adresse_even, ville_even, type_public , date_debut, date_fin, horaire, tarif_min, tarif_max, nb_participants) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if ($insert->execute(array($_SESSION['id'] ,$_POST['nom_even'], $_POST['description'], $_POST['type_even'] , $_POST['adresse_even'], $_POST['ville_even'], $_POST['type_public'], $_POST['date_debut'], $_POST['date_fin'], $_POST['horaire'], $_POST['tarif_min'], $_POST['tarif_max'], $_POST['nb_place']))) { 
        $i=0;
        $_SESSION['nom_even'.$i] = $_POST['nom_even'];
        $_SESSION['description'.$i] = $_POST['description'];
        $_SESSION['type_even'.$i] = $_POST['type_even'];
        $_SESSION['adresse_even'.$i] = $_POST['adresse_even']; 
        $_SESSION['ville_even'.$i] = $_POST['ville_even'];
        $_SESSION['type_public'.$i] = $_POST['type_public'];
        $_SESSION['date_debut'.$i] = $_POST['date_debut'];
        $_SESSION['date_fin'.$i] = $_POST['date_fin'];
        $_SESSION['horaire'.$i] = $_POST['horaire'];
        $_SESSION['tarif_min'.$i] = $_POST['tarif_min'];
        $_SESSION['tarif_max'.$i] = $_POST['tarif_max'];
        $_SESSION['nb_participants'.$i] = $_POST['nb_participants'];
        $_SESSION['n_even']=$i;
        
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

