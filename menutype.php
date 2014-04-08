<?php 
$_SESSION['connexion']="";
$host="localhost";
$username="root";
$password="";
$db_name="bdtasty";
$cnx=mysql_connect("localhost","root","")or die("connot conect");
mysql_select_db("bdtasty")or die("cannot select");
mysql_query("SET NAMES 'utf8'");
$sql='SELECT nom_type FROM types';
$rqt=mysql_query($sql,$cnx)or die (mysql_error());
while ($ligne=mysql_fetch_array($rqt))
{echo '<option>'.$ligne["nom_type"].'</option>';}
?>