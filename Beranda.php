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
  <meta name="twitter:title" content="Beranda">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/bumilogo-1.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Beranda</title>
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
        // echo "<pre>";
        // print_r($data);
        // exit();
        $username = $data['username'];

  ?>
  <section class="menu cid-t8hb3pvaYl" once="menu" id="MobiGaryMenu26-1r">
    <nav class="navbar navbar-dropdown TopMenuUnderline navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="Beranda.php">Selamat Datang, <?=$username?> </a></span>
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

<section data-bs-version="5.1" class="header10 cid-t8gXe0GFEq" id="header10-v">
    <div class="align-center container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Kumpulkan sampahmu hari ini!</strong></h1>
                
                <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-4" href="Kumpulkan.php#top">Kumpulkan Sekarang</a></div>
                <div class="image-wrap mt-4">
                    <img src="assets/images/collect.jpeg" title="">
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="slider4 mbr-embla cid-t8gZ3spPUg" id="slider4-w">
    <div class="position-relative text-center">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Langkah Untuk Jadi Lebih baik</strong></h4>
        </div>
        <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-auto-play-interval="5" data-draggable="true">
            <div class="embla__viewport container-fluid">
                <div class="embla__container">
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="assets/images/tanam.jpg">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7"><strong>Tanam dan Rawat Tanaman</strong></h5>
                                
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">Menanam dan merawat tumbuhan adalah salah satu langkah untuk 
                                    mengurangi kadar CO2 di alam terbuka, selain itu bisa memperbaiki kadar O2 yang kita butuhkan untuk bernafas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="assets/images/hematair.jpeg">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7"><strong>Gunakan Air Secukupnya</strong></h5>
                                
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">Mematikan air adalah bentuk dari pelestarian air agar 
                                    tidak terbuang sia-sia apalagi menghemat air bisa menekan pengeluaran bulanan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="assets/images/matikanlistrik.jpeg">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7"><strong>Matikan Listrik Bila Tidak Perlu</strong></h5>
                                
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">Ketika listrik yang tidak digunakan dimatikan akan 
                                                                                    membantu mengurangi dampak dari pemanasan global karena 
                                                                                    listrik yang kita gunakan masih berasal dari energi kotor.<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                        <div class="slide-content">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="assets/images/ayonaikkenum.jpg">
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7"><strong>Mengganti Kendaraan Pribadi Ke Transportasi Umum</strong></h5>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">Menggunakan kendaraan umum tentu bisa mengurangi jumlah 
                                                                                    polusi kendaraan dan juga mengatasi kemacetan yang ada.<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="embla__button embla__button--prev">
                <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Previous</span>
            </button>
            <button class="embla__button embla__button--next">
                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="slider1 cid-t8h01LVkei" id="slider1-y">
    
    <div class="carousel slide" id="t9XHoBpIh7" data-interval="5000" data-bs-interval="5000">
        <ol class="carousel-indicators">
            <li data-slide-to="0" data-bs-slide-to="0" class="active" data-target="#t9XHoBpIh7" data-bs-target="#t9XHoBpIh7"></li>
            <li data-slide-to="1" data-bs-slide-to="1" data-target="#t9XHoBpIh7" data-bs-target="#t9XHoBpIh7"></li>
            <li data-slide-to="2" data-bs-slide-to="2" data-target="#t9XHoBpIh7" data-bs-target="#t9XHoBpIh7"></li><li data-slide-to="3" data-bs-slide-to="3" data-target="#t9XHoBpIh7" data-bs-target="#t9XHoBpIh7"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item slider-image item active">
                <div class="item-wrapper">
                    <img class="d-block w-100" src="assets/images/bantupemulung.jpeg">
                    
                    <div class="carousel-caption">
                        <h5 class="mbr-section-subtitle mbr-fonts-style display-5"><strong>Langkah Kami</strong><br><br><br><br><br><br><br><br><br><br><br><br><br></h5>
                        <p class="mbr-section-text mbr-fonts-style display-7">Membantu pemulung mendapatkan hasil yang lebih baik</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item slider-image item">
                <div class="item-wrapper">
                    <img class="d-block w-100" src="assets/images/reboisasi.jpg">
                    
                    <div class="carousel-caption">
                        <h5 class="mbr-section-subtitle mbr-fonts-style display-5">
                            <strong>Langkah Kami</strong><br><br><br><br><br><br><br><br><br><br><br><br><strong><br></strong>
                        </h5>
                        <p class="mbr-section-text mbr-fonts-style display-7">Menanam pohon di hutan yang sudah mulai gundul</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item slider-image item">
                <div class="item-wrapper">
                    <img class="d-block w-100" src="assets/images/daur-ulang-sampah-plastik.jpg">
                    
                    <div class="carousel-caption">
                        <h5 class="mbr-section-subtitle mbr-fonts-style display-5">
                            <strong>Langkah Kami</strong><br><br><br><br><br><br><br><br><br><br><br><br><strong><br></strong>
                        </h5>
                        <p class="mbr-section-text mbr-fonts-style display-7">Mengubah sampah menjadi barang yang berguna</p>
                    </div>
                </div>
            </div><div class="carousel-item slider-image item">
                <div class="item-wrapper">
                    <img class="d-block w-100" src="assets/images/bersihsampahsungai.jpg" data-slide-to="3" data-bs-slide-to="4">
                    
                    <div class="carousel-caption">
                        <h5 class="mbr-section-subtitle mbr-fonts-style display-5">
                            <strong>Langkah Kami</strong><br><br><br><br><br><br><br><br><br><br><br><br><strong><br></strong>
                        </h5>
                        <p class="mbr-section-text mbr-fonts-style display-7">Membersihkan sungai dan saluran air</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" data-bs-slide="prev" href="#t9XHoBpIh7">
            <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
            <span class="sr-only visually-hidden">Previous</span>
        </a>
        <a class="carousel-control carousel-control-next" role="button" data-slide="next" data-bs-slide="next" href="#t9XHoBpIh7">
            <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
            <span class="sr-only visually-hidden">Next</span>
        </a>
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

</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/2793116" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7"></p><a style="z-index:1" href="https://mobirise.com/html-builder.html"></a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/parallax/jarallax.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/embla/embla.min.js"></script>  <script src="assets/embla/script.js"></script>  <script src="assets/theme/js/script.js"></script>
    
</body>
</html>