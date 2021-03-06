<?php include('../model/connexion_m.php');

if(isset($_POST['connexion'])){
    //vérifie qu'on a appuyer sur le bouton de connexion
    if($nb['nb']>0){
        //vérifie que le pseudo existe
        $pass_hache2 = sha1('gz' . htmlspecialchars($_POST['password']));// hachage du mot de passe passe entré
        if($pass_hache2 == $connect['pass']){
            //vérifie que le mot de passe tapé haché correspond au mot de passe haché associé au pseudo dans la bdd
            $success = 'true';
            $_SESSION['pseudo'] = $connect['pseudo'];
            $_SESSION['id']=$connect['ID_utilisateur'];
            $_SESSION['nom']=$connect['nom'];
            $_SESSION['prenom']=$connect['prenom'];
            $_SESSION['mail']=$connect['mail'];
            $_SESSION['date_n']=$connect['date_n'];
            $_SESSION['adresse']=$connect['adresse'];
            $_SESSION['code_postal']=$connect['code_postal'];
            $_SESSION['ville']=$connect['ville'];
            $_SESSION['pays']=$connect['pays'];
            $_SESSION['photo']=$connect['photo'];
            $_SESSION['admin'] = $connect['administrateur'];
            
        }else{
            $erreur = 0;
        }
    }else{
        $erreur = 1;
    }

    if(isset($erreur)){
        header('Location: ../vue/connexion_v.php?erreur='.$erreur);
    }else{
        $connexion->closeCursor();
        header('Location: ../vue/page_accueil.php');
    }
}else{
    header('Location: ../vue/connexion_v.php');
}

