<?php
function del_user($id)
{
	$include("bdd.php");
	$bdd->exec('DELETE FROM user WHERE id = '.$id.'');
	return("succes");
}
?>