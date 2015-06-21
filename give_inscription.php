<?php
	
if (isset($_POST['passwd']) && $_POST['passwd'] === "")
	header('Location: inscription.php?error=Veuillez indiquer un mot de passe');
else if (isset($_POST['prenom']) && $_POST['prenom'] === "")
	header('Location: inscription.php?error=Veuillez indiquer un prenom');
else if (isset($_POST['pseudo']) && $_POST['pseudo'] === "")
	header('Location: inscription.php?error=Veuillez indiquer un pseudo');
else if (isset($_POST['nom']) && $_POST['nom'] === "")
	header('Location: inscription.php?error=Veuillez indiquer un nom');
else
{	
	$i = 0;
	include('bdd.php');
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$pseudo = $_POST['pseudo'];
	$mdp = $_POST['passwd'];
	$rep = $bdd->query('SELECT pseudo FROM USER');
	while($ok = $rep->fetch())
	{
		if($ok[0] == $pseudo)
		{
			header('Location: inscription.php?error=pseudo deja existant'); 
			$i = 1;
		}
	}
	if ($i == 0)
	{
		$bdd->exec("INSERT INTO USER (nom, prenom, pseudo, password, solde) VALUES('".$nom."', '".$prenom."', '".$pseudo."', '".hash(whirlpool, $mdp)."', 0)");
		header('Location: connection.php?succes=Vous pouvez maintenant vous connecter !');
	}
}
?>