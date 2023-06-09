<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Fatih UÇAR">
    <meta name="description" content="kişisel tanıtım ve memleket">
    <meta name="keywords" content="web,tasarım,kişisel,ünye tanıtım,programlama,yazılım,geliştirme">
    <link href="img/findik.jpg" rel="icon">
    <link href="img/apple-touch-findik .jpg" rel="apple-touch-icon">
    <title>Ünye tanıtım</title>
    
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

    <!--header start-->
    <header class="backImage text-white text-center">
        <div class="container">
            <div class="backImage-sub mb-4">Güzel Ünyemize Hoş Geldiniz!</div>
            <div class="backImage-heading text-uppercase">Tanıştığımıza Memnun Olduk</div>
            <a href="#https://tr.wikipedia.org/wiki/%C3%9Cnye" class="btn btn-danger btn-lg p-lg-4 text-uppercase fw-bolder">Daha Fazla Anlat</a>
        </div>
    </header>
    <!-- header end-->

    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/custom/navbar.js"></script>
</body>

</html>
