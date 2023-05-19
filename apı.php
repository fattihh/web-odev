<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>API</title>
    <style>
        @import url("css/all.css");
    </style>

    <link rel="stylesheet" href="css/custom/index.css">
    <link rel="stylesheet" href="css/custom/apı.css">
</head>
<body>

     <!-- navigation start-->
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNavbar">
        <div class="container">
            <a href="index.html" class="navbar-brand text-uppercase" title="Home">Home</a>
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
                        <li class="nav-item"><a href="api.php" class="nav-link">API</a></li>
                        <li class="nav-item"><a href="hakkımda.php" class="nav-link">Hakkımda</a></li>
                        <li class="nav-item"><a href="cv.php" class="nav-link">CV</a></li>
                        <li class="nav-item"><a href="iletişim.php" class="nav-link">İletişim</a></li>
                        <li class="nav-item"><a href="adminpage.php" class="nav-link">Giriş</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- navigation end-->
    <div class="movies"></div>





    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/custom/navbar.js"></script>
    <script src="js/custom/apı.js" type="module"></script>
    
</body>
</html>