<?php
class recettes{

 function get_rec($nom,$temp,$cout,$diffuclte,$descr,$image,$type,$cat){


   if(!empty($nom) && !empty($temp) && !empty($cout) && !empty($diffuclte)&& !empty($descr)&&  !empty($image)&& !empty($type)&& !empty($cat)){
    $connexion= $_SESSION['connexion'];
	$SQL='SELECT id_type From types where nom_type="'.mysql_real_escape_string($type).'"';
    $request=mysql_query($SQL,$connexion)or die (mysql_error());
	$ligne=mysql_fetch_array($request);
	$SQLL='SELECT id_user From user where statut="Admin"';
    $requestt=mysql_query($SQLL,$connexion)or die (mysql_error());
	$lignee=mysql_fetch_array($requestt);
	$SQLs='SELECT id_categorie From categories where nom_cat="'.mysql_real_escape_string($cat).'"';
    $requesttt=mysql_query($SQLs,$connexion)or die (mysql_error());
	$lignes=mysql_fetch_array($requesttt);
	$Rq='INSERT INTO recettes VALUES("","'.mysql_real_escape_string($nom).'","'.mysql_real_escape_string($temp).'","'.mysql_real_escape_string($cout).'","'.mysql_real_escape_string($diffuclte).'","'.mysql_real_escape_string($descr).'",
	"recette/'.mysql_real_escape_string($image).'","'.mysql_real_escape_string($lignee["id_user"]).'","'.mysql_real_escape_string($lignes["id_categorie"]).'","'.mysql_real_escape_string($ligne["id_type"]).'")';
    $reqst=mysql_query($Rq,$connexion)or die (mysql_error());
    
    echo"recettes ajoutée";
    }
  else{
     echo"tous les champs doivent etre renseignés";
      }
   
   
   
   }
   
   
   
   }
?>