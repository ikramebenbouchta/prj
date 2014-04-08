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
          <input  type="submit" class="bluee"value="Rechercher"/>
        </form>
        &nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td width="136" ></td>
    </tr>
    <tr> 
      <td align="center" height="400" width="480" colspan="2"><font face="Freestyle Script" size="9">Tous les recettes :</font><hr width="800" style="border-color:#666666;"/>
	  <?php 
session_start();
require("database.php");
$cnx=$_SESSION['connexion'];

$reponses ='SELECT image,nom_rec,time,cout,diffuclte,description,nom,prenom,statut,nom_type,nom_cat FROM recettes, types, user, categories WHERE
 recettes.id_user=user.id_user AND recettes.id_type=types.id_type AND recettes.id_categorie=categories.id_categorie AND categories.nom_cat="marocaine"'; 
$reqst=mysql_query($reponses,$cnx)or die (mysql_error());
$total = mysql_num_rows($reqst);

if($total){
 echo"<center>";
 echo '<table bgcolor="#f1d878" width="840">'."\n";
        echo '<tr align="center">';
        echo '<td color="#ffffff"><b>Image</b></td>';
        echo '<td><b>Nom recette</b></td>';
        echo '<td ><b>Temp</b></td>';
        echo '<td><b>Cout</b></td>';
        echo '<td><b>diffuclte</b></td>' ;
	    echo '<td ><b>description</b></td>' ;
	    echo '<td><b>Deposé par</b></td>' ;
		 echo '<td><b>Type du recette</b></td>' ;
		 echo '<td><b>Categorie</b></td>' ;
        echo '</tr>'."\n";
while ($donnees = mysql_fetch_array($reqst)) 
{       
        echo '<tr bgcolor="#FFFFFF" align="center">';
        echo '<td ><img src="'.$donnees["image"].'" alt="image de recette"  width="80" height="60"/></td>';
        echo '<td >'.$donnees["nom_rec"].'</td>';
        echo '<td >'.$donnees["time"].'</td>';
        echo '<td>'.$donnees["cout"].'</td>';
        echo '<td >'.$donnees["diffuclte"].'</td>';
	    echo '<td >'.$donnees["description"].'</td>';
	    echo '<td >'.$donnees["nom"]." ".$donnees["prenom"].', <font color="#f94da6"> '.$donnees["statut"].'</font></td>';
		echo '<td >'.$donnees["nom_type"].'</td>';
		echo '<td >'.$donnees["nom_cat"].'</td>';
		 echo '</tr>'."\n";
		
    }
echo '</table>'."\n";
echo"</center>";}
else {echo"Pas d\'enregistrements dans cette table...";}
 
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
