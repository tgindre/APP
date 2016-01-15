<?php 
include('../model/model.php');
include('../model/modif_bdd.php');
include('../model/select_bdd.php');
$maxsize = 4194304;
$nom = '';
if (isset($_POST['image_bandeau'])) {
    if ($_FILES['image']['error'] > 0) {
        $erreur = 0;
        header('Location: ../vue/admin_v.php?erreur=' . $erreur);
    } else {$erreur=42;}
    if ($_FILES['image']['size'] > $maxsize) {
        $erreur = 1;
        header('Location: ../vue/admin_v.php?erreur=' . $erreur);
    }
    $extensions_valides = array('jpg', 'jpeg', 'gif', 'png');
    //1. strrchr renvoie l'extension avec le point (« . »).
    //2. substr(chaine,1) ignore le premier caractère de chaine.
    //3. strtolower met l'extension en minuscules.
    $extension_upload = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
    if (!in_array($extension_upload, $extensions_valides)) {
        $erreur = 2;
        header('Location: ../vue/admin_v.php?erreur=' . $erreur);
    } else {
        $nom = "../vue/image/bandeau.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'], $nom);
        /* if ($resultat) {$erreur=3;} */
    }
    header('Location: ../vue/admin_v.php');
}
if (isset($_POST['image_accueil'])) {
    if ($_FILES['image']['error'] > 0) {
        $erreur = 0;
        header('Location: ../vue/admin_v.php?erreur=' . $erreur);
    } else {$erreur=42;}
    if ($_FILES['image']['size'] > $maxsize) {
        $erreur = 1;
        header('Location: ../vue/admin_v.php?erreur=' . $erreur);
    }
    $extensions_valides = array('jpg', 'jpeg', 'gif', 'png');
    //1. strrchr renvoie l'extension avec le point (« . »).
    //2. substr(chaine,1) ignore le premier caractère de chaine.
    //3. strtolower met l'extension en minuscules.
    $extension_upload = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
    if (!in_array($extension_upload, $extensions_valides)) {
        $erreur = 2;
        header('Location: ../vue/admin_v.php?erreur=' . $erreur);
    } else {
        $nom = "../vue/image/accueil.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'], $nom);
        /* if ($resultat) {$erreur=3;} */
    }
    header('Location: ../vue/admin_v.php');
}