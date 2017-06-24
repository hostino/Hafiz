<?php
header("Access-Control-Allow-Origin: *"); //json olarak algýlamasý için gerekli

include_once 'sistem.php'; //sistem.php dosyasýný çaðýrýyoruz

@$veri = htmlentities(strtolower($_GET['grd']), ENT_QUOTES, 'UTF-8'); //kullanýcýdan girdiyi aldýk

$query = $db->query("SELECT * FROM kelime", PDO::FETCH_ASSOC);  //"Kelime" tablosu içeriðini çaðýrýyoruz
     $s=0; //s deðiþkenini sýfýrlýyoruz
     foreach( $query as $row ){  //Veri sayýsý kadar döngü oluþturuyoruz
	 $kelime = $row['kelime'];   //Kelime deðiþkenine ilk veriyi atadýk
	 
    if(strcmp($veri,$kelime)==0){ //Verimiz ile kelime deðiþkeni birebir mi kontrol ettik
     $karsi = $row['karsilik']; //Kelime karþýlýk gelen cevap "karþý" deðiþkenine atadýk
     cevap($karsi,$veri);  //Cevap fonksiyonuna veriyi iþlemesi için yolladýk
	 $s=2; //"s" deðiþkenini 2 deðerini atadýk
     }
	 }
	 if($s<1){ //S deðiþkeni 1'in altýndaysa aþaðýdaki kodlarý çalýþtýrýyoruz
      @$bget=file_get_contents("-site adresi-/hayri/panel/eklenti/havad.php?grd=".$veri); //Hava durumu eklentisi
      jsoncevir("deger",$bget); //Cevabýmýzý "jsoncevir" fonksiyonuna gönderdik
	  @$cget=file_get_contents("-site adresi-/hayri/panel/eklenti/replik.php?grd=".$veri); //Replik eklentisi
      jsoncevir("deger",$cget);//Cevabýmýzý "jsoncevir" fonksiyonuna gönderdik
	   @$eget=file_get_contents("-site adresi-/hayri/panel/eklenti/temel.php?grd=".$veri);  // Temel eklentisi
      jsoncevir("deger",$eget);//Cevabýmýzý "jsoncevir" fonksiyonuna gönderdik
	 }
		 


?>
