<table class="table table-striped table-hover ">
<tbody> 
<?php 
$query = $db->query("SELECT * FROM kelime order by id DESC", PDO::FETCH_ASSOC); //Verileri çekiyoruz ve listeliyoruz
if ( $query->rowCount() ){
     foreach( $query as $row ){
?>
<tr class="success">
<td><?php echo $row['kelime']; ?></td>
<td>
<div class="btn-group">
<button type="button" class="btn btn-theme04 dropdown-toggle" data-toggle="dropdown">
İşlem <span class="caret"></span>
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuDivider">
<li><a href="panel.php?sayfa=veri_duzen&id=<?php echo $row['id']; ?>">Düzenle</a></li>
<li><a href="panel.php?sayfa=veri_sil&id=<?php echo $row['id']; ?>">Sil</a></li>
</ul>
</div>
</td>
</tr>
<?php
}
}
?>
</tbody>
</table> 
