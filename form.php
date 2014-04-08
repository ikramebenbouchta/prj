<?php
include"user.php";
include"database.php";
$u=new user();
$login=$_POST['login'];
$pass=$_POST['pass'];
$statut=$_POST['statut'];
$u->auth($login,$pass,$statut);

?>
