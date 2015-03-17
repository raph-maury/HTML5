<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<html>
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/layout.css" type="text/css">
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../CSS/jquery.autocomplete.css">
     <!-- Fichier JS : jeux --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
    <script src="../js/snake.js" type="text/javascript"></script>
    <script src="../js/jquery.autocomplete.js" type="text/javascript"></script>
</head>

<body>
    <div class="container">
    <div class="content">
        <ul id="nav">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="jeu.php" class="current">snake</a></li>
            <li><a href="compte.php">Compte</a></li>
            <li><a href="score.php">Meilleurs Scores</a></li>
            <li><a href="com.php">Livre d'or</a></li>
            <li><a href="admin.php">Admin</a></li>
            <FieldSet>
                <form action="connect.php" method="get">
                    <Legend>  Identification</Legend>
                    <?php
                    echo $_SESSION["Login"];
                    ?>
                    </form>
                    <input type="submit" name="deconnexion" value="Deconnexion" onclick="self.location.href='http://localhost:8888/index.php'">
                </form>
            </FieldSet>
        </ul>
    </div>
    </div>
 <center><h1>Livre d'or</h1><br><br>
     <form action="livreor.php" method="post">
         <div>
             <fieldset>
                 <legend>Votre Nom</legend>
                 <?php
                    echo $_SESSION["Login"];
                ?>
             </fieldset>
             <fieldset>
                 <legend>Postez un message pour le livre d'or</legend>
                <textarea cols="66" rows="6" name="message"></textarea>
             </fieldset>
              <input type="submit" value="Envoyer" />
             <p class="pages">
        </div>
        <center><h1>Les commantaires</h1><br>
        <?php
            require('../config.php');
            $req ="SELECT `user`, `message` FROM `livreor`";
            $res = mysql_query($req);
            while ($row = mysql_fetch_assoc($res)){
            echo "Pseudo: ".$row["user"]." : ".$row["message"];
            echo "</br>";
            }
        ?>
            
            
        
    </form>
    </center>


        <footer>
            <h2>Raphael MAURY</h2>
            <a class="stuts">Université de <span>CORTE</span></a>
        </footer>
</body>
</html>
