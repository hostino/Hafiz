<?php
error_reporting(0); //Hata mesajlarını gizliyoruz
header('Content-Type: text/html; Charset=UTF-8'); //Dosya türünü veriyoruz
date_default_timezone_set('Europe/Istanbul'); //Zaman konumunu ayarlıyoruz
 try { //Veri tabanı bağlantı kısmı
     $db = new PDO("mysql:host=localhost;dbname=--Database adı --", "-- Kullanıcı adı --", "-- Şifre --");
} catch ( PDOException $e ){
     print $e->getMessage();
}
 $db->query("SET CHARACTER SET uf8");

function cevap($degisken,$alinan){ //Cevap fonksiyonu
$uzun=strlen($degisken)-2; //"degisken" değişkeninin uzunluğunun 2 eksiğini alıyoruz
$degisken2 = substr($degisken, 1, $uzun); //Başındaki süslü parantezi siliyoruz
switch ($degisken2) {
    case "ayni":
        $degisken3 = $alinan; //Aynı yazıyorsa "alınan" değerini ekrana yazdırıyoruz
        break; 
	default:
  jsoncevir("deger",$degisken2); //Değişkeni fonksiyonla yolluyoruz
}
  jsoncevir("deger",ucwords($degisken3)); //Bai harfini büyük yaparak fonksiyona yolluyoruz

}
function jsoncevir($nolcak,$dego){ //"jsoncevir" fonksiyonu
if($dego!= null){ //dego değişkeni boş ise
	  $array = array( //arraya değerleri veriyoruz
    $nolcak => $dego, 
);
$json = json_encode($array); //Arrayı json koduna çeviriyoruz

echo $json; //"Json" değişkenini ekrana yazdırıyoruz
}
}
?>