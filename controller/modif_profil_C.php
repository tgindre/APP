<?php
include('../model/modif_bdd.php');
include('../model/select_bdd.php');
$maxsize = 1048576;
$nom = '';
if (isset($_POST['image_profil'])) {
    if ($_FILES['image']['error'] > 0) {
        $erreur = 0;
        header('Location: ../vue/profil_V.php?erreur=' . $erreur);
    }
    if ($_FILES['image']['size'] > $maxsize) {
        $erreur = 1;
        header('Location: ../vue/profil_V.php?erreur=' . $erreur);
    }
    $extensions_valides = array('jpg', 'jpeg', 'gif', 'png');
    //1. strrchr renvoie l'extension avec le point (« . »).
    //2. substr(chaine,1) ignore le premier caractère de chaine.
    //3. strtolower met l'extension en minuscules.
    $extension_upload = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
    if (!in_array($extension_upload, $extensions_valides)) {
        $erreur = 2;
        header('Location: ../vue/profil_V.php?erreur=' . $erreur);
    } else {
        $nom = "../vue/image/profil/{$_SESSION['id']}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'], $nom);
        /* if ($resultat) {$erreur=3;} */
    }
    modif_utilisateur('photo', $nom, $_SESSION['id']);
    $_SESSION['photo'] = $nom;
    header('Location: ../vue/profil_V.php');
}

    if (isset($_POST['modifier_pseudo'])) {
        modif_utilisateur('pseudo', $_POST['pseudo'], $_SESSION['id']);  
    }
    if (isset($_POST['modifier_mail'])) {
        modif_utilisateur('mail', $_POST['mail'], $_SESSION['id']);
    }
    if (isset($_POST['modifier_nom'])) {
        modif_utilisateur('nom', $_POST['pseudo'], $_SESSION['id']);  
    }
    if (isset($_POST['modifier_prenom'])) {
        modif_utilisateur('prenom', $_POST['prenom'], $_SESSION['id']);  
    }
    if (isset($_POST['modifier_adresse'])) {
        modif_utilisateur('adresse', $_POST['adresse'], $_SESSION['id']);
    }
    if (isset($_POST['modifier_date_n'])) {
        modif_utilisateur('date_n', $_POST['date'], $_SESSION['id']);
    }
        if (isset($_POST['modifier_code_postal'])) {
            modif_utilisateur('code_postal', $_POST['code_postal'], $_SESSION['id']); 
    }
        if (isset($_POST['modifier_ville'])) {
            modif_utilisateur('ville', $_POST['ville'], $_SESSION['id']);   
    }
        if (isset($_POST['modifier_pays'])) {   
    }

    $id=$_SESSION['id'];
    $connect= select_utilisateur('ID_utilisateur',$id);
    $_SESSION['pseudo'] = $connect['pseudo'];
    $_SESSION['nom'] = $connect['nom'];
    $_SESSION['prenom'] = $connect['prenom'];
    $_SESSION['mail'] = $connect['mail'];
    $_SESSION['date_n'] = $connect['date_n'];
    $_SESSION['adresse'] = $connect['adresse'];
    $_SESSION['code_postal'] = $connect['code_postal'];
    $_SESSION['ville'] = $connect['ville'];
    $_SESSION['pays'] = $connect['pays'];
    $_SESSION['photo'] = $connect['photo'];
    header('Location: ../vue/profil_V.php');
