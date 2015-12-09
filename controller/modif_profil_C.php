<?php

include('../model/model.php');
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
    $req = $bdd->prepare('UPDATE utilisateur SET photo= :photo WHERE ID_utilisateur= :id');
    $req->execute(array(
        'photo' => $nom,
        'id' => $_SESSION['id']
    ));
    $_SESSION['photo'] = $nom;
    header('Location: ../vue/profil_V.php?erreur=' . $erreur);
}

    if (isset($_POST['modifier_pseudo'])) {
        $req = $bdd->prepare('UPDATE utilisateur SET pseudo= :pseudo WHERE ID_utilisateur= :id');
        $req->execute(array(      
            'pseudo' => $_POST['pseudo'],
            'id' => $_SESSION['id'])
        );
     $req->closeCursor();   
    }
    if (isset($_POST['modifier_mail'])) {
        $req = $bdd->prepare('UPDATE utilisateur SET mail= :mail WHERE ID_utilisateur= :id');
        $req->execute(array(      
            'mail' => $_POST['mail'],
            'id' => $_SESSION['id'])
        );
        $req->closeCursor();   
    }
    if (isset($_POST['modifier_nom'])) {
        $req = $bdd->prepare('UPDATE utilisateur SET nom= :nom WHERE ID_utilisateur= :id');
        $req->execute(array(      
            'nom' => $_POST['nom'],
            'id' => $_SESSION['id'])
        );
        $req->closeCursor();   
    }
    if (isset($_POST['modifier_prenom'])) {
        $req = $bdd->prepare('UPDATE utilisateur SET prenom= :prenom WHERE ID_utilisateur= :id');
        $req->execute(array(      
           'prenom' => $_POST['prenom'],
           'id' => $_SESSION['id'])
        );
        $req->closeCursor();   
    }
    if (isset($_POST['modifier_adresse'])) {
        $req = $bdd->prepare('UPDATE utilisateur SET adresse= :adresse WHERE ID_utilisateur= :id');
        $req->execute(array(      
            'adresse' => $_POST['adresse'],
            'id' => $_SESSION['id'])
        );
        $req->closeCursor();   
    }
    if (isset($_POST['modifier_date_n'])) {
     $req = $bdd->prepare('UPDATE utilisateur SET date-n= :date WHERE ID_utilisateur= :id');
     $req->execute(array(      
         'date' => $_POST['date'],
         'id' => $_SESSION['id'])
      );
      $req->closeCursor();   
    }
        if (isset($_POST['modifier_code_postal'])) {
     $req = $bdd->prepare('UPDATE utilisateur SET code_postal= :code_postal WHERE ID_utilisateur= :id');
     $req->execute(array(      
         'code_postal' => $_POST['code_postal'],
         'id' => $_SESSION['id'])
      );
      $req->closeCursor();   
    }
        if (isset($_POST['modifier_ville'])) {
     $req = $bdd->prepare('UPDATE utilisateur SET ville= :ville WHERE ID_utilisateur= :id');
     $req->execute(array(      
         'ville' => $_POST['ville'],
         'id' => $_SESSION['id'])
      );
      $req->closeCursor();   
    }
        if (isset($_POST['modifier_pays'])) {
     $req = $bdd->prepare('UPDATE utilisateur SET pays= :pays WHERE ID_utilisateur= :id');
     $req->execute(array(      
         'pays' => $_POST['pays'],
         'id' => $_SESSION['id'])
      );
      $req->closeCursor();   
    }

    $id=$_SESSION['id'];
    $connexion_req = 'SELECT * FROM utilisateur WHERE ID_utilisateur = "' . $id . '"';
    $connexion = $bdd->query($connexion_req);
    $connect = $connexion->fetch();
    $_SESSION['pseudo'] = $connect['pseudo'];
    $_SESSION['nom'] = $connect['nom'];
    $_SESSION['prenom'] = $connect['prenom'];
    $_SESSION['mail'] = $connect['mail'];
    $_SESSION['date_n'] = $connect['date_n'];
    $_SESSION['adresse'] = $connect['adresse'];
    $_SESSION['code_postal'] = $connect['code_postal'];
    $_SESSION['ville'] = $connect['ville'];
    $_SESSION['pays'] = $connect['pays'];
    $connexion->closeCursor();

    header('Location: ../vue/profil_V.php');
