<?php
session_start();
include("database.php");
$cnx=$_SESSION['connexion'];
	if(isset($_POST["delete"])){
	$repses ='DELETE FROM recettes WHERE nom_rec="'.mysql_real_escape_string($_SESSION['nom_rec']).'"'; 
$reqt=mysql_query($repses,$cnx)or die (mysql_error());
echo '<p>La Supression à été effectué avec succès.</p>';
	}



?>