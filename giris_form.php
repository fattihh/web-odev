<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:adminpage.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:kullanıcı.php');
   }

}else{
   $error[] = 'Şifreniz veya e-mail yanlış!';
}

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Giriş formu</title>
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

<div class="form-container">

   <form action="" method="post">
      <h3>Şimdi giriş yap!</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Emailinizi giriniz">
      <input type="password" name="password" required placeholder="Şifrenizi giriniz.">
      <input type="submit" name="submit" value="Giriş yap" class="form-btn">
      <p>Hesabın yok mu ?<a href="kayıt.php">Şimdi Kayıt ol</a></p>
   </form>

</div>

</body>
</html>