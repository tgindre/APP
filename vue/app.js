function verif_champ()
{
	var pseudo = document.getElementById("pseudo");
	var email = document.getElementById("email");
	var mdp = document.getElementById("mdp");
	if ((pseudo.value == "") || (email.value == "") || (mdp.value == ""))
	{
	alert("Veuillez choisir au minimum un pseudo, un mot de passe et une adresse mail");
	//pseudo.focus();
	return false;
	}
	return true;
}
﻿function verif_confirm()
{
    var r=confirm("êtes-vous sur de vouloir supprimer"); //marche sans la fonction mais à essayer (essayer avec var r=confirm("êtes-vous sur de vouloir supprimer"),)
         //   ans = return r;
    if (ans) {
        //var formulaire = document.getElementById("confirm_suppr");
        //formulaire.submit();
        document.getElementById("confirm_suppr").submit();
        alert('Ok');
    } else {
        
        alert('pas ok');
    }
}
