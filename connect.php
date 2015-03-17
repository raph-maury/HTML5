<?php
if(!isset($_GET['mail']) && !isset($_GET['password']))
{
    header('Location: index.php');
}
else
{
    // On réclame le fichier
    require('config.php'); 

        $mail = $_GET['mail'];
        $password = $_GET['password'];

        $sql = "SELECT * FROM utilisateur WHERE mail='".mysql_escape_string($mail)."'";

        // On vérifie si ce mail existe
        $requete_1 = mysql_query($sql) or die ( mysql_error() );

        if(mysql_num_rows($requete_1)==0)
        {
            echo 'Ce mail n existe pas ! <br/>';
            echo '<a href="index.php" temp_href="index.php">Réessayer</a>';
            echo '<a href="compte.html" temp_href="compte.html">Créer votre compte</a>';
            exit();
        }
        else
        {
            // On vérifie si le mail et le mot de passe correspondent au compte utilisateur
            $requete_2 = mysql_query($sql." AND password='".mysql_escape_string($password)."'")
or die ( mysql_error() );

            if(mysql_num_rows($requete_2)==0)
            {
                // On va récupérer les résultats
                $result = mysql_fetch_array($requete_1, MYSQL_ASSOC);

                // On va récupérer la date de la dernière connexion
                $lastconnection = explode(' ', $result["dates"]);
                $lastjour = explode('-', $lastconnection[0]);

                // On va récupérer le nombre de tentative et l'affecter
                $nbr_essai = $result["nbr_connect"];

                if($lastjour[2]==date("d") && $MAX_essai==$nbr_essai)
                {
                    echo 'Vous avez atteint le quota de tentative, essayez demain !<br/>';
                    exit();
                }
                else
                {
                    $nbr_essai++;
                    $update = "UPDATE utilisateur SET nbr_connect='".$nbr_essai."', dates=NOW()
WHERE id='".$result["id"]."'";

                    mysql_query($update) or die ( mysql_error() );

                    echo 'Le mot de passe et/ou le mail sont incorrectes <br/>';
                    echo '<a href="index.php" href="index.php">Réessayer</a> <br/>';
                    echo '<a href="compte.html" temp_href="compte.php">Créer votre compte</a>';
                    exit();
                }
            }
            else
            {
                // On va récupérer les résultats
                $result = mysql_fetch_array($requete_2, MYSQL_ASSOC);

                $nbr_essai = 0;
                $update = "UPDATE utilisateur SET nbr_connect='".$nbr_essai."', dates=NOW()
WHERE id='".$result["id"]."'";

                mysql_query($update) or die ( mysql_error() );
            

                // On redirige vers la partie membre
                session_start();
                $_SESSION["id"]=$result["id"];
                $_SESSION["mail"]=$mail;
                $_SESSION["mp"]=$password;
                
                $mail = "SELECT mail FROM utilisateur WHERE mail='".mysql_escape_string($mail)."'";
                $res = mysql_query($mail) or die ( mysql_error() );
                
                //convertir la requete en string
                $crs = mysql_fetch_assoc($res);
                $_SESSION["mail"]=$crs["mail"];
                
                header('Location: livredor.php');
            }
    }
}
?>