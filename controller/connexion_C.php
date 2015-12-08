<?php include('../model/connexion_M.php');

if(isset($_POST['connexion'])){
    //vérifie qu'on a appuyer sur le bouton de connexion
    if($nb['nb']>0){
        //vérifie que le pseudo existe
        if($_POST['password'] == $connect['pass']){
            //vérifie que le mot de passe taper correspond au mot de passe associé au pseudo dans la bdd
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
            
        }else{
            $erreur = 'Votre mot de passe ne correspond pas';
        }
    }else{
        $erreur = 'Votre adresse mail n existe pas';
    }

    if(isset($erreur)){
        header('Location: ../vue/connexion_V.php?erreur='.$erreur);
    }else{
        header('Location: ../vue/page_accueil.php');
    }
}else{
    header('Location: ../vue/connexion_V.php');
}

