<?php
$i=1;
$even = $bdd->query('SELECT *  FROM evenement ORDER BY ID_even DESC LIMIT 0, 4');
while ($donnees = $even->fetch()){
        $_SESSION['nom_even'.$i] = $donnees['nom_even'];
        $_SESSION['description'.$i] = $donnees['description']; 
        $_SESSION['adresse_even'.$i] = $donnees['adresse_even']; 
        $_SESSION['ville_even'.$i] = $donnees['ville_even'];
        $_SESSION['type_public'.$i] = $donnees['type_public'];
        $_SESSION['date_debut'.$i] = $donnees['date_debut'];
        $_SESSION['date_fin'.$i] = $donnees['date_fin'];
        $_SESSION['horaire'.$i] = $donnees['horaire'];
        $_SESSION['tarif_min'.$i] = $donnees['tarif_min'];
        $_SESSION['tarif_max'.$i] = $donnees['tarif_max'];
        $_SESSION['nb_participants'.$i] = $donnees['nb_participants'];
        /*$_SESSION['photo'.$i] = $donnees['photo'];*/
        $_SESSION['nb']=$i;
        $i++;
}
$even->closeCursor();
?>
