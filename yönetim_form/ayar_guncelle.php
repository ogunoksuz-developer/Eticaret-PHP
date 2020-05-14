<?php 
include("../connection.php");

if (isset($_POST['ayar_baslik']) ) {
	$guncelle=$db->prepare("UPDATE ayarlar SET
    ayar_instegram=:ayar_instegram,
    ayar_facebook=:ayar_facebook,
    ayar_twitter=:ayar_twitter,
    ayar_youtube=:ayar_youtube,
    ayar_mailsunucu=:ayar_mailsunucu,
    ayar_port=:ayar_port,
    ayar_mailadres=:ayar_mailadres,
    ayar_mailsifre=:ayar_mailsifre,
    ayar_baslik=:ayar_baslik,
    ayar_aciklama=:ayar_aciklama,
    ayar_anahtar=:ayar_anahtar
    WHERE id=1"
	);

$Durum=$guncelle->execute(
array(
'ayar_instegram'=>$_POST['ayar_instegram'],
'ayar_facebook'=>$_POST['ayar_facebook'],
'ayar_twitter'=>$_POST['ayar_twitter'],
'ayar_youtube'=>$_POST['ayar_youtube'],
'ayar_mailsunucu'=>$_POST['ayar_mailsunucu'],
'ayar_port'=>$_POST['ayar_port'],
'ayar_mailadres'=>$_POST['ayar_mailadres'],
'ayar_mailsifre'=>$_POST['ayar_mailsifre'],
'ayar_baslik'=>$_POST['ayar_baslik'],
'ayar_aciklama'=>$_POST['ayar_aciklama'],
'ayar_anahtar'=>$_POST['ayar_anahtar']
)
	);

	header("location:ayar.php?Durum=$Durum");
}
?>