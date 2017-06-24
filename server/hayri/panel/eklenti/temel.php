<?php
date_default_timezone_set('Europe/Istanbul'); //Zamanı isambula göre ayarladık
setlocale(LC_TIME, 'tr_TR.UTF-8');
@$veri = htmlentities(trim(strtolower($_GET['grd'])), ENT_QUOTES, 'UTF-8'); //kullanıcıdan girdiyi aldık

    if(strcmp($veri,"saat")==0){ //Kullanıcı saat girdiyse
        echo "Saat: ".date('H:i');
	}
    if(strcmp($veri,"tarih")==0){ //Kullanıcı tarih girdiyse
        echo "Tarih: ".date("m.d.y"); 
	}
    if(strcmp($veri,"dolar")==0){ //Kullanıcı dolar girdiyse
	@$contents = file_get_contents('http://www.doviz.gen.tr/doviz_json.asp'); 
$data = json_decode($contents);
        echo "Dolar:".$data->dolar; //Doları yazdırıyoruz
	}
    if(strcmp($veri,"euro")==0){
	@$contents = file_get_contents('http://www.doviz.gen.tr/doviz_json.asp'); 
$data = json_decode($contents);
        echo "Euro: ".$data->euro; //Euro yazdırıyoruz
	}
    if(strcmp($veri,"altın")==0){
@$contents = file_get_contents('https://api.doviz.com/list/G'); 
$data = json_decode($contents);
        echo "Altın gram alış: ".$data->value[3]->alis ." Altın gram satış: ".$data->value[3]->satis; //Altın alış satış bilgileri yazdırıyoruz
	}


?>