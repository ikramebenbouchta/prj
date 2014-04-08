<?php
session_start();
class user
{
function auth($login,$pass)
{






if(!empty($login) && !empty($pass))
		{
			$connexion=$_SESSION['connexion'];
			print_r($_SESSION);
            $SQL='SELECT * FROM user WHERE login="'.mysql_real_escape_string($login).'" AND password="'.mysql_real_escape_string($pass).'"';
			$request=mysql_query($SQL,$connexion)or die (mysql_error());
			$data=mysql_fetch_assoc($request);

			if(empty($data) || !sizeof($data)){echo "Login,password non valide ";}
				elseif($data['statut']=="Admin"){
										header('location:/prj%20phph/page_admin.html');
														}
				else{
										header('location:/prj%20phph/page_user.html');
					}
		}
else{
$message='saisir les champs';

echo '<script type="text/javascript">window.alert("'.$message.'");</script>';;
	}
}
}
?>