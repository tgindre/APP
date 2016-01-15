<?php 
$requete_moyenne = mysql_query("SELECT AVG(list_note) FROM commentaire "); 
$moyenne = mysql_result($requete_moyenne,0); 

echo 'Spectateurs : . $moyenne . ';

$req = $bdd->query('SELECT * FROM commentaire ORDER BY date');

while ($donnees = $req->fetch())
{
	$req2 = $bdd->prepare('SELECT * FROM utilisateur WHERE ID_utilisateur = :ID_utilisateur');
	$req2->execute(array('ID_utilisateur'=>$donnees['utilisateur']));
	$utilisateur = $req2->fetch();
}

