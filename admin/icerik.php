<?php include'include/header.php';
include'include/sidebar.php'; 
$icerikler=$veritabani->query("SELECT * FROM blog order by id desc");
if (isset($_GET)) {
    if ($_GET['islem']=='sil') {
        $id=$_GET['id'];
       	unlink('../img/blog/'.$_GET['img']);
        $veritabani->query("DELETE FROM blog where id='$id'");
        $icerikler=$veritabani->query("SELECT * FROM blog  order by id desc");
    }
}
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">İçerikler</h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12"> 
              <!--   Kitchen Sink -->
              <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                            	<th>İçerik Resim</th>
                                <th style="width: 150px;">İçerik Başlık</th>
                                <th>İçerik Metin</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($icerik=$icerikler->fetch(PDO::FETCH_OBJ)) { ?>
                                <tr>
                                	<td ><img  style="width: 120px; height: 80px;"  src=../img/blog/<?php echo $icerik->resim; ?>></td>
                                    <td><?php echo $icerik->baslik; ?></td>  
                                    <td><?php $pos=strpos($icerik->metin, ' ', 250);
                                        echo nl2br(substr($icerik->metin,0,$pos ));   ?>...</td>
                                    <td><a href="?islem=sil&id=<?php echo $icerik->id ?>&img=<?=$icerik->resim?>" class="btn btn-danger">Sil</a></td>
                                    <td><a href="icerikekle.php?islem=guncelle&id=<?php echo $icerik->id ?>" class="btn btn-primary">Düzenle</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <a href="icerikekle.php" class="btn btn-primary">İçerik Ekle</a>
                    </div>
                </div>

                <!-- End  Kitchen Sink -->
            </div>
        </div>

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<?php include'include/footer.php'; ?>