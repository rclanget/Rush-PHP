<?php
//retroune tout les users
function get_users()
{
	$i = 0;
	include("bdd.php");
	$rep = $bdd->query('SELECT * FROM user');
	while ($ok = $rep->fetch())
	{
		$tab[$i] = $ok;
		$i++;
	}
	//0 = id
	//1 = admin
	//2 = nom
	//3 = prenom
	//4 = pseudo
	//5 = password
	//6 = solde
	return($tab);
}

// function get_user($option)
// {
// 	$i = 0;
// 	include("bdd.php");
// 	$rep = $bdd->query('SELECT * FROM user');
// 	while ($ok = $rep->fetch())
// 	{
// 		$tab[$i] = $ok;
// 		$i++;
// 	}
// 	//0 = id
// 	//1 = admin
// 	//2 = nom
// 	//3 = prenom
// 	//4 = pseudo
// 	//5 = password
// 	//6 = solde
// 	return($tab);
// }
?>