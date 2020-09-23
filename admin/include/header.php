<?php 
    include'../db/baglan.php';
    if(!isset($_SESSION["yonetici"]) || !$_SESSION["yonetici"]){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Çiğdem Pastanesi Yönetim Paneli</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../vendor/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="slider.php">Çiğdem Pastanesi</a>
            </div>

            <div class="header-right">
                <?php $mesajlar=$veritabani->query("SELECT * FROM mesaj where durum=0"); ?>
              <a href="mesaj.php" class="btn btn-info" title="Mesajlar"><b><?=$mesajlar->rowCount()?> </b><i class="fa <?=($mesajlar->rowCount()==0) ? 'fa-envelope-open-o' : 'fa-envelope-o'?> fa-2x"></i></a>
              <a href="logout.php" class="btn btn-danger" title="Çıkış yap"><i class="fa fa-sign-out fa-2x"></i></a>
            </div>
        </nav>