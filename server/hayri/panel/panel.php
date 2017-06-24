<?php
error_reporting(E_ALL ^ E_NOTICE);//Hata mesajlarını gizliyoruz
ini_set('error_reporting', E_ALL ^ E_NOTICE);//Hata mesajlarını gizliyoruz

include_once 'sistem.php';//Sistem php çağırıyoruz

session_start();//sesionu başlatıyoruz

$kadirsorgi = $_SESSION['kad']; //"Kad" seisonunu değerini alıyoruz
$query = $db->prepare("SELECT * FROM uyeler WHERE kadi= ?"); //Kullanıcı adını veri tabanında arıyoruz
$query->execute(array($kadirsorgi));
$islem = $query->fetch();
		if($islem){//İşlem başarılı ise
			$knick = $islem['kadi']; //"knick" kullanıcı adı
			$kyetkiniz = $islem['ytki']; //"kyetkiniz" Kullanıcı yetkisi
			$kadiniz = $islem['adi']; //"kadiniz" Adınız
			$kepostaniz = $islem['eposta']; //"kepostaniz" E posta adınız
			$presim = $islem['resim']; //"presim" Profil resminin adresi
         }

?>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EKpanel</title>
    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="panel.php" class="logo"><b>EKpanel</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="cik.php">ÇIKIŞ</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><img src="<?php echo $presim; ?>" class="img-circle" width="60"></p>
              	  <h5 class="centered"><?php echo $kadiniz; ?></h5>
              	  	
                  <li class="mt">
                      <a href="panel.php?sayfa=veri_liste">
                          <i class="fa fa-dashboard"></i>
                          <span>Anasayfa</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="panel.php?sayfa=veri_liste">
                          <i class="glyphicon glyphicon-wrench"></i>
                          <span>Veri liste</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="panel.php?sayfa=veri_ekle">
                          <i class="glyphicon glyphicon-wrench"></i>
                          <span>Veri Ekle</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	  		 <section id="main-content">
          <section class="wrapper site-min-height">
		  <div class="col-lg-12">
		<?php 
			
			$sayfa = htmlentities($_GET["sayfa"], ENT_QUOTES, 'UTF-8'); //"sayfa" değerini alıyoruz
			switch($sayfa){
				case "veri_liste";
				include_once "veriliste.php";
				break;
			
				case "veri_sil";
				include_once "verisil.php";
				break;
 
                case "veri_duzen";
				include_once "veriduzen.php";
				break;
				
                case "veri_ekle";
				include_once "veriekle.php";
				break;
			 }
?>
</div>
			</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();	  
	  });
  </script>

  </body>
</html>