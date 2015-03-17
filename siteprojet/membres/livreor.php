<?php

    require('../config.php');
    session_start();
    $user = $_SESSION["Login"];
    $message = $_POST["message"];
    
    $req = "INSERT INTO `livreor`(`user`, `message`) VALUES ('$user','$message')";
    
    //echo $req;
        
    mysql_query($req);
    
    header('Location: index.php');
?>