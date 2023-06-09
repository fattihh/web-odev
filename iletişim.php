<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>İletişim</title>
  <style>
    @import url("css/all.css");
</style>
  <link rel="stylesheet" href="css/custom/iletişim.css">
  <link rel="stylesheet" href="css/custom/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
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
<div class="container1">
  <form>
    <i class="fa fa-paper-plane" aria-hidden="true"></i>  
    <div class="input-group">
      <label>İsim ve Soyisim</label>
      <input type="text" placeholder="İsim ve Soyisminizi giriniz" id="contact-name" onkeyup="validateName()">
      <span id="name-error"></span>
    </div>

    <div class="input-group">
      <label>Telefon no</label>
      <input type="tel" placeholder="Telefon no giriniz" id="contact-phone" onkeyup="validatePhone()">
      <span id="phone-error"></span>
    </div>

    <div class="input-group">
      <label>E-mail</label>
      <input type="email" placeholder="E-mail giriniz" id="contact-email" onkeyup="validateEmail()">
      <span id="email-error"></span>
    </div>

    <div class="input-group">
      <label>Mesajınız</label>
      <textarea row="5" placeholder="Mesajınız"></textarea>
      <span id="message-error"></span>
    </div>
    <button onclick=" return validateForm()">Gönder</button>
    <span id="submit-error"></span>
  </form>
</div>
<script src="js\custom\iletişim.js"></script>










  
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/custom/navbar.js"></script>
  
</body>
</html>