<?php
function validate_cmd($id)
{
	$include("bdd.php");
	$bdd->exec('UPDATE commande SET status = 0 WHERE id='.$id.'');
	return("succes");
}
?>