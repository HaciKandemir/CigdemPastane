<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Çiğdem Pastane</title>
	<?php include'header.php' ?>
</head>
 
<body>
	<div id="container">
		<div id="icerik">
			<?php include'sidebar.php' ?>
			<div id="sag">
				<div id="blog">
				<?php $resimler=$veritabani->query("SELECT * FROM galeri order by id"); 
                while ($resim=$resimler->fetch(PDO::FETCH_OBJ)){ ?>
				<div class="gallery">
					<a target="_blank" href="img/galeri/<?=$resim->resimAd ?>">
						<img src="img/galeri/<?=$resim->resimAd ?>" alt="Forest">
					</a>
				</div>
				<?php } ?>
				</div>
			</div>
			<div class="temizle"></div>
		</div>
		<div id="footer">
			<?php include'footer.php' ?>
		</div>
	</div>
</body>
</html>
