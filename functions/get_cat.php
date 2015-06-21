<?php
//retourne le nom et la description d'une categorie selon son id
function get_cat($id)
{
	include("bdd.php");
	$rep = $bdd->query('SELECT libelle, description FROM type WHERE id='.$id.'');
	$ok = $rep->fetch();
	//0 = libelle
	//1 = description
	return($ok);
}
?>