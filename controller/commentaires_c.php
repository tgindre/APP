<?php include('../model/model.php');
include('../model/modif_bdd.php');
include('../model/select_bdd.php');
include('../model/cree_bdd.php');

 if(isset($_POST['publier'])){
        $i=$_POST['numero'];
	$ins = creation_com($_POST['contenu'],$_POST['list_note'], $_SESSION['id'], $_SESSION['id_even'.$i] );
        header('Location: ../vue/even_v.php?nb='.$i);
 }
$requete_moyenne = moyenne_note($_SESSION['id_even'.$i]);
$_SESSION['moyenne']=$requete_moyenne['moyenne'];

$req = select_com($_SESSION['id_even'.$i]);
if($req!=false){
    $_SESSION['com']=true;
    $j=1;
while ($donnees = $req->fetch())
{
	$req2 =select_utilisateur_com ($donnees['utilisateur']);
	$utilisateur = $req2->fetch();
        $_SESSION['pseudo'.$i.$j]=$utilisateur['pseudo'];
        $_SESSION['date'.$i.$j]=$donnees['date'];
        $_SESSION['contenu'.$i.$j]=$donnees['contenu'];
        $_SESSION['nb_com']=$j;
        $j++;       
}
} else{
    $_SESSION['com']=false;
}