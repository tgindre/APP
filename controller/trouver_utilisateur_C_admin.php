<?php
include('../model/model.php');
include('../model/select_bdd.php');
$nombreParPage = 20;
$i = 1;

if (isset($_POST['utilisateur']) || (isset($_GET['recherche']) && $_GET['recherche'])) {
    $recherche =true;
    
    if (isset($_POST['page'])) {
        $page = $_POST['page'];
    } else if(isset($_GET['page'])){ 
        $page = $_GET['page'];
    } else{
        $page = 1; 
    }
    
    foreach ($_POST as $cle => $element) {
        $_POST[$cle] = '%' . $element . '%';
    }
    $nb = nb_recherche_utilisateur($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_POST['lieu']);
    $totalDesMessages = $nb['nb_messages'];
    $nombreDePages = ceil($totalDesMessages / $nombreParPage); // ciel renvoie le nombre entier supérieur

    $req = recherche_utilisateur($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['mail'], $_POST['lieu']);
    while ($donnees = $req->fetch()) {
            $_SESSION['pseudo'.$i] = $donnees['pseudo'];
            $_SESSION['id'.$i]=$donnees['ID_utilisateur'];
            $_SESSION['nom'.$i]=$donnees['nom'];
            $_SESSION['prenom'.$i]=$donnees['prenom'];
            $_SESSION['mail'.$i]=$donnees['mail'];
            $_SESSION['date_n'.$i]=$donnees['date_n'];
            $_SESSION['adresse'.$i]=$donnees['adresse'];
            $_SESSION['code_postal'.$i]=$donnees['code_postal'];
            $_SESSION['ville'.$i]=$donnees['ville'];
            $_SESSION['pays'.$i]=$donnees['pays'];
            $_SESSION['photo'.$i]=$donnees['photo'];
            $_SESSION['admin'.$i] = $donnees['administrateur'];
        $_SESSION['nb'] = $i;
        $i++;
    }

    header('Location: ../vue/gerer_utilisateur.php?nbp='.$nombreDePages.'&recherche='.$recherche.'&page='.$page);
}  else {
   $nb = select_nb_utilisateur_def();
    $totalDesMessages = $nb['nb_messages'];
    $nombreDePages = ceil($totalDesMessages / $nombreParPage); // ciel renvoie le nombre entier supérieur


    // On calcule le numéro du premier message qu'on prend pour le LIMIT de MySQL
    
    $even = select_utilisateur_def();
    while ($donnees = $even->fetch()) {
            $_SESSION['pseudo'.$i] = $donnees['pseudo'];
            $_SESSION['id'.$i]=$donnees['ID_utilisateur'];
            $_SESSION['nom'.$i]=$donnees['nom'];
            $_SESSION['prenom'.$i]=$donnees['prenom'];
            $_SESSION['mail'.$i]=$donnees['mail'];
            $_SESSION['date_n'.$i]=$donnees['date_n'];
            $_SESSION['adresse'.$i]=$donnees['adresse'];
            $_SESSION['code_postal'.$i]=$donnees['code_postal'];
            $_SESSION['ville'.$i]=$donnees['ville'];
            $_SESSION['pays'.$i]=$donnees['pays'];
            $_SESSION['photo'.$i]=$donnees['photo'];
            $_SESSION['admin'.$i] = $donnees['administrateur'];
        $_SESSION['nb'] = $i;
        $i++;
    }
}


?>

