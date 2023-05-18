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
</head>
<body>
   
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

</body>
</html>