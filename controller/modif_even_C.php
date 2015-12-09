<?php

include('../model/model.php');
$maxsize = 1048576;
$nom = '';
if (isset($_POST['image_profil'])) {
    if ($_FILES['image']['error'] > 0) {
        $erreur = 0;
        header('Location: ../vue/even_V.php?erreur=' . $erreur);
    }
    if ($_FILES['image']['size'] > $maxsize) {
        $erreur = 1;
        header('Location: ../vue/even_V.php?erreur=' . $erreur);
    }
    $extensions_valides = array('jpg', 'jpeg', 'gif', 'png');
    //1. strrchr renvoie l'extension avec le point (« . »).
    //2. substr(chaine,1) ignore le premier caractère de chaine.
    //3. strtolower met l'extension en minuscules.
    $extension_upload = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
    if (!in_array($extension_upload, $extensions_valides)) {
        $erreur = 2;
        header('Location: ../vue/even_V.php?erreur=' . $erreur);
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
    header('Location: ../vue/even_V.php?erreur=' . $erreur);
}

if (isset($_POST['modifier'])) {
    foreach ($_POST as $cle => $element) {
        if ($element = '') {
            $element = $_SESSION['$cle'];
        }
    }
    $req = $bdd->prepare('UPDATE utilisateur SET mail= :mail, nom= :nom, prenom= :prenom, pseudo= :pseudo,date_n= :date, adresse= :adresse, code_postal= :code_postal, ville= :ville, pays= :pays WHERE ID_utilisateur= :id');
    $req->execute(array(
        'mail' => $_POST['mail'],
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'pseudo' => $_POST['pseudo'],
        'date' => $_POST['date'],
        'adresse' => $_POST['adresse'],
        'code_postal' => $_POST['code_postal'],
        'ville' => $_POST['ville'],
        'pays' => $_POST['pays'],
        'id' => $_SESSION['id'])
    );
    $mail = $_POST['mail'];
    $connexion_req = 'SELECT * FROM utilisateur WHERE mail = "' . $mail . '"';
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
}

