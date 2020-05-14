<?php 
session_start();
include("../connection.php");

$kadi=$_POST['kadi'];
$sifre=$_POST['sifre'];

$query  = $db->query("SELECT * FROM login_form WHERE Mail='$kadi' and Sifre='$sifre'",PDO::FETCH_ASSOC);
		if ( $say = $query -> rowCount() ){

			if( $say > 0 ){
				session_start();
				$_SESSION['oturum']=true;
				$_SESSION['kadi']=$kadi;
				$_SESSION['sifre']=$sifre;
				
				header("location: ../yönetim_form/index.php"); 
			}
		}
 ?>