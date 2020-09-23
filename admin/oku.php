<?php include'include/header.php';
include'include/sidebar.php'; 
if (isset($_GET)) {
    if ($_GET['id']) {
        $id=$_GET['id'];
        $sayfa_duzenle_sorgu=$veritabani->query("update mesaj set durum='1' where id='$id'");
        $mesaj=$veritabani->query("SELECT * FROM mesaj  where id='$id'")->fetch(PDO::FETCH_OBJ);        
    }
    if ($_GET['islem']=='sil') {
        $id=$_GET['id'];
        $mrb=$veritabani->query("DELETE FROM mesaj where id='$id'");
        header("location:mesaj.php");
    }
}

?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">MESAJ OKU</h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12"> 
             <!-- BURALAR BENIM ALANIM BASI-->
             <div id="page" class="dashboard">
                <div class="widget box light-grey">
                  <div class="widget-body form">
                     <div class="control-group">
                        <label class="control-label">Gönderen ad soyad</label>
                        <div class="controls">
                          <?=$mesaj->adSoyad?>
                      </div>
                  </div>

                  <div class="control-group">
                     <label class="control-label">Gönderen telefon</label>
                     <div class="controls">
                        <?=$mesaj->telefon?>
                    </div>
                </div>

                <div class="control-group">
                 <label class="control-label">E-posta</label>
                 <div class="controls">
                    <?=$mesaj->eposta?>
                </div>
            </div>

            <div class="control-group">
             <label class="control-label">Sehir</label>
             <div class="controls">
                <?=$mesaj->sehir?>
            </div>
        </div>

        <div class="control-group">
         <label class="control-label">İlçe</label>
         <div class="controls">
            <?=$mesaj->ilce?>
        </div>
    </div>
    <div class="control-group">
    <label class="control-label">Mesaj</label>
       <div class="controls">
        <?=$mesaj->mesaj?>
    </div>
</div>

<!-- END FORM-->
<div class="control-group">
 <a href="?islem=sil&id=<?=$id?>" title="Sil">
    <div class="btn btn-danger" style="float: right;">Sil</div>
</a>   
<div style="clear: both;"></div>
</div>


</div> 


</div>



</div>
</div>
</div>

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<?php include'include/footer.php'; ?>