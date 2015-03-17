<meta charset="utf-8">
<?php
/*Ouverture du fichier en lecture seule*/
$fic = fopen("/data/sql-pays.csv", "r");
/*Si on a réussi à ouvrir le fichier*/
    if (is_readable($fic)) {
        /* création du select */
        /*Tant que l’on n’est pas à la fin du fichier*/
        while($tab=fgetcsv($fic,1024,';'))
        {  
            /*On lit la ligne courante*/
            /*On crée un tableau avec chaque ligne */
            /* création des options*/
            // Vérification de la taille du tableau
            // Suppression des ""
            /*On ferme le fichier*/
            /* on ferme le select */
            /* on renvoie le résultat */      
        }
    }
echo 'Erreur ficier';
/* Sinon en renvoie une erreur */
?>