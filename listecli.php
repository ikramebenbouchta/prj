<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>Tasty Foods</title>
<link rel="stylesheet" href="style/style.css" type="text/css">
<link rel="icon" type="image/png" href="img/icon.jpg" /> 
</head>
<body bgcolor="#fbefc5">
<center>
  <table width="960" border="0" bgcolor="#FFFFFF">
    <tr > 
      <td width="300" height="118" class="mg"><img src="img/lgggg.png"/></td>
      <td  bgcolor="#f94da6" align="right" class="tr" >
	  <table width="377" height="102">
	  <tr>
	  <td align="right"><a href="http://www.facebook.com/TastyFoods"><img src="img/facebook.png" class="img"/></a>&nbsp;&nbsp;&nbsp;<a href="http://www.twitter.com/Tastyfoods"><img src="img/twitter.png" class="img"/></a>&nbsp;&nbsp;&nbsp;
	  <a href="https://plus.google.com/u/0/113605632065356045124"><img src="img/gplus.png" class="img"/></a>&nbsp;&nbsp;&nbsp;<a href=""><img src="img/rss.png" class="img"/></a>&nbsp;&nbsp;&nbsp;
	  <a href="http://in.linkedin.com/in/Tastyfoods"><img src="img/in.png" class="img"/>&nbsp;&nbsp;&nbsp;</a></td>
	  </tr><tr>
	  <td align="right"><ul id="menu" class="topmenu" >
	            <li class="topfirst" ><a href="accueil.html" style="width:44px;height:16px;line-height:16px;">Accueil</a></li>
	            <li class="topmenu"><a href="recette.php" style="width:52px;height:16px;line-height:16px;"><span>Recettes</span></a> 
                  <ul>
                    <li class="subfirst"><a href="plats.php">Plats</a></li>
                    <li><a href="salade.php">Salades</a></li>
                  </ul>
                </li>
	            <li class="topmenu"><a href="categorie.php" style="height:16px;line-height:16px; "><span>Catégories</span></a> 
                  <ul>
                    <li class="subfirst"><a href="#">Marocaine</a></li>
                  </ul>
                </li>
	            <li class="topmenu" ><a href="forum.html" style="width:45px;height:16px;line-height:16px;">Forums</a></li>
	            <li class="toplast"><a href="contact.html" style="width:45px;height:16px;line-height:16px;">Contact</a></li>
</ul></td>
	  </tr>
	  </table></td>
    </tr>
 
    </table > 
      <br/>
  <table bgcolor="#FFFFFF" width="960">
    
    <tr> 
      <td align="center"><br/> <form method="post" action="">
          <input type="text" name="search"/>
          <input name="submit" type="submit" class="bluee"value="Rechercher"/>
        </form>
        &nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td width="136" ><a href="accueil.html">Deconnexion</a></td>
    </tr>
    <tr> 
      <td align="center" height="400" width="480" colspan="2"><font face="Freestyle Script" size="9">Listes des clients :</font><hr width="800" style="border-color:#666666;"/>
	  <?php 
session_start();
require("database.php");
$cnx=$_SESSION['connexion'];

$reponses ='SELECT * FROM user Where statut <>"Admin"  ';
$reqst=mysql_query($reponses,$cnx)or die (mysql_error());
$total = mysql_num_rows($reqst);
if($total){
 echo"<center>";
 echo '<table bgcolor="#f1d878" width="800">'."\n";
        echo '<tr align="center">';
        echo '<td color="#ffffff"><b>Nom</b></td>';
        echo '<td><b>prenom</b></td>';
        echo '<td ><b>login</b></td>';
        echo '<td><b>password</b></td>';
        echo '<td><b>email</b></td>' ;
	    echo '<td ><b>telephone</b></td>' ;
        echo '</tr>'."\n";
while ($donnees = mysql_fetch_array($reqst)) 
{       
        echo '<tr bgcolor="#FFFFFF" align="center">';
        echo '<td >'.$donnees["nom"].'</td>';
        echo '<td >'.$donnees["prenom"].'</td>';
        echo '<td >'.$donnees["login"].'</td>';
        echo '<td>'.$donnees["password"].'</td>';
        echo '<td >'.$donnees["email"].'</td>';
	    echo '<td >'.$donnees["tel"].'</td>';
        echo '</tr>'."\n";
    }
echo '</table>'."\n";
echo"</center>";}
else {echo"Pas d\'enregistrements dans cette table...";}
echo'<center><a href="listclient.php">téléchrger la liste des Clients</a></center>';
 
?>
	  </td>
    </tr>
    <tr bgcolor="#3e3742"> 
      <td height="80" colspan="2" align="center"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Copyright 
        &copy; 2014, <br>
        Developed by </font><a href="" >Benbouchta ikrame.</a></td>
    </tr>
  </table>
</center>
</body>
</html>
