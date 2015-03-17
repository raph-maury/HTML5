<!DOCTYPE html>
<html lang="fr">
<html>
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/layout.css" type="text/css" media="screen">
        <link rel="stylesheet" href="../css/menu.css" type="text/css" media="screen">
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
    <center>
    <h1>Page reservé à l'administrateur</h1>
    </center>
    <footer>
            <h2>Raphael MAURY</h2>
            <a class="stuts">Université de <span>CORTE</span></a>
        </footer>
</body>
</html>
