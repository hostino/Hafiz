<?php
if ($_POST){ //Post edilmişse
$veri = htmlentities($_POST['veri'], ENT_QUOTES, 'UTF-8'); //veri değişkenine değeri atıyoruz
$karsilik = htmlentities($_POST['karsilik'], ENT_QUOTES, 'UTF-8'); //karsilik değişkenine değeri atıyoruz
$min = htmlentities($_POST['min'], ENT_QUOTES, 'UTF-8'); //Minimuma veriyi atıyoruz
if (!$min){ //Minimum boş ise 1 değerini atıyoruz
$min =1;	
}
if (!$veri || !$karsilik){ //veri ile karsilik değişkenini boşmu diye kontrol ediyoruz
print '<div class="alert alert-dismissable alert-warning">
<button type="button" class="close" data-dismiss="alert">×</button>
<h4>Warning!</h4><p>Boş alan bırakma</p>
</div>';
    }else {//Verileri giriyoruz
$query = $db->prepare("INSERT INTO kelime SET 
min = ?,
kelime = ?,
karsilik = ?
");
$insert = $query->execute(array(
    "$min", "$veri", "$karsilik"
));
if ( $insert ){ //;Girdi işlemi başarılımı değilmi kontrol ediyoruz
   print '<div class="alert alert-dismissable alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>BAŞARILI!</strong> Veri eklendi :)
</div>';
}else {
   print '<div class="alert alert-dismissable alert-warning">
<button type="button" class="close" data-dismiss="alert">×</button>
<h4>Warning!</h4><p>Veri eklenemedi...</p></div>';
}
}
}
?>
	<div class="showback">
		<form class="form-horizontal" method="POST">
		  <fieldset>
			<legend>Veri ekle</legend>
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">Veri:</label>
			  <div class="col-lg-10">
				<input type="text" class="form-control" name="veri" >
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">karşılık:</label>
			  <div class="col-lg-10">
				<input type="text" class="form-control" name="karsilik" >
			  </div>
			</div>	
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">Minimum:</label>
			  <div class="col-lg-10">
				<input type="text" class="form-control" name="min" >
			  </div>
			</div>				
			<div class="form-group">
			  <div class="col-lg-10 col-lg-offset-2">
				<button type="submit" class="btn btn-primary">Veri Ekle</button>
			  </div>
			</div>			
		  </fieldset>
		</form>	
		</div>	