<?php

$link = mysql_connect('localhost', 'root', 'thoughtpolice');
if (!$link) {
    die('Connexion impossible : ' . mysql_error());
}

$sql = 'CREATE DATABASE foodtruck';
if (mysql_query($sql, $link)) {
    echo "Base de données créée correctement\n";
} else {
    echo 'Erreur lors de la création de la base de données : ' . mysql_error() . "\n";
}
?>