<?php
 $host="localhost";
 $username="root";
 $password="";
 $db_name="bdtasty";
 $tbl_name="user";
 $connexion=mysql_connect("localhost","root","")or die("connot conect");
            mysql_select_db("bdtasty")or die("cannot select");
			$_SESSION['connexion']=$connexion;
?>