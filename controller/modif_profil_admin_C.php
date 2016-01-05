<?php
include('../model/modif_bdd.php');
include('../model/select_bdd.php');
$maxsize = 1048576;
$nom = '';
$i=$_POST['numero'];
if (isset($_POST['image_profil'])) {
    if ($_FILES['image']['error'] > 0) {
        $erreur = 0;
        header('Location: ../vue/profil_admin.php?nb='.$i.'&erreur='.$erreur);
    }
    if ($_FILES['image']['size'] > $maxsize) {
        $erreur = 1;
        header('Location: ../vue/profil_admin.php?nb='.$i.'&erreur='.$erreur);
    }
    $extensions_valides = array('jpg', 'jpeg', 'gif', 'png');
    //1. strrchr renvoie l'extension avec le point (« . »).
    //2. substr(chaine,1) ignore le premier caractère de chaine.
    //3. strtolower met l'extension en minuscules.
    $extension_upload = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
    if (!in_array($extension_upload, $extensions_valides)) {
        $erreur = 2;
        header('Location: ../vue/profil_admin.php?nb='.$i.'&erreur='.$erreur);
    } else {
        $nom = "../vue/image/profil/{$_SESSION['id'.$i]}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'], $nom);
        /* if ($resultat) {$erreur=3;} */
    }
    modif_utilisateur('photo', $nom, $_SESSION['id'.$i]);
    $_SESSION['photo'.$i] = $nom;
    header('Location: ../vue/profil_admin.php?nb='.$i);
}

    if (isset($_POST['modifier_pseudo'])) {
        modif_utilisateur('pseudo', $_POST['pseudo'], $_SESSION['id'.$i]);  
    }
    if (isset($_POST['modifier_mail'])) {
        modif_utilisateur('mail', $_POST['mail'], $_SESSION['id'.$i]);
    }
    if (isset($_POST['modifier_nom'])) {
        modif_utilisateur('nom', $_POST['pseudo'], $_SESSION['id'.$i]);  
    }
    if (isset($_POST['modifier_prenom'])) {
        modif_utilisateur('prenom', $_POST['prenom'], $_SESSION['id'.$i]);  
    }
    if (isset($_POST['modifier_adresse'])) {
        modif_utilisateur('adresse', $_POST['adresse'], $_SESSION['id'.$i]);
    }
    if (isset($_POST['modifier_date_n'])) {
        modif_utilisateur('date_n', $_POST['date'], $_SESSION['id'.$i]);
    }
        if (isset($_POST['modifier_code_postal'])) {
            modif_utilisateur('code_postal', $_POST['code_postal'], $_SESSION['id'.$i]); 
    }
        if (isset($_POST['modifier_ville'])) {
            modif_utilisateur('ville', $_POST['ville'], $_SESSION['id'.$i]);   
    }
        if (isset($_POST['modifier_pays'])) {   
    }

    $id=$_SESSION['id'.$i];
    $connect= select_utilisateur('ID_utilisateur',$id);
    $_SESSION['pseudo'.$i] = $connect['pseudo'];
    $_SESSION['nom'.$i] = $connect['nom'];
    $_SESSION['prenom'.$i] = $connect['prenom'];
    $_SESSION['mail'.$i] = $connect['mail'];
    $_SESSION['date_n'.$i] = $connect['date_n'];
    $_SESSION['adresse'.$i] = $connect['adresse'];
    $_SESSION['code_postal'.$i] = $connect['code_postal'];
    $_SESSION['ville'.$i] = $connect['ville'];
    $_SESSION['pays'.$i] = $connect['pays'];
    $_SESSION['photo'.$i] = $connect['photo'];
    header('Location: ../vue/profil_admin.php?nb='.$i);

