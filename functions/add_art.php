<?php

function add_art($list)
{
	include("bdd.php");
		$list[2] += 0.00;
	$bdd->exec("INSERT INTO sandwich (libelle, description, prix, urlimg) VALUES ('".$list[0]."', '".$list[1]."', '".$list[2]."', '".$list[3]."')");
	//1 = libelle
	//2 = description
	//3 = prix
	//4 = urlimg
	$rep = $bdd->query("SELECT * FROM sandwich WHERE libelle='".$list[0]."'");
	$i = 0;
	$ok = $rep->fetch();
	if ($list[4])
		add_type($ok[0], $list[4]);
	if ($list[5])
		add_type($ok[0], $list[5]);
	if ($list[6])
		add_type($ok[0], $list[6]);
	return("succes");
}
?>