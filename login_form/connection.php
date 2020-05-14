<?php

$hostadresi = "localhost";
$kullaniciadi = "root";
$sifre = "";
$veritabani = "e_ticaret_sitesi";

$baglanti = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
echo "MySQL bağlantisi başarısız: " . mysqli_connect_error();
}
?>