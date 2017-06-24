<?php
error_reporting(E_ALL ^ E_NOTICE);  //Hata mesajlarını gizliyoruz
ini_set('error_reporting', E_ALL ^ E_NOTICE); //Hata mesajlarını gizliyoruz

include_once 'sistem.php'; //Sistem php çağırıyoruz

session_start(); //sesionu başlatıyoruz
?>
<!DOCTYPE html>
<html lang="TR">
  <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>EKPANEL !</title>

    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

	<?php		
		if(isset($_SESSION['kad'])){ //"Kad" sesionu var mı kontrol ediyoruz
			
        header('location:panel.php?sayfa=veri_liste'); //Kullanıcıyı veri listeleme sayfasına gönderiyoruz
			
		}else{ //Hata var ise
			
			include_once 'gir.php'; //Giriş sayfasına yolladık
			
		}
		?>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>