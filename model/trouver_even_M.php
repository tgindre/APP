<?php
$i=1;
if(isset($_POST['recherche_av'])){
    $_SESSION['type']='recherche';
        foreach($_POST as $cle => $element){
            $_POST[$cle]='%'.$element.'%';
        }
        $req = $bdd->prepare('SELECT *  FROM evenement WHERE nom_even LIKE :nom AND (adresse_even LIKE :lieu OR ville_even LIKE :lieu) AND type_even LIKE :type_even AND type_public LIKE :type_public AND (date_debut LIKE :date OR date_fin LIKE :date) ORDER BY ID_even DESC');
        $req->execute(array(
            'nom' => $_POST['nom_even'],
            'lieu' => $_POST['lieu'],
            'date' => $_POST['date_even'],
            'type_public' => $_POST['type_public'],
            'type_even' => $_POST['type_even'])
                );
        while ($donnees = $req->fetch()){
        $_SESSION['id_createur'.$i] = $donnees['ID_createur'];
        $_SESSION['id_even'.$i] = $donnees['ID_even'];
        $_SESSION['nom_even'.$i] = $donnees['nom_even'];
        $_SESSION['description'.$i] = $donnees['description'];
        $_SESSION['type_public'.$i] = $donnees['type_even'];
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
        $_SESSION['nb']=$i;
        $i++;
}
  $req->closeCursor();
  header('Location: ../vue/trouver_even_V.php');

} else{
/*echo 'pas de post du formulaire recherche av';*/
$even = $bdd->query('SELECT *  FROM evenement ORDER BY ID_even DESC LIMIT 0,'.$nb_even);
while ($donnees = $even->fetch()){
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
        $_SESSION['nb']=$i;
        $i++;
}
$even->closeCursor();
}
?>
