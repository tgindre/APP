﻿function verif_champ()
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