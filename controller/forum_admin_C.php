<?php

include '../model/model.php';
include '../model/cree_bdd.php';
include '../model/modif_bdd.php';

if(isset($_POST['modifCategorie']) OR isset($_POST['suppCategorie']) OR isset($_POST['addCategorie'])){

	if(isset($_POST['modifCategorie'])){
		modif_categorie($_POST['id_categorie'],$_POST['name_categorie']);
	}

	if(isset($_POST['suppCategorie'])){
		supprime_categorie($_POST['id_categorie']);
	}

	if(isset($_POST['addCategorie'])){
		creation_categorie($_POST['nom_categorie']);	
	}
	header('Location: ../vue/forum_admin_V.php');
}

if (isset($_POST['modifSujet']) OR isset($_POST['suppSujet']) OR isset($_POST['addSujet'])){

	if(isset($_POST['modifSujet'])){
		modif_sujet($_POST['id_sujet'],$_POST['name_sujet']);
	}

	if(isset($_POST['suppSujet'])){
		supprime_sujet($_POST['id_sujet']);
	}

	if(isset($_POST['addSujet'])){
		creation_sujet($_POST['name_sujet'],$_POST['name_categorie']);	
	}
	header('Location: ../vue/forum_admin_V.php?categorie='.$_POST['name_categorie']);
}

if (isset($_POST['modifPost']) OR isset($_POST['suppPost'])){

	if(isset($_POST['modifPost'])){
		modif_post($_POST['id_post'],$_POST['post']);
	}

	if(isset($_POST['suppPost'])){
		supprime_post($_POST['id_post']);
	}

	header('Location: ../vue/forum_admin_V.php?categorie=' . $_POST['name_categorie'] . '&sujet=' . $_POST['name_sujet']);
}

?>
