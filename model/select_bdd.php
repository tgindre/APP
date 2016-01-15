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

function select_evenement_cree($nom,$id){
    global $bdd;
    $select = $bdd->prepare('SELECT * FROM evenement WHERE nom_even= :nom AND ID_createur = :id  ORDER BY ID_even DESC LIMIT 0, 1');
    $select->execute(array(
       'nom'=>$nom,
        'id'=>$id));
    $rep=$select->fetch();
    return($rep);
}
/*function select_evenement_cree($champ,$id, $lieu, $date, $type_even, $type_public){
    global $bdd;
    $select = $bdd->prepare('SELECT * FROM evenement WHERE nom_even LIKE :nom AND (adresse_even LIKE :lieu OR ville_even LIKE :lieu) AND type_even LIKE :type_even AND type_public LIKE :type_public AND ID_createur = :id  ORDER BY ID_even DESC LIMIT 0, 1');
    $select->execute(array(
       'nom'=>$nom,
        'id'=>$id,
        'lieu' => $lieu,
        'type_even' => $type_even,
        'type_public' => $type_public)
            );
    $rep=$select->fetch();
    return($rep);
}*/

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
function nb_recherche($lieu, $date, $type_even){
        global $bdd;  
        $req = $bdd->prepare('SELECT COUNT(*) AS nb_messages FROM evenement WHERE (adresse_even LIKE :lieu OR ville_even LIKE :lieu) AND type_even LIKE :type_even AND (date_debut LIKE :date OR date_fin LIKE :date)');
        $req->execute(array(
            'lieu' => $lieu,
            'date' => $date,
            'type_even' => $type_even)
                );
        $nb = $req->fetch();
        return($nb);
}

function recherche_avancee($nom, $lieu, $date, $type_even, $type_public){
        global $bdd;

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


function select_evenement_def(){
    global $bdd;
    $select = $bdd->query('SELECT *  FROM evenement ORDER BY ID_even DESC');
    return($select);
}



function select_nb_evenement_def(){
    global $bdd;
    $select = $bdd->query('SELECT COUNT(*) AS nb_messages  FROM evenement');
    $nb = $select->fetch();
    return($nb);
}



function select_evenement_acc(){
    global $bdd;
    global $nb_even;
    $select = $bdd->query('SELECT *  FROM evenement ORDER BY ID_even DESC LIMIT 0,'.$nb_even);
    return($select);
}

/* select utilisateur */
function recherche_utilisateur($nom, $prenom, $pseudo, $mail, $lieu){
        global $bdd;

        $req = $bdd->prepare('SELECT *  FROM utilisateur WHERE nom LIKE :nom AND prenom LIKE :prenom AND pseudo LIKE :pseudo AND mail LIKE :mail AND (adresse LIKE :lieu OR ville LIKE :lieu) ORDER BY ID_utilisateur DESC');
        $req->execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'pseudo' => $pseudo,
            'mail' => $mail,
            'lieu' => $lieu)
                );
        return($req);
}
function nb_recherche_utilisateur($nom, $prenom, $pseudo, $mail, $lieu){
        global $bdd;

        $req = $bdd->prepare('SELECT COUNT(*) AS nb_messages FROM utilisateur WHERE nom LIKE :nom AND prenom LIKE :prenom AND pseudo LIKE :pseudo AND mail LIKE :mail AND (adresse LIKE :lieu OR ville LIKE :lieu)');
        $req->execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'pseudo' => $pseudo,
            'mail' => $mail,
            'lieu' => $lieu)
                );
        $nb = $req->fetch();
        return($nb);
}

function select_nb_utilisateur_def(){
    global $bdd;
    $select = $bdd->query('SELECT COUNT(*) AS nb_messages  FROM utilisateur');
    $nb = $select->fetch();
    return($nb);
}

function select_utilisateur_def(){
    global $bdd;
    $select = $bdd->query('SELECT *  FROM utilisateur ORDER BY ID_utilisateur DESC');
    return($select);
}

function select_even_utilisateur_($id){
    global $bdd;
    $even_cree=$bdd->prepare('SELECT * FROM evenement WHERE ID_createur= :id ORDER BY ID_even DESC');
    $even_cree->bindParam('id', $id, PDO::PARAM_INT);
    $even_cree->execute();
    return($even_cree);
}

/*Verif*/

function verif_select($champ, $donnees){
    global $bdd;
    $verification=$bdd->prepare('SELECT '.$champ.' FROM utilisateur WHERE '.$champ.' = :champ');
    $verification->execute(array(
            'champ' => $donnees)
            );
    $resultat = $verification->fetch();
    return($resultat);
}

/* Commentaire */
function moyenne_note ($id_even){
    global $bdd;
    $requete_moyenne = $bdd->prepare("SELECT AVG(list_note) AS moyenne FROM commentaire WHERE id_event= :id_even ");
    $requete_moyenne->execute(array(
            '$id_even' => $donnees)
            );
    $resultat = $requete_moyenne->fetch();
    return($resultat);
}
