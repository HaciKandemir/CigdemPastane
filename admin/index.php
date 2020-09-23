<?php 
include '../db/baglan.php';
$_SESSION["yonetici"]=false;
if (!empty($_POST['kadi']) && !empty($_POST['sifre'])) {
    $uName=$_POST['kadi'];
    $sifre=$_POST['sifre'];
    $kontrol=$veritabani->query("SELECT * FROM yonetici WHERE kullaniciAdi='$uName' and sifre='$sifre'")->fetch(PDO::FETCH_OBJ);
    if ($kontrol) {
        $_SESSION["yonetici"]=true;
        $_SESSION["isim"]=$kontrol->isim;
        $_SESSION["kadi"]=$kontrol->kullaniciAdi;
        header("location:login.php");
    }
    else{
        $_SESSION["error"] = "<div class='alert alert-danger' role='alert'>Eposta veya şifre hatalı.</div>";
        header("location:login.php");
    }
}
else{
    header("location:login.php");
}

 ?>