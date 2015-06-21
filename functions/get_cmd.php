<?php
//retroune tout les users
function get_cmd()
{
	$i = 0;
	include("bdd.php");
	$rep = $bdd->query('SELECT * FROM commande');
	while ($ok = $rep->fetch())
	{
		$tab[$i] = $ok;
		$i++;
	}
	return($tab);
}
