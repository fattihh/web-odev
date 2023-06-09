<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hakkımda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
      @import url("css/all.css");
    </style>
  
    <link rel="stylesheet" href="css\custom\index.css">
    <link rel="stylesheet" href="css\custom\hakkımda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>

  <body>
    <!-- navigation start-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNavbar">
      <div class="container">
          <a href="index.php" class="navbar-brand text-uppercase" title="Home">Home</a>
          <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#myNavbar"
              aria-controls="myNavbar" aria-label="menüyü açma kapama butonu" aria-expanded="false">
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

    <div class = "about-wrapper">
      <div class = "about-left">
        <div class = "about-left-content">
          <div>
            <div class = "shadow">
              <div class = "about-img">
                <img src = "img\fatih_ucar.jpg" alt = "about image">
              </div>
            </div>

            <h2>Fatih<br>Uçar</h2>
            <h3>Bilgisayar Mühendisi</h3>
          </div>

          <ul class="icons">
            <li><a href="https://twitter.com/fatihzsaz" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://github.com/fatihucar"  target="_blank"><i class="fab fa-github"></i></a></li>
            <li><a href="https://www.instagram.com/fattiucar/" target="_blank"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
      <div class = "about-right">
        <h1>Merhaba<span>!</span></h1>
        <h2>İŞTE BEN!</h2>       
        <div class = "about-para">
          <p>Ben Fatih Uçar.14 ağustos 2002 de Samsunun Terme ilçesinde doğdum.10 sene öncesine kadar babamın iş durumlarıya nedeniyle Ünye'ye taşınmak zorunda kaldık ki iyi ki kalmışız buraya taşındığımız için çok şanslıyım.Hobilerim arasında vucüt gelistirme sporu ve futbol maçı seyretmek var. Ağır fanatik bir Galatasaray taraftarıyım.</p>
          <p>Eğitim hayatıma Termede başladım ilkokul 4.sınıfta Ünyede okumaya başladım.Ünye Anadolu Lisesinden mezun oldum.Üniversite sınav senemde ağır bir çalışma sürecim oldu.Aklımda Bilgisayar Mühendisi olmak vardı.İlk senemde bölüm tutmasına rağmen şehir sebebiyle bir sene mezuna kaldım.Ertesi sene Sakarya Üniversitesi Bilgisayar Mühendisliği bölümüne girmeye hak kazandım.</p>
          <p>Şu anda programlamayla aram gayet iyi iyi ki bu bölümü seçmişim.Umarım ileride de olur.</p>
        </div>
      </div>
    </div>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/custom/extra.js"></script>
  </body>
</html>
