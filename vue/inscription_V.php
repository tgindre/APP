<?php include("../model/model.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Sharetime</title>
        <link rel="stylesheet" href="style_app.css"/>
        <script type="text/javascript" src="app.js"></script>
    </head>
    <body>
        <?php include("entete.php");
        $formulaire='inscription';
        if(isset($_GET['erreur'])){
    switch ($_GET['erreur']) {
        case 0:
        $erreur="Erreur lors de la connection à la base";
        break;
        case 1:
        $erreur= "Vos deux mots de passe ne sont pas les mêmes";
        break;
        case 2:
        $erreur= "Problème dans l'insertion du formulaire dans la base de donnée";
        break;
        case 3:
        $erreur= "Ce mail est déjà pris";
        break;
        case 4:
        $erreur= "Le mot de passe doit avoir au moins 6 caractères";
        break;
        case 5:
        $erreur= "Il faut accepter les conditions d'utilisations";
        break;

    }
} 
        include("bandeau.php");
        include("pied_de_page.php");
        /*$_SESSION = array();*/
        ?>

    </body>


</html>
