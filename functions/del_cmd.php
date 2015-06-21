<?php
function del_cmd($id)
{
	include("bdd.php");
	$bdd->exec("DELETE FROM commande WHERE id = '".$id."'");
	return("succes");
}

function del_art($id)
{
	include("bdd.php");
	$bdd->exec("DELETE FROM sandwich WHERE id = '".$id."'");
	return("succes");
}
?>