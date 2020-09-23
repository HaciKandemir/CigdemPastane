<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Çiğdem Pastane</title>
  <link rel="stylesheet" type="text/css" href="vendor/css/boostrap.css">
  <?php include'header.php' ?>
  <?php 
  if (isset($_GET['blog'])) {
    $id=$_GET['blog'];
    $blog=$veritabani->query("SELECT * FROM blog WHERE id=$id")->fetch(PDO::FETCH_OBJ);
  }else{
    header('location:blog.php');}

  ?>
  
  <style type="text/css">
    a:hover {
      text-decoration: none;
      color: black;
    }
    img{
      margin:0 auto;
      display: block;
      max-width: 400px;
    }
    #blog{
      padding: 15px;
    }
    .baslik{
      text-align: center;
    }
    .tarih{
      padding: 20px;
      padding-right: 90px;
      display: block;
      text-align: right;
    }
    h4{
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <div id="container">
   <div id="icerik">
     <?php include'sidebar.php' ?>

     <div id="sag">
      <div id="blog">
        <div class="baslik">
          <h4><?=$blog->baslik?></h4>
          <img src="img/blog/<?=$blog->resim?>">
          <span class="tarih"><?=$blog->createDate?></span>
        </div>
        <div class="icerik">
          <?=nl2br($blog->metin)?>  
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
