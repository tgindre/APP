<?php
	if ($select == "post"){
	$requete = $bdd->prepare('SELECT * FROM postSujet WHERE sujet= :sujet ');
	$requete->execute(array('sujet'=>$_GET['sujet']));
	}
?>