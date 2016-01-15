<?php include('../model/model.php'); ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<title> Sharetime</title>
	<link rel="stylesheet" href="style_app.css"/>
	</head>
	<body>
    <?php include("entete.php"); ?>
	
<?php
$requete_moyenne = $bdd->query("SELECT AVG(list_note) AS moyenne FROM commentaire "); 
$moyenne = $requete_moyenne->fetch();
echo 'Spectateurs :' . $moyenne['moyenne'] ; ?>
	
	<h2>Commentaires</h2>

<?php
 
$req = $bdd->query('SELECT * FROM commentaire ORDER BY date');

while ($donnees = $req->fetch())
{
	$req2 = $bdd->prepare('SELECT * FROM utilisateur WHERE ID_utilisateur = :ID_utilisateur');
	$req2->execute(array('ID_utilisateur'=>$donnees['utilisateur']));
	$utilisateur = $req2->fetch();
	
?>
<p class="info" ><strong><?php echo $utilisateur['pseudo']; ?></strong> le <?php echo $donnees['date']; ?></p>
<p class="contenu"><?php echo nl2br(htmlspecialchars($donnees['contenu'])); ?></p>
<?php
} 
$req->closeCursor();
?>


	<form method="post" action="page_commentaires.php">
   <p>
       <label for="note">Comment avez vous trouvé cet évènement?</label><br />
       <select name="list_note" id="note">
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
           <option value="8">8</option>
		   <option value="9">9</option>
           <option value="10">10</option>
       </select>
   </p>

	<p> Quelque chose à dire ? </br>
	
		<input type="text" name="contenu" placeholder="taper votre commentaire ici" size="80px" />
		<input type="submit" name="publier" value="publier" />
	<p>
		<input type="text" name="Commentaire" placeholder="taper votre commentaire ici" />
		<input type="submit" value="Publier" />
	</p>
	</form>
	
	<?php
 if(isset($_POST['publier'])){
	$req = $bdd->prepare('INSERT INTO commentaire (avis,list_note) VALUES(?, ?)');
	$req->execute(array($_POST['contenu'], $_POST['list_note']));  
 }
	?>
	
	</body>
</html>