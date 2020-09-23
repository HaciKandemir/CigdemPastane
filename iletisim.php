<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Çiğdem Pastane</title>
<?php include'header.php' ?>
</head>
<?php $iletisim=$veritabani->query("SELECT * FROM iletisim WHERE id=1")->fetch(PDO::FETCH_OBJ); ?>
<body>
<div id="container">
	<div id="icerik">
    	<?php include'sidebar.php' ?>
        <div id="sag">
            <div id="iletisim">
            	<h4>Adres </h4><p><?=$iletisim->adres ?></p>
                <iframe src="<?=$iletisim->maps?>" width="85%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <h4>Telefon </h4><p><?=$iletisim->telefon ?></p>
                
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

