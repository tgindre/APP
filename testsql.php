<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>test sql</title>

    </head>

    <style>

    form

    {

        text-align:center;

    }

    </style>

    <body>

    

    <form action="testsql.php" method="post">

        <p>

        <label for="pseudo">Pseudo</label> : <input type="text" name="login" id="login" /><br />

        <label for="message">Password</label> :  <input type="password" name="password" id="password" /><br />


        <input type="submit" value="Envoyer" />

    </p>

    </form>
 
 <?php


// On récupère les variables envoyées par le formulaire

$login = $_POST['login'];

$password = $_POST['password'];


// Connexion à la BDD en PDO

try { $bdd = new PDO('mysql:host=localhost;dbname=test','root',''); }

catch (Exeption $e) { die('Erreur : ' .$e->getMessage())  or die(print_r($bdd->errorInfo())); }


// Requête SQL

$req = $bdd->query("SELECT * FROM utilisateurs WHERE login='$login' AND password='$password'");
$donnees = $req->fetch();

echo $donnees['password'];

?>
        
    </body>

</html>