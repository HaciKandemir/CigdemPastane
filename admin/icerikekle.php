<?php 
//namespace Verot\Upload;
include'include/header.php';
include'include/sidebar.php';
require'include/class.upload.php';
$tur='kaydet';
if($_GET['islem']=='guncelle'){
	$tur='guncelle';
	$id=$_GET['id'];
	$icerik=$veritabani->query("SELECT * FROM blog where id='$id'")->fetch(PDO::FETCH_OBJ);
}

if (isset($_POST['kaydet'])) {
	$baslik=$_POST['baslik'];
	$metin=$_POST['metin'];

	$image = new Verot\Upload\Upload( $_FILES[ 'image' ] );
	if ( $image->uploaded ) {
		$b=substr(base64_encode(uniqid(true)), 0, 20);

		$image->file_new_name_body = $b;

		$image->image_convert = 'jpg';

		$image->Process( '../img/blog/' );

		if ( $image->processed ) {
			$resimadi=$image->file_dst_name;
		} 
	}
	$kayit=$veritabani->query("INSERT INTO blog SET baslik='$baslik', metin='$metin', resim='$resimadi' ");
}
else if (isset($_POST['guncelle'])) {
	$id=$_GET['id'];
	$icerik=$veritabani->query("SELECT * FROM blog where id='$id'")->fetch(PDO::FETCH_OBJ);
	$baslik=$_POST['baslik'];
	$metin=$_POST['metin'];
	if(!empty($_FILES['image']['name'])){
		unlink('../img/blog/'.$icerik->resim);
		$image = new Verot\Upload\Upload( $_FILES[ 'image' ] );
		if ( $image->uploaded ) {
			$b=substr(base64_encode(uniqid(true)), 0, 20);

			$image->file_new_name_body = $b;

			$image->image_convert = 'jpg';

			$image->Process( '../img/blog/' );

			if ( $image->processed ) {
				$resim=$image->file_dst_name;
			} 
		}
	}else{
		$resim=$icerik->resim;
	}
	$guncelle=$veritabani->query("UPDATE blog SET baslik='$baslik', metin='$metin', resim='$resim' WHERE id='$id' ");
	$icerik=$veritabani->query("SELECT * FROM blog where id='$id'")->fetch(PDO::FETCH_OBJ);
}    

?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line"><?=$tur?></h1>
				<?php 
					if ($kayit) {
						echo'<h1 class="page-subhead-line">Kaydedildi. </h1>';
					} else if($guncelle){
						echo'<h1 class="page-subhead-line">Güncellendi. </h1>';
					}
				?>


			</div>
		</div>
		<!-- /. ROW  -->
		<div class="row">
			<div class="col-md-12">
				<form action="" method="POST"  enctype="multipart/form-data">
					<div class="panel panel-info">
						<div class="panel-heading"><?=$tur?></div>
						<div class="panel-body">
							<form role="form" action="" method="post" enctype="multipart/form-data" >
								<div class="form-group">
									<label>Başlık</label>
									<input class="form-control" value="<?=($tur=='guncelle') ? $icerik->baslik : ''?>" name="baslik"  type="text">
								</div>
								<div class="form-group">
									<label>Metin</label>
									<textarea class="form-control" name="metin" rows="10"><?=($tur=='guncelle') ? $icerik->metin : ''?></textarea>
								</div>
								<div class="form-group">
									<label>Ürün Resim</label>
									<?php if ($tur=='guncelle') { ?>
										<br><img  style="width: 200px; height: 160px;"  src=../img/blog/<?php echo $icerik->resim; ?>>
									<?php } ?>
									<input class="form-control" value="<?=($tur=='guncelle') ? $icerik->resim : ''?>" name="image"  type="file">
								</div>
								<button type="submit" name="<?=$tur?>" class="btn btn-info" ><?=$tur?> </button>
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