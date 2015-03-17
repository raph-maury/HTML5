<?php
session_start();
?>
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
    <center>
    <h1>Votre compte</h1>
        <div class="form-group">
            <label for="inputLogin">Login: </label>
            <?php
                    echo $_SESSION["Login"];
            ?>
        <br>
        </div>
        <div class="form-group">
             <label for="inputPassword">Password: </label>
            <?php
                    echo $_SESSION["mp"];
            ?>
        <br>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email: </label>
            <?php
                    echo $_SESSION["email"];
            ?>
        </div>
    </center>
    <footer>
            <h2>Raphael MAURY</h2>
            <a class="stuts">Université de <span>CORTE</span></a>
        </footer>
</body>
</html>
