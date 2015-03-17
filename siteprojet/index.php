<!DOCTYPE html>
<?php
// Finalement, on détruit la session.
session_destroy();
?>
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
                <div class="btn">
                <form action="connect.php" method="get">
                    <Legend>  Identification</Legend>
                    <input type=Test name="login"  placeholder="Login" required>
                    <input type=Password name="motdepasse" placeholder="Passord" required>
                    <input type="submit" name="submit" value="Se connecter">
                </form>
                </div>
            </FieldSet>
        </ul>
    </div>
    </div>
    <div class="container2 " role="form" style="border:3px solid black; border-radius: 20px; margin-top: 50px; padding-bottom:100px">
        <h1>Presentation</h1><br><br>
        <div style="margin-left: 30px;">
        <big>Ce site est un projet réalisé en cours de programmation.<br>
        Il m'a permis d'obtenir des bases en programmation Web comme le html, css, javacript et en php.<br>
        Ce site va vous permetre, de jouer à quelques jeux mais aussi à deposer des commentaires grâce à un systeme d'authentification.</big>
    </div>
    </div>
    
    <footer>
            <h2>Raphael MAURY</h2>
            <a class="stuts">Université de <span>CORTE</span></a>
        </footer>
</body>
</html>
