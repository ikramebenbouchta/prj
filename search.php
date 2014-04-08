<?php
	 if(isset($_POST['search'])){
    $CODEPROD=$_POST['search'];
	require("database.php");
$cnx=$_SESSION['connexion'];
	$rq='select * from recettes where nom_rec="*'.mysql_real_escape_string($CODEPROD).'*"';
	$resultat=mysql_query($rq,$cnx)or die (mysql_error());
$ligne=mysql_fetch_array($resultat);
$nb=mysql_num_rows($resultat);
$i=0;
       while($i<$nb)
          {
   $nom=$ligne['nom_rec'];
   $prenom=$ligne['description'];
   $tel=$ligne['cout'];
 echo $nom.' '.$prenom.' '.$tel;
$i=$i+1;
          }
}
                
//valeur par défaut à l'arrivée
                
else{
    $CODEPROD="choisir";
}

	

?>

  