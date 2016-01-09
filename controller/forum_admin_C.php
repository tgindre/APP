<?php

include '../model/model.php';
include '../model/cree_bdd.php';
include '../model/modif_bdd.php';

if(isset($_POST['nom_categorie'])){
	creation_categorie($_POST['nom_categorie']);	
}

if(isset($_POST['id_categorie'])){
	supprime_categorie($_POST['id_categorie']);
}
header('Location: ../vue/forum_admin_V.php');
?>