<?php
function add_art($list)
{
	$include("bdd.php");
	$bdd->exec('INSERT INTO `sandwich` (`id`, `libelle`, `description`, `prix`, `urlimg`) VALUES (NULL, '.$list[1].', '.$list[2].', '.$list[3].', '.$list[4].')');
	//0 = id (ici NULL)
	//1 = libelle
	//2 = description
	//3 = prix
	//4 = urlimg
	return("succes");
}
?>