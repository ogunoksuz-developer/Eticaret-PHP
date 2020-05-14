<?php
try {
	$db = new PDO("mysql:host=localhost;dbname=e_ticaret_sitesi;charset=utf8", "root", "");

} catch (Exception $e) {
	 print $e->getMessage();
}
$Ayar=$db->query("SELECT * FROM ayarlar")->fetch();


?>