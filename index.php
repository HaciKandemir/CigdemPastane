<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Çiğdem Pastane</title>
<link rel="stylesheet" type="text/css" href="vendor/css/flexslider.css">
<?php include'header.php' ?>
</head>

<body>
<div id="container">
	<div id="icerik">
    	<?php include'sidebar.php' ?>
        <div id="sag">
            <div id="slider" class="flexslider">
                <ul class="slides">
                    <?php $resimler=$veritabani->query("SELECT * FROM slider order by id"); 
                        while ($resim=$resimler->fetch(PDO::FETCH_OBJ)){ ?>
                        <li><img src="img/slider/<?php echo $resim->resimAd ?>"></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="temizle"></div>
    </div>
    <div id="footer">
    	<?php include'footer.php' ?>
    </div>
</div>
<script src="vendor/js/jquery.js"></script>
<script type="text/javascript" src="vendor/js/jquery.flexslider.js"></script>
<script>
    $(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
</script>
</html>
