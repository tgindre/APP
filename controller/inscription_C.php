<?php
// Femme == true ; Homme == false;

include('../model/model.php');
if(isset($_POST['inscr'])){
    if($_POST['password'] == $_POST['password_verif']) {
        if ($_POST['genre']=='Femme'){
            $genre=True;
        } else {
            $genre=False;
        }
        $admin=False;
        $insert=$bdd->prepare("INSERT INTO utilisateur (mail, pass, nom, prenom, pseudo,date_n, adresse, code_postal, ville, pays, sexe, administrateur) VALUES (?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if ($insert->execute(array($_POST['mail'], $_POST['password'], $_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['date'], $_POST['adresse'], $_POST['code_postal'],$_POST['ville'], $_POST['pays'], $genre, $admin))){
        $_SESSION['mail'] = $_POST['mail']; 
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['prenom'] = $_POST['prenom']; 
        $_SESSION['pseudo'] = $_POST['pseudo']; 
        $_SESSION['date_n'] = $_POST['date'];
        $_SESSION['adresse'] = $_POST['adresse']; 
        $_SESSION['code_postal'] = $_POST['code_postal'];
        $_SESSION['ville'] = $_POST['ville'];
        $_SESSION['pays'] = $_POST['pays']; 
            header('Location: ../vue/profil_V.php'); 
        } else {
            print_r($bdd->errorInfo());
            $error =2;
            header('Location: ../vue/inscription_V.php?erreur='.$error);
        }
       
        
   }else{
        $error = 1;
        header('Location: ../vue/inscription_V.php?erreur='.$error);
    }
}else{
    header('Location: ../vue/inscription_V.php');
}


