<?php

$mail = htmlentities(addslashes( $_POST['mail'])); // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
 
//=====Définition du sujet.

$sujet = '[ShareTime]Votre nouveau mot de passe';

//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"ShareTime\"<ShareTime@gmail.fr>".$passage_ligne;
$header.= "Reply-to: \"WeaponsB\" <weaponsb@mail.fr>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message

$mail = htmlentities(addslashes( $_POST['mail']));
//fonction pour avoir un mdp quelconque
$numbers = range (1,10000);
shuffle ($numbers); 
$no=1; 
$result = array_slice($numbers,0,$no); 

for ($i=0;$i<$no;$i++)
{ 
  $mot_de_passe = $result[$i]; 
}


modif_utilisateur($pass, $mot_de_passe, $id);



//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= "Cher membre,</br>
Suite à votre demande voici vos identifiants de connexion à votre compte</br>
Login de connexion : ".$mail."</br>
Mot de passe : ".$mot_de_passe."</br>";
//==========
header ('Location:../vue/page_reconnecter.php');
 
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
//==========




?>
