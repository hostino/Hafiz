<?php

$veri = htmlentities(ucwords(strtolower($_GET['sehir'])), ENT_QUOTES, 'UTF-8'); //kullanıcıdan girdiyi aldık

@$contents = file_get_contents('http://api.apixu.com/v1/current.json?key=c7c290927ed74d8090270018172803&lang=tr&q='.$veri); //apiye veriyi yolladık

$data = json_decode($contents);

echo "Sıcaklık: ";
echo $data->current->temp_c; //Sıcaklığı yazdık
echo " ";
echo "Durum:";
echo $data->current->condition->text; //Durumu yazdık



?>