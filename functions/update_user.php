<?php
function update_user($list)
{
	include('bdd.php');
	if ($list[4] != NULL)
		$bdd->exec("UPDATE USER SET nom='".$list[1]."', prenom='".$list[2]."', pseudo='".$list[3]."', password='".hash(whirlpool, $list[4])."' WHERE id='".$list[0]."'");
	else
		$bdd->exec("UPDATE USER SET nom='".$list[1]."', prenom='".$list[2]."', pseudo='".$list[3]."' WHERE id='".$list[0]."'");
	//0 = id
	//1 = nom
	//2 = prenom
	//3 = pseudo
	//4 = password
	return("success"); 
}
?>