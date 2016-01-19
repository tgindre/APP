<?php

if (isset($select)){
	if ($select == "post"){
		$requete = $bdd->prepare('SELECT * FROM postsujet WHERE sujet= :sujet ');
		$requete->execute(array('sujet'=>$_GET['sujet']));
	}

	if ($select == "utilisateur"){
		$requete2 = $bdd->prepare('SELECT * FROM utilisateur WHERE ID_utilisateur = :ID_utilisateur');
		$requete2->execute(array('ID_utilisateur'=>$reponse['propri']));
		$utilisateur = $requete2->fetch();
	}

	if ($select == "sujet"){
		$requete = $bdd->prepare('SELECT * FROM sujet WHERE categorie = :categorie ');
		$requete->execute(array('categorie'=>$_GET['categorie']));
	}

	if ($select == "categorie"){
		$requete = $bdd->query('SELECT * FROM categories');
	}
}

if (isset($insert)){
	if ($insert == "post"){
		$requete2 = $this->bdd->prepare('INSERT INTO postsujet(propri,contenu,date,sujet) VALUES(:propri,:contenu,NOW(),:sujet)');
		$requete2->execute(array('propri'=>$_SESSION['id'],'contenu' => $this->sujet,'sujet'=> $this->name));
	}

	if ($insert == "sujet"){
		$requete = $this->bdd->prepare('INSERT INTO sujet(name,categorie) VALUES(:name,:categorie)');
		$requete->execute(array('name' => $this->name,'categorie'=> $this->categorie));

		$requete2 = $this->bdd->prepare('INSERT INTO postsujet(propri,contenu,date,sujet) VALUES(:propri,:contenu,NOW(),:sujet)');
		$requete2->execute(array('propri'=>$_SESSION['id'],'contenu' => $this->sujet,'sujet'=> $this->name));
	}
}
?>