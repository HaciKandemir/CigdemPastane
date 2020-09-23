<?php include'include/header.php';
include'include/sidebar.php'; 
$mesaj=$veritabani->query("SELECT * FROM mesaj  order by id desc");
if (isset($_GET)) {
    if ($_GET['islem']=='sil') {
        $id=$_GET['id'];
        $mrb=$veritabani->query("DELETE FROM mesaj where id='$id'");
        $mesaj=$veritabani->query("SELECT * FROM mesaj  order by id desc");
    }
}
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">MESAJLAR</h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
        <div class="col-md-12"> 
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            GELEN MESAJLAR
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>AD SOYAD</th>
                                            <th>TELEFON</th>
                                            <th>EPOSTA</th>
                                            <th>SEHİR</th>
                                            <th>İLÇE</th>
                                            <th>DURUM</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while ($deger=$mesaj->fetch(PDO::FETCH_OBJ)) { ?>
                                            <td><?php echo $deger->id; ?></td>
                                            <td><?php echo $deger->adSoyad; ?></td>
                                            <td><?php echo $deger->telefon; ?></td>
                                            <td><?php echo $deger->eposta; ?></td>
                                            <td><?php echo $deger->sehir; ?></td>
                                            <td><?php echo $deger->ilce; ?></td>
                                            <?php if ($deger->durum==0) {echo "<td style='color:red;'>Okunmadı</td>";}else{ echo "<td style='color:green;'>Okundu</td>"; }; ?>
                                            <td><a href="?islem=sil&id=<?php echo $deger->id ?>" class="btn btn-danger">Sil</a></td>

                                            <td><a href="oku.php?id=<?php echo $deger->id ?>" class="btn btn-primary">Oku</a></td>
                                        </tr>
                                    <?php } ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
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