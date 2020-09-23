<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Çiğdem Pastane</title>
<?php include'header.php' ?>
</head>
<?php $hakkimizda=$veritabani->query("SELECT * FROM hakkimizda WHERE id=1")->fetch(PDO::FETCH_OBJ);
$yazi=explode(".",$hakkimizda->yazi);
$say=count($yazi); ?>
<body>
<div id="container">
	<div id="icerik">
    	<?php include'sidebar.php' ?>
        <div id="sag">
            <div id="hakkimizda">
            	<h1><?=$hakkimizda->baslik ?></h1>
                <p><?php for ($i=0; $i <$say ; $i++) { 
                    echo$yazi[$i].".<br><br>";
                } ?></p>
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
