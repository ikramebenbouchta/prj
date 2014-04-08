<?php
session_start();
require"classuser.php";
require "database.php";
$user=new ajout_user();

$login=$_POST['login'];
$pass=$_POST['password'];
$tel=$_POST['tel'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$password=$_POST['cpass'];
$email=$_POST['email'];
if($pass==$password){
$user->add($nom,$prenom,$login,$pass,$email,$tel);}
else{
echo "les deux mot de passe ne sont pas identique";}
?>