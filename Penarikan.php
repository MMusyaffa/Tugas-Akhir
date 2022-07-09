<?php 
session_start();
include "koneksi/koneksi.php" 

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.6.8, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Penarikan">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/bumilogo-1.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Penarikan</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
</head>
<body>
<?php
        
        $sql = "SELECT * FROM user WHERE id = '".$_SESSION['id_user']."'";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($result);
        $username = $data['username'];

  ?>
  <section class="menu cid-t8hb3pvaYl" once="menu" id="MobiGaryMenu26-1r">
    <nav class="navbar navbar-dropdown TopMenuUnderline navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="Beranda.php">Selamat Datang, <?=$username?></a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                        <a class="nav-link link text-black text-primary display-4" href="Produkkami.php#gallery4-1e">Produk Kami</a>
                    </li><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="Penarikan.php#top">Penarikan</a></li></ul>
                <div class="icons-menu">
                    <a href="Datadiri.php#top" target="_blank">
                        <span class="p-2 mbr-iconfont mobi-mbri-user mobi-mbri" style="color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                    </a> 
                </div>
            </div>
        </div>
    </nav>

</section>

<section data-bs-version="5.1" class="gallery5 mbr-gallery cid-t8foS0cMxN" id="gallery5-a">
    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(17, 211, 98);">
    </div>
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center m-0 display-2"><strong><br>Tukarkan Poinmu Di Sini</strong></h3>
        </div>
        <div class="row mbr-gallery mt-4">
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#t9XHobZqMu-modal" data-bs-target="#t9XHobZqMu-modal">
                    <a href="kaos.php">
                        <img class="w-100" src="assets/images/kaos.jpeg">
                    </a>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">Kaos Keren</h6>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#t9XHobZqMu-modal" data-bs-target="#t9XHobZqMu-modal">
                    <a href="topi.php">
                        <img class="w-100" src="assets/images/topijpg.jpg">
                    </a>                
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">Topi Exclusive</h6>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#t9XHobZqMu-modal" data-bs-target="#t9XHobZqMu-modal">
                    <a href="totebag.php">
                        <img class="w-100" src="assets/images/totebag.jpg">
                    </a>                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">Tote Bag</h6>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#t9XHobZqMu-modal" data-bs-target="#t9XHobZqMu-modal">
                    <a href="ewallet.php">
                        <img class="w-100" src="assets/images/ewallet.png">
                    </a>                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">e-Wallet</h6>
            </div>
        </div>
        <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="t9XHobZqMu-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="carousel slide" id="lb-t9XHobZqMu" data-interval="5000" data-bs-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="assets/images/kaos.jpeg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/topijpg.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/totebag.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/ewallet.png">
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-slide-to="0" data-bs-slide-to="0" class="active" data-target="#lb-t9XHobZqMu" data-bs-target="#lb-t9XHobZqMu"></li>
                                <li data-slide-to="1" data-bs-slide-to="1" data-target="#lb-t9XHobZqMu" data-bs-target="#lb-t9XHobZqMu"></li>
                                <li data-slide-to="2" data-bs-slide-to="2" data-target="#lb-t9XHobZqMu" data-bs-target="#lb-t9XHobZqMu"></li>
                                <li data-slide-to="3" data-bs-slide-to="3" data-target="#lb-t9XHobZqMu" data-bs-target="#lb-t9XHobZqMu"></li>
                            </ol>
                            <a role="button" href="" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
                            </a>
                            <a class="carousel-control-prev carousel-control" role="button" data-slide="prev" data-bs-slide="prev" href="#lb-t9XHobZqMu">
                                <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                                <span class="sr-only visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next carousel-control" role="button" data-slide="next" data-bs-slide="next" href="#lb-t9XHobZqMu">
                                <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                                <span class="sr-only visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer4 cid-t8fDxZZ03Z" once="footers" id="footer4-1s">
    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(35, 35, 35);"></div>
    <div class="container">
        <div class="row mbr-white">
            <div class="col-6 col-lg-3">
                <div class="media-wrap col-md-12 col-12">
                    <a href="index.php">
                        <img src="assets/images/bumilogo-6.png">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>Tentang Kami</strong></h5>
                <p class="mbr-text mbr-fonts-style mb-4 display-4">"Recyclebette berawal dari keresahan akan sampah yang semakin 
                    banyak dan belum ada cara untuk mengolahnya secara efektif dan efisien maka dari itu kami ada untuk menjadikan 
                    bumi lebih baik untuk setiap generasi".<br><em>-Founder Recyclebetter-</em></p>
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7">
                    <strong>Tahu Kami Lebih Dekat</strong></h5>
                <div class="social-row display-7">
                    <div class="soc-item">
                        <a href="https://www.instagram.com/recyclebetter.ofc/" target="_blank">
                            <span class="mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                    </div>  
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap"><br></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap"><a href="hubungikami.php#contacts2-1k" class="text-white text-primary">Hubungi Kami</a></li>
                    <li class="mbr-text item-wrap"><a href="kritiksaran.php#form5-1j" class="text-white text-primary" style="font-size: 1.1rem;">Kritik dan Saran</a><br></li>
                </ul>
            </div>
            </div>
        </div>

</body>
</html>