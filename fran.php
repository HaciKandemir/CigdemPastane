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
            <div id="franch">
                <?php 
                if (isset($_POST['franGonder'])) {
                    $adSoyad=$_POST['ad'];
                    $eposta=$_POST['posta'];
                    $telefon=$_POST['telefon'];
                    $mesaj=$_POST['mesaj'];
                    $il=$_POST['sehir'];
                    $ilçe=$_POST['ilce'];
                    $mesaj_kaydet=$veritabani->query("INSERT INTO  mesaj  SET adSoyad='$adSoyad', telefon='$telefon', eposta='$eposta', sehir='$il', ilce='$ilçe', mesaj='$mesaj', durum='0'");
                    if ($mesaj_kaydet) {
                        echo "<p>Başvurunuz Yollanmıştır</p>";
                    }else{ echo "<p>Mesajınız Yollanamadı</p>"; }
                }else{ ?>
                <form action="" method="post" style=" margin:50px auto;">
                   <div class="hey">
                    <label>Adınız Soyadınız</label><br>
                    <input style="margin-bottom:15px;" type="text" autofocus required name="ad"><br>
                </div>
                <div class="hey">
                    <label>E-Posta Adresiniz</label><br>
                    <input style="margin-bottom:15px;" type="email" name="posta"><br>
                </div>
                <div class="hey">
                    <label>Telefon Numaranız</label><br>
                    <input style="margin-bottom:15px;" type="number" onKeyDown="if(this.value.length==10) return false;" required placeholder="543 ... .. .." name="telefon"><br>
                </div>
                <div class="hey">
                    <label>Mağazanızın Bulunduğu Şehir</label><br>
                    <input style="margin-bottom:15px;" type="text" required name="sehir"><br>
                </div>
                <div class="hey">
                    <label>Mağazanızın Bulunduğu İlçe</label><br>
                    <input style="margin-bottom:15px;" type="text" required name="ilce"><br>
                </div>
                <div class="hey">
                    <label>Mesajınız</label><br>
                    <textarea name="mesaj" style="width:80%; height:60px;"   ></textarea><br>
                </div>
                <input style="height:35px; width:auto;" name="franGonder" type="submit"/>
            </form>
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

