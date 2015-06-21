<?php
function del_cmd($id)
{
	$include("bdd.php");
	$bdd->exec('DELETE FROM commande WHERE id = '.$id.'');
	return("succes");
}
?>