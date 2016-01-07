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
    var r=confirm("êtes-vous sur de vouloir supprimer");
    if (r==true) {
        var formulaire = document.getElementById("confirm_suppr");
        formulaire.submit();
    } else {}
}
