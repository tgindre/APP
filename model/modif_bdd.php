<?php

include('../model/model.php');

function modif_utilisateur($champ, $donnees, $id) {
    global $bdd;
    $req = $bdd->prepare('UPDATE utilisateur SET '.$champ.'= :'.$champ.' WHERE ID_utilisateur= :id');
    $req->execute(array(
        $champ => $donnees,
        'id' => $id)
    );
    $req->closeCursor();
}
function modif_evenement($champ, $donnees, $id) {
    global $bdd;
    $req = $bdd->prepare('UPDATE evenement SET '.$champ.'= :'.$champ.' WHERE ID_even= :id');
    $req->execute(array(
        $champ => $donnees,
        'id' => $id)
    );
    $req->closeCursor();
}
