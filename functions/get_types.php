<?php

function get_type()
{
	$i = 0;
	include("bdd.php");
	$rep = $bdd->query('SELECT * FROM type');
	while($ok = $rep->fetch())
	{
		$tab[$i] = $ok;
		$i++;
	}
	//0 = id
	//1 = libelle
	//2 = description
	return($tab);
}

function get_types($id)
{
	$i = 0;
	include("bdd.php");
	$rep = $bdd->query("SELECT libelle FROM type WHERE id='".$id."'");
	while($ok = $rep->fetch())
	{
		$tab[$i] = $ok;
		$i++;
	}
	return($tab);
}

function get_type_by_art($id)
{
	$i = 0;
	include("bdd.php");
	$rep = $bdd->query('SELECT idType FROM `sand-type` where idSand='.$id.'');
	while($ok = $rep->fetch())
	{
		$lst[$i] = $ok[0];
		$i++;
	}
	//0 = type 1
	//1 = type 2
	//2 = type 3
	return($lst);
}
?>