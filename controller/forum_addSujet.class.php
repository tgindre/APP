<?php include_once '../model/model.php';

class addSujet{

	private $name;
	private $sujet;
	private $categorie;
	private $bdd;

	public function __construct($name,$sujet,$categorie) {
		
		$this->name = htmlspecialchars($name);
		$this->sujet = htmlspecialchars($sujet);
		$this->categorie = htmlspecialchars($categorie);
		$this->bdd = bdd();
	}

	public function verif(){

		if((strlen($this->name) > 5) AND (strlen($this->name) < 60)){ // Si le nom du sujet est bon

			if(strlen($this->sujet) > 0){ //Si on a bien un sujet


				return 'ok';
			}
			else { //Si on n'a pas de contenu
				$erreur = 'Veuillez entrer le contenu du sujet';
				return $erreur;
			}
		}
		else { //Si le nom du sujet est mauvais
			$erreur = 'Le nom du sujet doit contenir entre 5 et 60 caractères';
			return $erreur;

		}
	}

	public function insert(){

		$insert = "sujet";
		include "../model/forum_index_m.php";

		return 1;

	}
}