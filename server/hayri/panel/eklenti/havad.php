<?php
error_reporting(0);
header('Content-Type: text/html; Charset=UTF-8');
@$veri = htmlentities(trim(strtolower($_GET['grd'])), ENT_QUOTES, 'UTF-8'); //kullanıcıdan girdiyi aldık
$dizi = array("hava","durum","havalar","nasıl","durumu"); //Aranacak kelimeler
$verib = explode(",",$veri);  //veriyi böldük
$minu = 2; //Minimum değeri belirledik
$veric = count($verib)-1; //değer sayısı
$s=0;
for ($i = 0; $i <= $veric; $i++) { //Arraydaki her veri için döngü kuruyoruz
if (in_array($verib[$i],$dizi)) { //Arrayda veri varmı kontrol ediyoruz 
$s =$s+1; //s değerine 1 daha ekliyoruz
}
	
}


if($s>=$minu){	//s minimuma eşitse 
   $sehir=$verib[0]; //Şheri arayalıyoruz
   @$sget=file_get_contents("http://eminkose.com/hayri/panel/eklenti/havad-bot.php?sehir=".$sehir); //Bota veriyi yolluyoruz
echo $sget; //Veriyi yolluyoruz
}


?>