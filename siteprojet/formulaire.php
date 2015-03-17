<?php

require('config.php');


$login = $_POST['user'];
$motdepasse = $_POST['mp'];
$mail = $_POST['email'];
$connection = 1;
// date du jour
$cdate = date('Y-m-d');

$req = "INSERT INTO projet.utilisateur VALUES ('', '".$login."', '".$motdepasse."', '".$mail."','".$connection."', '".$cdate."')";

//echo $req;


$res = mysql_query($req);	
	if ($res) {
        session_start();
        $_SESSION["Login"]=$login;
        $_SESSION["mp"]=$mp;
        $_SESSION["email"]=$email;
        header('Location: membres/index.php');
	} else {
		echo mysql_error();
	}


?>
