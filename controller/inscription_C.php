<?php
// Femme == true ; Homme == false;

if(isset($_POST['inscr']))
{
    include('../model/inscription_M.php');
    if($resultat)
    {
        $error =3;
        header('Location: ../vue/inscription_V.php?erreur='.$error);
    }
    else
    {
        if($_POST['password'] == $_POST['password_verif'])
        {
            $pass_hache = sha1('gz' . htmlspecialchars($_POST['password']));// Hachage du mot de passe pour le crypter
        
            if ($_POST['genre']=='Femme')
            {
                $genre=True;
            }
            else
            {
                $genre=False;
            } 

            $admin=False;

            $inser = insertion_utilisateur($_POST['mail'], $pass_hache, $_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['date'], $_POST['adresse'], $_POST['code_postal'], $_POST['ville'], $_POST['pays'], $genre, $admin);
            if($inser)
            {
            $mail = $_POST['mail'];
            $inscript = donnees_utilisateur($mail);
            $_SESSION['id'] = $inscript['ID_utilisateur'];
            $_SESSION['mail'] = $inscript['mail'];
            $_SESSION['nom'] = $inscript['nom'];
            $_SESSION['prenom'] = $inscript['prenom'];
            $_SESSION['pseudo'] = $inscript['pseudo'];
            $_SESSION['date_n'] = $inscript['date_n'];
            $_SESSION['adresse'] = $inscript['adresse'];
            $_SESSION['code_postal'] = $inscript['code_postal'];
            $_SESSION['ville'] = $inscript['ville'];
            $_SESSION['pays'] = $inscript['pays'];
            $_SESSION['admin'] = $inscript['administrateur'];
            header('Location: ../vue/profil_V.php');
            }
            else
            {
                print_r($bdd->errorInfo());
                $error =2;
                header('Location: ../vue/inscription_V.php?erreur='.$error);
            }
       
        }
        else
        {
            $error = 1;
            header('Location: ../vue/inscription_V.php?erreur='.$error);
        }
    


    }

}
else
{
    header('Location: ../vue/inscription_V.php');
}