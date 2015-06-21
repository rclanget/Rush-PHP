<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=foodtruck;charset=utf8', 'root', 'thoughtpolice');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>