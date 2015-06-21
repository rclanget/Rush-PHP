<?php
	include('functions/is_admin.php');
	if (isset($_POST['password']) && $_POST['password'] === "")
		header('Location: connection.php?error=Veuillez indiquer votre mot de passe');
	else if (isset($_POST['pseudo']) && $_POST['pseudo'] === "")
		header('Location: connection.php?error=Veuillez indiquer votre pseudo');
	else
	{
		$i = 0;
		include("bdd.php");
		$rep = $bdd->query('SELECT id, pseudo, password FROM USER');
		while($ok = $rep->fetch())
		{
			if($ok['pseudo'] == $_POST['pseudo'])
			{
				if($ok['password'] == hash(whirlpool, $_POST['password']))
				{
					session_start();
					$_SESSION["logged"] = $ok['id'];
					$_SESSION["admin"] = is_admin($ok['id']);
					header('Location: products.php?success=Vous êtes connecté.');
					$i = 1;
				}
				else
					header('Location: connection.php?error=la combinaison pseudo/mot de passe ne corresponds pas, merci de retry !'); 
			}
		}
		if ($i == 0)
			header('Location: connection.php?error=la combinaison pseudo/mot de passe ne corresponds pas, merci de retry');
	}
?>