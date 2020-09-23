<?php include'include/header.php';
include'include/sidebar.php'; 
$iletisim=$veritabani->query("SELECT * FROM iletisim WHERE id=1")->fetch(PDO::FETCH_OBJ);
if ($iletisim) {
	if (isset($_POST['yolla'])) {
	    $adres=$_POST['adres'];
	    $maps=$_POST['maps'];
	    $tel=$_POST['tel'];
	    $güncelle=$veritabani->query("UPDATE iletisim SET adres='$adres', maps='$maps',telefon='$tel' where id=1");
	    $iletisim=$veritabani->query("SELECT * FROM iletisim WHERE id=1")->fetch(PDO::FETCH_OBJ);
	}
}
else if(isset($_POST['yolla'])){
	$adres=$_POST['adres'];
	$maps=$_POST['maps'];
	$tel=$_POST['tel'];
	$güncelle=$veritabani->query("INSERT INTO iletisim SET adres='$adres', maps='$maps',telefon='$tel'");
	$iletisim=$veritabani->query("SELECT * FROM iletisim WHERE id=1")->fetch(PDO::FETCH_OBJ);
}
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">İletişim Düzenle</h1>
                <?php if ($güncelle) {
                echo'<h1 class="page-subhead-line">Kaydedildi. </h1>';
                } ?>
                

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                   <div class="panel panel-info">
                    <div class="panel-heading">
                     Düzenle
                 </div>
                 <div class="panel-body">
                    <form role="form">
                        <div class="form-group">
                            <label>Adres</label>
                            <input class="form-control" name="adres" value="<?php echo$iletisim->adres ?>" type="text">
                        </div>
                        <div class="form-group">
                           <label>Google Maps</label>
                            <input class="form-control" name="maps" value="<?php echo$iletisim->maps ?>" type="text">
                        </div>
                        <div class="form-group">
                           <label>Telefon</label>
                            <input class="form-control" name="tel" value="<?php echo$iletisim->telefon ?>" type="text">
                        </div>
                        <button type="submit" name="yolla" class="btn btn-info">Kaydet </button>

                    </form>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<?php include'include/footer.php'; ?>