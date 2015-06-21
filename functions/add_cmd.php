<?php
function add_cmd($idUser, $idSandwichs)
{
	include('bdd.php');
	// while ($idSandwich[$i])
	// {
	// 	$rep = $bdd->query('SELECT prix FROM sandwich WHERE id = '.$idSandwich[$i].'');
	// 	$ok = $rep->fetch();
	// 	$cout = $ok[0] + $cout;
	// 	$i++;
	// }
	// $bdd->exec('INSERT INTO realcmd(id, date_cmd, status) VALUES (NULL, '.time().', 1)');
	// $rep = $bdd->query('SELECT MAX(id) FROM realcmd');
	// $ok = $rep->fetch();
	$i = 0;
	while ($idSandwichs[$i])
	{
		$bdd->exec("INSERT INTO COMMANDE (idUser, idSandwich, idcmd) VALUES ('".$idUser."', '".$idSandwichs[$i]."', '".$i."')");
		$i++;
	}
}
?>