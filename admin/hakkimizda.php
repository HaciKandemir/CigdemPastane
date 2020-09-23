<?php include'include/header.php';
include'include/sidebar.php'; 
$hakkimizda=$veritabani->query("SELECT * FROM hakkimizda WHERE id=1")->fetch(PDO::FETCH_OBJ);
if ($hakkimizda) {
	if (isset($_POST['yolla'])) {
	    $baslik=$_POST['baslik'];
	    $yazi=$_POST['yazi'];
	    $güncelle=$veritabani->query("UPDATE hakkimizda SET baslik='$baslik', yazi='$yazi' where id=1");
	    $hakkimizda=$veritabani->query("SELECT * FROM hakkimizda WHERE id=1")->fetch(PDO::FETCH_OBJ);
	}	
}
else if (isset($_POST['yolla'])) {
	$baslik=$_POST['baslik'];
	$yazi=$_POST['yazi'];
	$güncelle=$veritabani->query("INSERT INTO hakkimizda SET baslik='$baslik', yazi='$yazi'");
	$hakkimizda=$veritabani->query("SELECT * FROM hakkimizda WHERE id=1")->fetch(PDO::FETCH_OBJ);
}
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Hakkımızda Düzenle</h1>
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
                            <label>Başlık</label>
                            <input class="form-control" name="baslik" value="<?php echo$hakkimizda->baslik ?>" type="text">
                        </div>
                        <div class="form-group">
                            <label>Yazı</label>
                            <textarea class="form-control" name="yazi" rows="10"><?php echo$hakkimizda->yazi ?></textarea>
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
