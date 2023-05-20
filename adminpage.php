<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:giris_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>

   <link rel="stylesheet" href="css\custom\giris.css">

   <style>
        @import url("css/all.css");
    </style>

    <link rel="stylesheet" href="css/custom/index.css">
</head>
<body>
   <!-- navigation start-->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNavbar">
        <div class="container">
            <a href="index.php" class="navbar-brand text-uppercase" title="Home">Home</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#myNavbar"
                aria-controls="myNavbar" aria-label="menüyü açma kapama butonu" aria-expanded="false" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="myNavbar" aria-labelledby="myLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="myLabel">Menü</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Kapat">
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto text-uppercase py-lg-2">
                        <li class="nav-item"><a href="şehrim.php" class="nav-link">Şehrim</a></li>
                        <li class="nav-item"><a href="apı.php" class="nav-link">API</a></li>
                        <li class="nav-item"><a href="hakkımda.php" class="nav-link">Hakkımda</a></li>
                        <li class="nav-item"><a href="cv.php" class="nav-link">CV</a></li>
                        <li class="nav-item"><a href="iletişim.php" class="nav-link">İletişim</a></li>
                        <li class="nav-item"><a href="giris_form.php" class="nav-link">Giriş</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- navigation end-->   



<div class="container">

   <div class="content">
      <h3>Merhaba, <span>Admin</span></h3>
      <h1>Hoş geldin! <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Bu admin sayfası!</p>
      <a href="giris_form.php" class="btn">Giriş</a>
      <a href="kayıt.php" class="btn">Kayıt ol</a>
      <a href="cıkıs.php" class="btn">Çıkış</a>
   </div>

</div>

<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/custom/navbar.js"></script>

</body>
</html>