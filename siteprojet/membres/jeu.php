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

        <h1>Règle du Snake</h1><br>
        <p>  Le but du jeu est d'attraper la nourriture qui va apparaitre de manière aléatoire sans toucher les frontières.</p>
        <p>  Vous devez appuyer sur une direction pour commencer.</p>
        <center>
        <table class="tabScore">

            <thead> <!-- En-tête du tableau -->
                <tr>
                    <th>Score</th>
                </tr>
            </thead>

            <tbody> <!-- Corps du tableau -->
                <tr>
                    <td id="score">-</td>
                </tr>
            </tbody>
        </table>
        <h4><span id="reponse"></span></h4>
        <button id ="boutonRejouer" type="button" class="btnRejouer" onClick="rechargerPage()">REJOUER</button>
        <canvas id="canvas" height="360" width="760"></canvas></center>


        <footer>
            <h2>Raphael MAURY</h2>
            <a class="stuts">Université de <span>CORTE</span></a>
        </footer>
</body>
</html>
