<?php include('model.php');

if(isset($_POST['connexion'])){
    $mail = $_POST['mail'];

    //On compte le nombre d'entrée qu'il y a dans la base pour le pseudo tapé
    $connect_req = 'SELECT COUNT(*) as nb FROM utilisateur WHERE mail = "'.$mail.'"';
    $connect=$bdd->query($connect_req);
    $nb=$connect->fetch();

    //On selectionne toutes les valeurs associé au pseudo
    $connexion_req = 'SELECT * FROM utilisateur WHERE mail = "'.$mail.'"';
    $connexion=$bdd->query($connexion_req);
    $connect=$connexion->fetch();
}else{

}
