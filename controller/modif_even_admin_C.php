<?php
include('../model/modif_bdd.php');
include('../model/select_bdd.php');
$maxsize = 4194304;
$nom = '';
$i=$_POST['numero'];
if (isset($_POST['image_even'])) {
    if ($_FILES['image']['error'] > 0) {
        $erreur = 0;
        header('Location: ../vue/even_admin.php?erreur=' . $erreur.'&nb='.$i);
    } else {$erreur=42;}
    if ($_FILES['image']['size'] > $maxsize) {
        $erreur = 1;
        header('Location: ../vue/even_admin.php?erreur=' . $erreur.'&nb='.$i);
    }
    $extensions_valides = array('jpg', 'jpeg', 'gif', 'png');
    //1. strrchr renvoie l'extension avec le point (« . »).
    //2. substr(chaine,1) ignore le premier caractère de chaine.
    //3. strtolower met l'extension en minuscules.
    $extension_upload = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
    if (!in_array($extension_upload, $extensions_valides)) {
        $erreur = 2;
        header('Location: ../vue/even_admin.php?erreur=' . $erreur.'&nb='.$i);
    } else {
        $nom = "../vue/image/even/{$_SESSION['id_even'.$i]}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'], $nom);
        /* if ($resultat) {$erreur=3;} */
    }
    modif_evenement('image', $nom, $_SESSION['id_even'.$i]);
    $_SESSION['photo_even'.$i] = $nom;
    header('Location: ../vue/even_admin.php?erreur=' . $erreur.'&nb='.$i);
}

    if (isset($_POST['modif_nom_even'])) {
        modif_evenement('nom_even', $_POST['nom_even'], $_SESSION['id_even'.$i]);  
    }
        if (isset($_POST['modif_type_even'])) {
        modif_evenement('type_even', $_POST['type_even'], $_SESSION['id_even'.$i]);  
    }
       if (isset($_POST['modif_adresse_even'])) {
        modif_evenement('adresse_even', $_POST['adresse_even'], $_SESSION['id_even'.$i]);  
    }
        if (isset($_POST['modif_ville_even'])) {
        modif_evenement('ville_even', $_POST['ville_even'], $_SESSION['id_even'.$i]);  
    }
        if (isset($_POST['modif_type_public'])) {
        modif_evenement('type_public', $_POST['type_public'], $_SESSION['id_even'.$i]);  
    }
        if (isset($_POST['modif_date_even'])) {
        modif_evenement('date_debut', $_POST['date_debut'], $_SESSION['id_even'.$i]);
        modif_evenement('mdate_fin', $_POST['date_fin'], $_SESSION['id_even'.$i]);
    }
        if (isset($_POST['modif_horaire'])) {
        modif_evenement('horaire', $_POST['horaire'], $_SESSION['id_even'.$i]);  
    }
        if (isset($_POST['modif_tarif'])) {
        modif_evenement('tarif_min', $_POST['tarif_min'], $_SESSION['id_even'.$i]);
        modif_evenement('tarif_max', $_POST['tarif_max'], $_SESSION['id_even'.$i]);
    }
        if (isset($_POST['modif_nb_place'])) {
        modif_evenement('nb_participants', $_POST['nb_place'], $_SESSION['id_even'.$i]);  
    }
    if (isset($_POST['supprimer'])) {
        supprime_even($_SESSION['id_even'.$i]);
        $suppr=42;
        header('Location: ../vue/even_admin.php?suppr='.$suppr);
        exit();
    }

    $id_even = $_SESSION['id_even'.$i];
    $donnees= select_evenement('ID_even',$id_even);
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
    header('Location: ../vue/even_admin.php?nb='.$i);
