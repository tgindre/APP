<?php include_once '../model/model.php';

class addPost{

	private $sujet;
	private $name;
	private $bdd;

	public function __construct($name,$sujet) {
		
		$this->sujet = htmlspecialchars($sujet);
		$this->name = htmlspecialchars($name);
		$this->bdd = bdd();
	}

	public function verif(){

		if(strlen($this->sujet) > 0){ //Si on a bien un sujet


			return 'ok';
		}
		else { //Si on n'a pas de contenu
			$erreur = 'Veuillez entrer le contenu de votre post';
			return $erreur;
		}
		
	}

	public function insert(){

		$insert = "post";
		include "../model/forum_index_M.php";

		return 1;

	}
}