<?php include'include/header.php';
include'include/sidebar.php';  
$mesaj=$veritabani->query("SELECT * FROM slider  order by id");
if (isset($_GET)) {
	if ($_GET['islem']=='sil') {
		$id=$_GET['id'];
		unlink('../img/slider/'.$_GET['img']);
		$mrb=$veritabani->query("DELETE FROM slider where id='$id'");
		$mesaj=$veritabani->query("SELECT * FROM slider order by id");
	}
}
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line">Slider</h1>
			</div>
		</div>
		<!-- /. ROW  -->
		<div class="row">
			<div class="col-md-12"> 
				<!--   Kitchen Sink -->
				<div class="panel panel-default">
					<div class="panel-heading">
						Aktif Resimler
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>RESİM ADI</th>
										<th>RESİM</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php while ($deger=$mesaj->fetch(PDO::FETCH_OBJ)) { ?>
										<td><?php echo $deger->id; ?></td>
										<td><?php echo $deger->resimAd; ?></td>
										<td><img src="../img/slider/<?php echo $deger->resimAd ?>" width="200"></td>
										<td><a href="?islem=sil&img=<?=$deger->resimAd?>&id=<?php echo $deger->id ?>" class="btn btn-danger">Sil</a></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
							<a href="resimyukle.php?kategori=slider" class="btn btn-primary">Yeni Resim Ekle</a>
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