<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'Kullanıcı zaten mevcut!';

   }else{

      if($pass != $cpass){
         $error[] = 'Şifreler eşleşmedi!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:giris_form.php');
      }
   }

};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kayıt formu</title>

   <link rel="stylesheet" href="css\custom\giris.css">
</head>
<body>
   
<div class="form-container">
   <form action="" method="post">
      <h3>Şimdi Kayıt Ol!</h3>      
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="İsminizi giriniz">
      <input type="email" name="email" required placeholder="Emailini giriniz">
      <input type="password" name="password" required placeholder="Şifrenizi giriniz">
      <input type="password" name="cpassword" required placeholder="Şifrenizi onaylayın">
      <select name="user_type">
         <option value="user">Kullanıcı</option>
         <option value="admin">Admin</option>
      </select>
      <input type="submit" name="submit" value="Kayıt ol" class="form-btn">
      <p>Zaten bir hesaba sahip misin ? <a href="giris_form.php">Şimdi giriş yap!</a></p>
   </form>

</div>
</body>
</html>