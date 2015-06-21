<?php
function get_arts()
{
	$i = 0;
	include("bdd.php");
	$rep = $bdd->query('SELECT * FROM sandwich');
	while($ok = $rep->fetch())
	{
		$tab[$i] = $ok;
		$i++;
	}
	//0 = id
	//1 = libelle
	//2 = description
	//3 = prix
	//4 = urlimg
	//5 = idtype
	return($tab);
}

function get_arts_byid($idType)
{
	$i = 0;
	include("bdd.php");
	$rep = $bdd->query('SELECT * FROM sandwich INNER JOIN `sand-type` ON sandwich.id=`sand-type`.idSand WHERE `sand-type`.`idType`='.$idType.'');
	while($ok = $rep->fetch())
	{
		$tab[$i] = $ok;
		$i++;
	}
	//0 = id
	//1 = libelle
	//2 = description
	//3 = prix
	//4 = urlimg
	//5 = idtype
	return($tab);
}
?>