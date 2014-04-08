<?php
include"classrec.php";session_start();
 $host="localhost";
 $username="root";
 $password="";
 $db_name="bdtasty";
 $tbl_name="recettes";
 $connexion=mysql_connect("localhost","root","")or die("connot conect");
            mysql_select_db("bdtasty")or die("cannot select");
			$_SESSION['connexion']=$connexion;
$rec=new recettes();
$nom=$_POST['nom_rec'];
$temp=$_POST['time'];
$cout=$_POST['cout'];
$diff=$_POST['diffuclte'];
$type=$_POST['type'];
$cat=$_POST['cat'];
$desc=$_POST['description'];
	
$dossier = 'recette/';
$fichier = basename($_FILES['image']['name']);
$taille_maxi = 100000;
$taille = filesize($_FILES['image']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['image']['name'], '.'); 

//Dιbut des vιrifications de sιcuritι...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ΐΑΒΓΔΕΗΘΙΚΛΜΝΞΟÒΣΤΥΦΩΪΫάέΰαβγδεηθικλμνξοπςστυφωϊϋόύÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ηa a fonctionnι...
     {
          echo 'Upload effectuι avec succθs  !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
else
{
     echo $erreur;
}

$rec->get_rec($nom,$temp,$cout,$diff,$desc,$fichier,$type,$cat);	
?>