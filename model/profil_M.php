<?php
$even_cree=$bdd->prepare('SELECT * FROM evenement WHERE ID_createur= :id ORDER BY ID_even DESC LIMIT 0, 3');
$even_cree->bindParam('id', $_SESSION['id'], PDO::PARAM_INT);
$even_cree->execute();
$i=1;
while ($donnees = $even_cree->fetch(PDO::FETCH_ASSOC)){
        $_SESSION['nom_even'.$i] = $donnees['nom_even'];
        $_SESSION['description'.$i] = $donnees['description']; 
        $_SESSION['adresse_even'.$i] = $donnees['adresse_even']; 
        $_SESSION['ville_even'.$i] = $donnees['ville_even'];
        $_SESSION['nb']=$i;
        $i++;
}
$even_cree->closeCursor();

