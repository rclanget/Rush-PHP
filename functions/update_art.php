<?php
function update_art($list)
{
	$include("bdd.php");
	$bdd->exec('UPDATE sandwich SET libelle='.$list[1].', description='.$list[2].', prix='.$list[3].', urlimg='.$list[4].' WHERE id='.$list[0].'');
	//0 = id
	//1 = libelle
	//2 = description
	//3 = prix
	//4 = urlimg
	return("succes");
}
?>