<?php
//dit si un user est admin selon son id
function is_admin($id)
{
	include("bdd.php");
	$rep = $bdd->query('SELECT admin FROM user WHERE id='.$id.'');
	$ok = $rep->fetch();
	//0 = non admin
	//1 = admin
	return($ok[0]);
}
?>