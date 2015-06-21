<?php
function update_user($list)
{
	$include("bdd.php");
	$bdd->exec('UPDATE table SET nom='.$list[1].', prenom='.$list[2].', pseudo='.$list[3].' WHERE id='.$list[0].'');
	//0 = id
	//1 = nom
	//2 = prenom
	//3 = pseudo
	return("succes");
}
?>