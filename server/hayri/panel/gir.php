<?php 
		if ($_POST){   //Post ile veriyollandı ise aşağıdaki 
		$ka = htmlentities(@$_POST["kadi"], ENT_QUOTES, 'UTF-8');  //Kadı ile gönderilen veriyi html etiketlerini temizleyip aldık
		$ksifrem = htmlentities($_POST["sifre"], ENT_QUOTES, 'UTF-8'); //şifre ile gönderilen veriyi html etiketlerini temizleyip aldık
		$ksifre = sha1($ksifrem);  //Şifreyi "sha1" ile şifreliyoruz
		if (!$kadi || !$sifre ){ // "kadi" ve "sifre" değişkenlerinin boşolup olmadığını kontrol ediyoruz
		$query = $db->prepare("SELECT * FROM uyeler WHERE kadi=? and ksifi=?"); //Üyeler tablosunda "kadi" ve "ksifi" tablolarında eşleşen varmı kontrol ediyoruz
        $query->execute(array($ka, $ksifre));
		$islem = $query->fetch();
		if($islem){ //İşlem başarılı ise
			$_SESSION['kad'] = $islem['kadi']; //"kad" sesisionuna kullanıcı adını atıyoruz
            $_SESSION['ksifre'] = $islem['ksifi']; //"ksifre" sesisionuna şifreyi  atıyoruz
			$_SESSION['yetki'] = $islem['ytki']; //"yetki" sesisionuna yetki seviyesini atıyoruz
			header('location:panel.php'); //Ana sayfaya yolluyoruz
         }else{ //Hatalı ise ekrana hata var yazıyoruz
echo 'Hata var';
		 }
		}
		}
		?>
						<center>
					<form method="POST">
						<div class="form-group">
						  <h1>Kullanıcı Adı</h1>
						  <input class="form-control input-lg" type="text" id="inputLarge" name="kadi">
						</div>
						<div class="form-group">
						  <h1>Kullanıcı şifresi</h1>
						  <input class="form-control input-lg" type="password" id="inputLarge" name="sifre"><br><br>
						  <input type="submit" class="btn btn-primary btn-lg" value="GİRİŞ YAP">
						</div>
					</form>
					<h1><a href="kayit.php">Kayıt Ol</a>
				</center>