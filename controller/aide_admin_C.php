<?php

include '../model/model.php';
include '../model/cree_bdd.php';
include '../model/modif_bdd.php';

if(isset($_POST['add_aide'])){
	creation_aide($_POST['add_question'],$_POST['add_reponse']);
}

if(isset($_POST['modif_aide'])){
	modif_aide($_POST['id_aide'],$_POST['question'],$_POST['reponse']);
}

if(isset($_POST['supp_aide'])){
	supprime_aide($_POST['id_aide']);
}

header('Location: ../vue/aide_admin_v.php')
?>