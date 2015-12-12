<?php include('../model/model.php');
if(isset($_POST['recherche'])){
    $_SESSION['type']='recherche';
        $req = $bdd->prepare('SELECT *  FROM evenement WHERE (adresse_even= :lieu OR ville_even= :lieu OR type_even= :type_even OR (date_debut<= :date AND date_fin>= :date) ORDER BY ID_even DESC');
        $req->execute(array(      
            'lieu' => $_POST['lieu'],
            'date' => $_SESSION['date'],
            'type_even' => $_POST['type_even'])
        );
        while ($donnees = $req->fetch()){
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
        $_SESSION['photo'.$i] = $donnees['image'];
        $_SESSION['nb']=$i;
        $i++;
}
  $req->closeCursor();      
}
    header('Location: ../vue/trouver_even_V.php');

