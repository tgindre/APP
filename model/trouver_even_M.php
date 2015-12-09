<?php
$i=1;
$even = $bdd->query('SELECT *  FROM evenement ORDER BY ID_even DESC LIMIT 0, 4');
while ($donnees = $even->fetch()){
        $_SESSION['nom_even'.$i] = $donnees['nom_even'];
        $_SESSION['description'.$i] = $donnees['description']; 
        $_SESSION['adresse_even'.$i] = $donnees['adresse_even']; 
        $_SESSION['ville_even'.$i] = $donnees['ville_even'];
        $_SESSION['nb']=$i;
        $i++;
}
$even->closeCursor();
?>
