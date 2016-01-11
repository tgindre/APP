<?php/*
$even_cree=$bdd->prepare('SELECT * FROM evenement WHERE ID_createur= :id ORDER BY ID_even DESC LIMIT 0, 3');
$even_cree->bindParam('id', $_SESSION['id'], PDO::PARAM_INT);
$even_cree->execute();
$i=1;
while ($donnees = $even_cree->fetch(PDO::FETCH_ASSOC)){
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
        $even=true;
}
$even_cree->closeCursor();*/

