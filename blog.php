<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Çiğdem Pastane</title>
  <link rel="stylesheet" type="text/css" href="vendor/css/boostrap.css">
  <?php include'header.php' ?>
  <style type="text/css">
    a:hover {
      text-decoration: none;
      color: black;
    }
    .git{
      font-weight: bold;
      float: right;
    }
    .git:hover{
      color:#FF530D;
    }
  </style>
</head>

<body>
  <div id="container">
   <div id="icerik">
     <?php include'sidebar.php' ?>

     <div id="sag">
      <div id="blog">
        <div class="temizle"></div>
        <div class="card-deck">
          <?php $metinler=$veritabani->query("SELECT * FROM blog order by id desc"); 
          while ($metin=$metinler->fetch(PDO::FETCH_OBJ)){ ?>
          <div class="col-sm-4">  
            <div class="card">
              <img class="card-img-top" src="img/blog/<?=$metin->resim ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?=$metin->baslik ?></h5>
                <p class="card-text"><?php 
                $pos=strpos($metin->metin, ' ', 85);
                echo nl2br(substr($metin->metin,0,$pos )); ?>...</p>
                <a href="icerik.php?blog=<?=$metin->id?>" class="git">Git</a>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
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
