<?php
function add_cmd($idUser, $idSandwichs)
{
	$i = 0;
	$cout = 0;
	$include("bdd.php");
	while ($idSandwich[$i])
	{
		$rep = $bdd->query('SELECT prix FROM sandwich WHERE id = '.$idSandwich[$i].'');
		$ok = $rep->fetch();
		$cout = $ok[0] + $cout;
		$i++;
	}
	$rep = $bdd->query('SELECT solde FROM user WHERE id = '.$idUser.'');
	$ok = fetch();
	//si pas assez de sous, return -1
	if ($cout > $ok[0])
		return (-1);
	else
	{
		$cout = $ok[0] - $cout;
		$bdd->exec('UPDATE USER SET solde='.$cout.' WHERE id='.$idUser.'');
	}
	$bdd->exec('INSERT INTO realcmd(id, date_cmd, status) VALUES (NULL, '.time().', 1)');
	$rep = $bdd->query('SELECT MAX(id) FROM realcmd');
	$ok = $rep->fetch();
	$id_cmd = $ok[0];
	$i = 0;
	while ($idSandwichs[$i])
	{
		$bdd->exec('INSERT INTO commande(idUser, idSandwich, idcmd) VALUES ('.$idUser.', '.$idSandwich[$i].', '.$id_cmd.')');
		$i++;
	}
	return($id_cmd);
}
?>