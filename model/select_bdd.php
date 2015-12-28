<?php

include('../model/model.php');

function select_utilisateur($champ,$donnees){
    global $bdd;
    $select = $bdd->prepare('SELECT * FROM utilisateur WHERE '.$champ.' = :donnees');
    $select->execute(array(
       'donnees'=>$donnees));
    $rep=$select->fetch();
    return($rep);
}
function select_evenement($champ,$donnees){
    global $bdd;
    $select = $bdd->prepare('SELECT * FROM evenement WHERE '.$champ.' = :donnees');
    $select->execute(array(
       'donnees'=>$donnees));
    $rep=$select->fetch();
    return($rep);
}

function select_evenement_cree($champ,$donnees){
    global $bdd;
    $select = $bdd->prepare('SELECT * FROM evenement WHERE '.$champ.' = :donnees ORDER BY ID_even DESC LIMIT 0, 1');
    $select->execute(array(
       'donnees'=>$donnees));
    $rep=$select->fetch();
    return($rep);
}

function recherche($lieu,$date,$type_even){
        global $bdd;  
        $req = $bdd->prepare('SELECT *  FROM evenement WHERE (adresse_even LIKE :lieu OR ville_even LIKE :lieu) AND type_even LIKE :type_even AND (date_debut LIKE :date OR date_fin LIKE :date) ORDER BY ID_even DESC ');
        $req->execute(array(      
            'lieu' => $lieu,
            'date' => $date,
            'type_even' => $type_even)
                );
        return($req);
}

function recherche_avancee($nom, $lieu, $date, $type_even, $type_public){
        global $bdd;
        global $premierMessageAafficher;
        global $nombreParPage;
        $req = $bdd->prepare('SELECT *  FROM evenement WHERE nom_even LIKE :nom AND (adresse_even LIKE :lieu OR ville_even LIKE :lieu) AND type_even LIKE :type_even AND type_public LIKE :type_public AND (date_debut LIKE :date OR date_fin LIKE :date) ORDER BY ID_even DESC');
        $req->execute(array(
            'nom' => $nom,
            'lieu' => $lieu,
            'date' => $date,
            'type_even' => $type_even,
            'type_public' => $type_public)
                );
        return($req);
}

function select_evenement_def(){
    global $bdd;
    global $premierMessageAafficher;
    global $nombreParPage;
    $select = $bdd->query('SELECT *  FROM evenement ORDER BY ID_even DESC');
    return($select);
}



function select_nb_evenement_def(){
    global $bdd;
    $select = $bdd->query('SELECT COUNT(*) AS nb_messages  FROM evenement');
    $nb = $select->fetch();
    return($nb);
}

function nb_recherche_avancee($nom, $lieu, $date, $type_even, $type_public){
        global $bdd;  
        $req = $bdd->prepare('SELECT COUNT(*) AS nb_messages FROM evenement WHERE nom_even LIKE :nom AND (adresse_even LIKE :lieu OR ville_even LIKE :lieu) AND type_even LIKE :type_even AND type_public LIKE :type_public AND (date_debut LIKE :date OR date_fin LIKE :date)');
        $req->execute(array(
            'nom' => $nom,
            'lieu' => $lieu,
            'date' => $date,
            'type_even' => $type_even,
            'type_public' => $type_public)
                );
        $nb = $req->fetch();
        return($nb);
}
