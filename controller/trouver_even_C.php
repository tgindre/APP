<?php
include('../model/model.php');
include('../model/select_bdd.php');
$nombreParPage = 1;
$premierMessageAafficher = 0;
$i = 1;

if (isset($_POST['recherche_av'])) {
    $recherche =true;
    $recherche_av=true;
    
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
    $_SESSION['nom_even']=$_POST['nom_even'];
    $_SESSION['lieu']=$_POST['lieu'];
    $_SESSION['date_even']=$_POST['date_even'];
    $_SESSION['type_even']=$_POST['type_even'];
    $_SESSION['type_public']=$_POST['type_public'];
    
    $nb = nb_recherche_avancee($_POST['nom_even'], $_POST['lieu'], $_POST['date_even'], $_POST['type_even'], $_POST['type_public']);
    $totalDesMessages = $nb['nb_messages'];
    $nombreDePages = ceil($totalDesMessages / $nombreParPage); // ciel renvoie le nombre entier supérieur

    // On calcule le numéro du premier message qu'on prend pour le LIMIT de MySQL
    $premierMessageAafficher = ($page - 1) * $nombreParPage;
    
    $req = recherche_avancee($_POST['nom_even'], $_POST['lieu'], $_POST['date_even'], $_POST['type_even'], $_POST['type_public']);
    while ($donnees = $req->fetch()) {
        $_SESSION['id_createur' . $i] = $donnees['ID_createur'];
        $_SESSION['id_even' . $i] = $donnees['ID_even'];
        $_SESSION['nom_even' . $i] = $donnees['nom_even'];
        $_SESSION['description' . $i] = $donnees['description'];
        $_SESSION['type_public' . $i] = $donnees['type_even'];
        $_SESSION['adresse_even' . $i] = $donnees['adresse_even'];
        $_SESSION['ville_even' . $i] = $donnees['ville_even'];
        $_SESSION['type_public' . $i] = $donnees['type_public'];
        $_SESSION['date_debut' . $i] = $donnees['date_debut'];
        $_SESSION['date_fin' . $i] = $donnees['date_fin'];
        $_SESSION['horaire' . $i] = $donnees['horaire'];
        $_SESSION['tarif_min' . $i] = $donnees['tarif_min'];
        $_SESSION['tarif_max' . $i] = $donnees['tarif_max'];
        $_SESSION['nb_participants' . $i] = $donnees['nb_participants'];
        $_SESSION['photo_even' . $i] = $donnees['image'];
        $_SESSION['nb'] = $i;
        $i++;
    }

    header('Location: ../vue/trouver_even_V.php?nbp='.$nombreDePages.'&recherche='.$recherche.'&page='.$page.'&rech_av='.$recherche_av);
} elseif ((isset($_GET['recherche']) && $_GET['recherche'] && !isset($_POST['recherche_av']))){
        if (isset($_POST['page'])) {
        $page = $_POST['page'];
    } else if(isset($_GET['page'])){ 
        $page = $_GET['page'];
    } else{
        $page = 1; 
    }
    
    $nombreDePages = $_GET['nbp'];

    // On calcule le numéro du premier message qu'on prend pour le LIMIT de MySQL
    $premierMessageAafficher = ($page - 1) * $nombreParPage;
    
    $req = recherche_avancee($_SESSION['nom_even'], $_SESSION['lieu'], $_SESSION['date_even'], $_SESSION['type_even'], $_SESSION['type_public']);
    while ($donnees = $req->fetch()) {
        $_SESSION['id_createur' . $i] = $donnees['ID_createur'];
        $_SESSION['id_even' . $i] = $donnees['ID_even'];
        $_SESSION['nom_even' . $i] = $donnees['nom_even'];
        $_SESSION['description' . $i] = $donnees['description'];
        $_SESSION['type_public' . $i] = $donnees['type_even'];
        $_SESSION['adresse_even' . $i] = $donnees['adresse_even'];
        $_SESSION['ville_even' . $i] = $donnees['ville_even'];
        $_SESSION['type_public' . $i] = $donnees['type_public'];
        $_SESSION['date_debut' . $i] = $donnees['date_debut'];
        $_SESSION['date_fin' . $i] = $donnees['date_fin'];
        $_SESSION['horaire' . $i] = $donnees['horaire'];
        $_SESSION['tarif_min' . $i] = $donnees['tarif_min'];
        $_SESSION['tarif_max' . $i] = $donnees['tarif_max'];
        $_SESSION['nb_participants' . $i] = $donnees['nb_participants'];
        $_SESSION['photo_even' . $i] = $donnees['image'];
        $_SESSION['nb'] = $i;
        $i++;
    }
} else {
   $nb = select_nb_evenement_def();
    $totalDesMessages = $nb['nb_messages'];
    $nombreDePages = ceil($totalDesMessages / $nombreParPage); // ciel renvoie le nombre entier supérieur

    if (isset($_GET['page'])) {
        $page = $_GET['page']; 
    } else { 
        $page = 1; 
    }
    // On calcule le numéro du premier message qu'on prend pour le LIMIT de MySQL
    $premierMessageAafficher = ($page - 1) * $nombreParPage;
    
    $even = select_evenement_def();
    while ($donnees = $even->fetch()) {
        $_SESSION['id_createur' . $i] = $donnees['ID_createur'];
        $_SESSION['id_even' . $i] = $donnees['ID_even'];
        $_SESSION['nom_even' . $i] = $donnees['nom_even'];
        $_SESSION['description' . $i] = $donnees['description'];
        $_SESSION['type_even' . $i] = $donnees['type_even'];
        $_SESSION['adresse_even' . $i] = $donnees['adresse_even'];
        $_SESSION['ville_even' . $i] = $donnees['ville_even'];
        $_SESSION['type_public' . $i] = $donnees['type_public'];
        $_SESSION['date_debut' . $i] = $donnees['date_debut'];
        $_SESSION['date_fin' . $i] = $donnees['date_fin'];
        $_SESSION['horaire' . $i] = $donnees['horaire'];
        $_SESSION['tarif_min' . $i] = $donnees['tarif_min'];
        $_SESSION['tarif_max' . $i] = $donnees['tarif_max'];
        $_SESSION['nb_participants' . $i] = $donnees['nb_participants'];
        $_SESSION['photo_even' . $i] = $donnees['image'];
        $_SESSION['nb'] = $i;
        $i++;
    }
}


?>
