<?php
$id = htmlentities($_GET['id'], ENT_QUOTES, 'UTF-8'); //"id" değişkenini ekrana yazdırıyoruz
$query = $db->query("SELECT * FROM kelime WHERE id = '{$id}'", PDO::FETCH_ASSOC);  //Kelime tablosunda idyi arıyoruz
if ( $query->rowCount() ){ 
     foreach( $query as $row ){ //Tüm verileri döngüye sokuyoruz
$veri = $row['kelime']; //veri değişkenine kelimeyi alıyoruz
$karsilik = $row['karsilik']; //karsilik değişkenine karsiligı alıyoruz
$min = $row['min']; //min değerini alıyoruz

 } 
} 
?>
<div class="showback">
		<form class="form-horizontal" method="POST">
		  <fieldset>
			<legend>Veri düzenle</legend>
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">Veri:</label>
			  <div class="col-lg-10">
				<input type="text" class="form-control" name="veri" value="<?php echo $veri; ?>">
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">Karşılık:</label>
			  <div class="col-lg-10">
				<input type="text" class="form-control" name="karsilik" value="<?php echo $karsilik; ?>">
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">Minimum:</label>
			  <div class="col-lg-10">
				<input type="text" class="form-control" name="min" value="<?php echo $min; ?>">
			  </div>
			</div>
			<div class="form-group">
			  <div class="col-lg-10 col-lg-offset-2">
				<button type="submit" class="btn btn-primary">Kaydet</button>
			  </div>
			</div>			
		  </fieldset>
		</form>
</div>
<?php 
if ($_POST){   //Post edilmişse
$veri2 = htmlentities($_POST['veri'], ENT_QUOTES, 'UTF-8'); //Veriyi "veri2" değişkenine aldık
$karsilik2 = htmlentities($_POST['karsilik'], ENT_QUOTES, 'UTF-8'); //karsilik değişkenini "karsilik2" aldık
$min2 = htmlentities($_POST['min'], ENT_QUOTES, 'UTF-8'); //min değişkenini "min2" aldık
    if (!$veri2){ //Veri2 boşsa hata veriyoruz
print '<div class="alert alert-dismissable alert-warning"> 
<button type="button" class="close" data-dismiss="alert">×</button> 
<h4>Warning!</h4><p>Boş alan bırakma</p></div>'; 
    }else { //Hata yoksa
                                //değerleri gönderip güncelliyoruz
   $query = $db->prepare("UPDATE kelime SET  
min = ?,
kelime = ?,
karsilik = ?
WHERE id=?
"); 
$insert = $query->execute(array( 
    "$min2", "$veri2", "$karsilik2", "$id"
)); 
if ( $insert ){  //İşlem başarılı ise başarılı değilse başarısız yazıyoruz
    $last_id = $db->lastInsertId(); 
   print '<div class="alert alert-dismissable alert-success"> 
<button type="button" class="close" data-dismiss="alert">×</button> 
<strong>BAŞARILI!</strong> Düzenleme tamam :) 
</div>'; 
  
}else { 
   print '<div class="alert alert-dismissable alert-warning"> 
<button type="button" class="close" data-dismiss="alert">×</button> 
<h4>Warning!</h4><p>Hata var....</p></div>'; 
} 
} 
} 
?>