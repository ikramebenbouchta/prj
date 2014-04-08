<?php
class ajout_user{

 function add($nom,$prenom,$login,$pass,$email,$tel){
 if(!empty($nom) && !empty($prenom) && !empty($login) && !empty($pass) && !empty($email) && !empty($tel)){
 $connexion= $_SESSION['connexion'];

$SQL='INSERT INTO user  VALUES("","'.mysql_real_escape_string($nom).'","'.mysql_real_escape_string($prenom).'","'.mysql_real_escape_string($login).'",
"'.mysql_real_escape_string($pass).'","'.mysql_real_escape_string($email).'","'.mysql_real_escape_string($tel).'","user")';
$request=mysql_query($SQL,$connexion)or die (mysql_error());

$msg='un compte  ajouté ';
echo '<script type="text/javascript">window.alert("'.$msg.'");</script>';}

else{
$mg='tous les champs doivent etre rensignés';
echo '<script type="text/javascript">window.alert("'.$mg.'");</script>';}
 }
 
}
?>