<?php include("../model/model.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Sharetime</title>
        <link rel="stylesheet" href="style_APP.css"/>
        <script type="text/javascript" src="app.js"></script>
    </head>
    <body>
        <?php include("entete.php");
        $formulaire='inscription';
        if(isset($_GET['erreur'])){
    switch ($_GET['erreur']) {
        case 0:
        echo "Erreur lors de la connection à la base";
        break;
        case 1:
        echo "Vos deux mots de passe ne sont pas les mêmes";
        break;
        case 2:
        echo "Probleme dans l'insertion du formulaire dans la base de donnée";
        break;
        case 3:
        echo "Ce mail est déjà pris";
        break;
        case 4:
        echo "Le mot de pass doit avoir au moins 8 caractères et au minimum une lettre et un chiffre";
        break;

    }
} 
        include("bandeau.php");
        include("pied_de_page.php"); ?>

    </body>


</html>
