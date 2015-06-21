<?php
//retourne un article selon son id
function get_art($id)
{
	include("bdd.php");
	$rep = $bdd->query('SELECT * FROM sandwich WHERE id='.$id.'');
	$ok = $rep->fetch();
	//0 = id
	//1 = libelle
	//2 = description
	//3 = prix
	//4 = urlimg
	//5 = idtype
	return($ok);
}
?>