<?php 
@ob_start();
@session_start();
if (isset($_SESSION["yonetici"]) && $_SESSION["yonetici"]) {
    header("location:slider.php");
}
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Çiğdem Pastanesi | Yönetici Paneli</title>

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <style>
  	body {
            margin: 0;
            padding: 0;
        	background-color: #17a2b8;
        }

        #container {
            margin: 0;
            padding: 0;
            text-align: center;
        }

        #content {
            margin-right: auto;
            margin-left: auto;
            max-width: 450px;
        }

        #logo-content {
            margin-top: 20px;
            margin-bottom: 30px;
        }

        #login {
            height: 320px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }

        #login-form {
            padding: 20px;
            text-align: left
        }
  </style>
</head>
<body >
  <div id="container"> 
        <div id="content">
            <div id="logo-content">
                <img src="../img/logo.png" width="200" />
            </div>
            <?php if(isset($_SESSION["error"])){ 
                echo $_SESSION["error"];
	            unset($_SESSION["error"]); 
            } ?>
            <div id="login">
                <form id="login-form" class="form" action="index.php" method="POST">
                    <h3 class="text-center text-info">Giriş</h3>
                    <div class="form-group">
                        <label for="username" class="text-info">Kullanıcı Adı:</label><br>
                        <input type="text" name="kadi" id="username" class="form-control" value="admin">
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-info">Şifre:</label><br>
                        <input type="password" name="sifre" id="password" class="form-control" value="123">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="girisYap" class="btn btn-info btn-md">Giriş Yap</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>