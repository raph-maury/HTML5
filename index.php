<html lang="fr">
    
    <!--<?php include 'header.php'; ?> -->
<head>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css.css" rel="stylesheet">
    <title>Site de jeux</title>
    <link rel="icon" href="images/icone.png">
</head>


<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="dropdown">
            <ul class="nav navbar-nav">
            <li><a class="navbar-brand" href="index.php">Accueil</a></li>
                <li><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button">Jeux<span class="caret"></span></a>
                 <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Snack</a></li>
                        <li><a href="#">Pendu</a></li>
                        <li><a href="#">Morpion</a></li>
                        <li><a href="#">Memoire</a></li>
                        <li><a href="#">Plus Ou Moins</a></li>
                </ul></li>
            <li><a href="comptes.php">Mon compte</a></li>
            <li><a href="#">Meilleurs Scores</a></li>
            <li><a href="livredor.php">Livre d'or</a></li>
            </ul>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" action="connect.php" method="get">
                      <IMG SRC="/images/avatar.png" ALT="Image de votre avatar" TITLE="Avatar" id="avatar" name="avatar" width="45">
            <div class="form-group">
              <input type="text" placeholder="Email" name="mail" id="mail" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" name="password" id="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success" value="Se connecter">Sign in</button>
          </form>
        </div>
    </nav>

    <!-- Corps du site -->
    <div class="jumbotron">
      <div class="container">
        <h1>Présentation</h1>
        <p><br>Ce site est un projet réalisé en cours de programmation.<br>
        Il m'a permis d'obtenir des bases en programmation Web comme le html, css, javacript et en php.<br>
        Ce site va vous permetre, de jouer à quelques jeux mais aussi à deposer des commentaires grâce à un systeme d'authentification.<br>
    <br><br><br><br><br></p>
      </div>
    </div>

    <!-- Pied de Page -->
    <div class="container">
      <footer>
        <p>&copy; Raphael MAURY Company 2015</p>
      </footer>
    </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  
</body>
</html>