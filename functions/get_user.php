<?php
//retourne un user selon son id
function get_user($id)
{
	include("bdd.php");
	$rep = $bdd->query('SELECT * FROM user WHERE id='.$id.'');
	$ok = $rep->fetch();
	//0 = id
	//1 = admin
	//2 = nom
	//3 = prenom
	//4 = pseudo
	//5 = password
	//6 = solde
	return($ok);
}
?>