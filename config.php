<?php

$DB_serveur = 'localhost'; // Nom du serveur
$DB_utilisateur = 'root'; // Nom de l'utilisateur de la base
$DB_motdepasse = 'root'; // Mot de passe pour accèder à la base
$DB_base = 'projet'; // Nom de la base

$connection = mysql_connect($DB_serveur, $DB_utilisateur, $DB_motdepasse) // On se connecte au serveur
or die (mysql_error().' sur la ligne '.__LINE__);

mysql_select_db($DB_base, $connection) // On se connecte à la BDD
or die (mysql_error().' sur la ligne '.__LINE__);

Define('_MAX_TENTATIVE', 3); 

?>