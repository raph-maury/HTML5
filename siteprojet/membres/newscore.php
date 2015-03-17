 <?php

    require('../config.php');
    session_start();
    $id = $_SESSION["id"];
    $score = $_POST["score"];
    $nom = $_POST["nom"];



    $req = "REPLACE INTO `score`(`id_compte`, `nom_jeux`, `score`) VALUES ($id,'$nom',$score)";
    

    echo $req;
        
    mysql_query($req);

?>