<!DOCTYPE html>
<html lang="fr">
<html>
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/layout.css" type="text/css">
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
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
                    <input type=Test name="login"  placeholder="Login" required>
                    <input type=Password name="motdepasse" placeholder="Passord" required>
                    <input type="submit" name="submit" value="Se connecter">
                </form>
            </FieldSet>
        </ul>
    </div>
    </div>
        <h1>Tableau des Scores</h1><br>
       <table class="tabScore">

            <thead> <!-- En-tête du tableau -->
                <tr>
                    <th><font color="white">Score</font></th>
                </tr>
            </thead>

            <tbody> <!-- Corps du tableau -->
                <tr>
                    <td id="score">Tu dois être connecter pour voir les scores des joueurs</td>
                </tr>
            </tbody>
        </table>
        <canvas id="canvas" height="500" width="500"></canvas>
         
        <footer>
            <h2>Raphael MAURY</h2>
            <a class="stuts">Université de <span>CORTE</span></a>
        </footer>
</body>
</html>
