<?php  
namespace Verot\Upload;
include'include/header.php';
include'include/sidebar.php'; 
require 'include/class.upload.php';

const VALID_TUR = [
    "slider",
    "galeri"
];
if (!isset($_GET["kategori"]) || !in_array($_GET["kategori"], VALID_TUR)) {
    header("location:blank.php");
}
else{
    $tur=$_GET["kategori"];
}
?>
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line"><?=$tur ?> Resim Yükle</h1>
				
			</div>
		</div>
		<!-- /. ROW  -->
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Dosya Yükle
					</div>
					<div class="panel-body">

						<form action="" method="post" enctype="multipart/form-data">
							Resim Seçin: <input type="file" name="image" /><hr />
							<input type="submit" name="submit" value="Yükle" />
							<?php
							if ( isset( $_POST[ 'submit' ] ) ) {
								$image = new Upload( $_FILES[ 'image' ] );
								if ( $image->uploaded ) {
									$b=substr(base64_encode(uniqid(true)), 0, 20);
        							// resmi yeniden adlandıralım
									$image->file_new_name_body = $b;
        							// resmi jpg formatına convert edelim
									$image->image_convert = 'jpg';
        							// upload klasörüne değişiklik yapmadan kayıt et
									$image->Process( '../img/'.$tur );
        							if ( $image->processed ) {
        								$resimadi=''.$image->file_dst_name.'';
        								$slider_ekle_sorgu=$veritabani->prepare("INSERT INTO $tur SET resimAd=?"); 
        								$slider_ekle_sorgu->execute(array( $resimadi));	
        								
        								print '<br>Resim yükleme işlemi başarılı!<hr />';
        								print '<img src="' . $image->file_dst_path . $image->file_dst_name . '" alt="" width="200"/>';
        							} else {
        								print 'Bir sorun oluştu: ' . $image->error;
        							}
        						}
        					}
        					?>
        				</form>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
</body>
</html>
<?php include 'include/footer.php'; ?>
