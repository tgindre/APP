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

function supprime_even($id) {
    global $bdd;
    $req = $bdd->prepare('DELETE FROM evenement WHERE ID_even= :id');
    $req->execute(array(
        'id' => $id)
    );
    $req->closeCursor();
}

function supprime_utilisateur($id) {
    global $bdd;
    $req = $bdd->prepare('DELETE FROM utilisateur WHERE ID_utilisateur= :id');
    $req->execute(array(
        'id' => $id)
    );
    $req->closeCursor();
}

function modif_categorie($id,$name) {
    global $bdd;
    $req = $bdd->prepare('UPDATE categories SET name= :name WHERE id= :id');
    $req->execute(array(
        'id' => $id,
        'name' => $name)
    );
    $req->closeCursor();
}

function supprime_categorie($id){
    global $bdd;
    $req = $bdd->prepare('DELETE FROM categories WHERE id= :id');
    $req->execute(array(
        'id' => $id)
    );
    $req->closeCursor();
}

function modif_sujet($id,$name) {
    global $bdd;
    $req = $bdd->prepare('UPDATE sujet SET name= :name WHERE id= :id');
    $req->execute(array(
        'id' => $id,
        'name' => $name)
    );
    $req->closeCursor();
}

function supprime_sujet($id){
    global $bdd;
    $req = $bdd->prepare('DELETE FROM sujet WHERE id= :id');
    $req->execute(array(
        'id' => $id)
    );
    $req->closeCursor();
}

function modif_post($id,$contenu) {
    global $bdd;
    $req = $bdd->prepare('UPDATE postSujet SET contenu= :contenu WHERE id= :id');
    $req->execute(array(
        'id' => $id,
        'contenu' => $contenu)
    );
    $req->closeCursor();
}

function supprime_post($id){
    global $bdd;
    $req = $bdd->prepare('DELETE FROM postSujet WHERE id= :id');
    $req->execute(array(
        'id' => $id)
    );
    $req->closeCursor();
}

function modif_aide($id,$question,$reponse) {
    global $bdd;
    $req = $bdd->prepare('UPDATE aide SET question= :question, reponse= :reponse WHERE id= :id');
    $req->execute(array(
        'id' => $id,
        'question' => $question,
        'reponse' => $reponse)
    );
    $req->closeCursor();
}

function supprime_aide($id){
    global $bdd;
    $req = $bdd->prepare('DELETE FROM aide WHERE id= :id');
    $req->execute(array(
        'id' => $id)
    );
    $req->closeCursor();
}