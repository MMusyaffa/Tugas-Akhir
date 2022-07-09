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
  <meta name="twitter:title" content="Kumpulkan">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/bumilogo-1.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Kumpulkan</title>
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
  <style>
    
.cid-taD6WOdK39 {
  padding-top: 6rem;
  padding-bottom: 6rem;
  background-color: #98dee8;
}
.cid-taD6WOdK39 img,
.cid-taD6WOdK39 .item-img {
  width: 100%;
}
.cid-taD6WOdK39 .item:focus,
.cid-taD6WOdK39 span:focus {
  outline: none;
}
.cid-taD6WOdK39 .item {
  cursor: pointer;
  margin-bottom: 2rem;
}
.cid-taD6WOdK39 .item-wrapper {
  position: relative;
  border-radius: 4px;
  background: #fafafa;
  height: 100%;
  display: flex;
  flex-flow: column nowrap;
}
@media (min-width: 992px) {
  .cid-taD6WOdK39 .item-wrapper .item-content {
    padding: 2rem;
  }
}
@media (max-width: 991px) {
  .cid-taD6WOdK39 .item-wrapper .item-content {
    padding: 1rem;
  }
}
.cid-taD6WOdK39 .mbr-section-btn {
  margin-top: auto !important;
}
.cid-taD6WOdK39 .mbr-section-title {
  color: #232323;
}
.cid-taD6WOdK39 .mbr-text,
.cid-taD6WOdK39 .mbr-section-btn {
  text-align: left;
}
.cid-taD6WOdK39 .item-title {
  text-align: left;
}
.cid-taD6WOdK39 .item-subtitle {
  text-align: center;
}
input {
  text-align: center;  
  border: 1px solid #6C757D;
} 

.number-input input[type="number"] {
  -webkit-appearance: textfield !important;
  -moz-appearance: textfield !important;
  appearance: textfield !important;
  }

  .number-input input[type=number]::-webkit-inner-spin-button,
  .number-input input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
  }

  .number-input {
  margin-bottom: 20px;
  padding-top: 20px !important;
  }
  
  .btn {
  box-sizing: border-box;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: transparent;
  border: 2px solid #e74c3c;
  border-radius: 0.6em;
  color: #e74c3c;
  cursor: pointer;
  display: flex;
  align-self: center;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1;
  margin: 20px;
  padding: 1.2em 2.8em;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
}
.btn:hover, .btn:focus {
  color: #fff;
  outline: 0;
}
.first {
  transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
}
.first:hover {
  box-shadow: 0 0 40px 40px #e74c3c inset;
}

</style>
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

<section data-bs-version="5.1" class="cid-taD6WOdK39" id="gallery3-1x">
    <div class="container-fluid">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Kumpulkan Sampahmu Di Sini</strong></h4>
        </div>
        <form method="POST" action="controller.php">
            <div class="row mt-4">
                <input type="hidden" value="kumpulkan" name="form_name">
                <div class="item features-image сol-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="assets/images/sampah_btl_plastik.jpg">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-7"><strong>Plastik</strong></h5>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Kanton plastik, Botol plastik, dan plastik lainnya.</p>
                        </div>
                        <td class="p-0 d-xl-table-cell d-none">
                            <ul class="p-0 m-0">
                                <li class="justify-content-center d-flex">Masukkan Jumlah Input : </li>
                                <li *ngFor='let item of product.items' class="def-number-input number-input d-flex justify-content-center">
                                    <input placeholder="Qty" name="plastik_qty" type="number" [(ngModel)]="item.quantity" (change)="this.updateCart(item)" style="height: 45px; line-height: 45px" min="0"> 
                                </li>
                            </ul>
                        </td>
                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="assets/images/sampah_kaleng.jpg">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-7"><strong>Kaleng</strong></h5>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Kaleng Minuman, Kaleng makanan, dan kaleng lainnya.</p>
                        </div>
                        <td class="p-0 d-xl-table-cell d-none">
                            <ul class="p-0 m-0">
                                <li class="justify-content-center d-flex">Masukkan Jumlah Input : </li>
                                <li *ngFor='let item of product.items' class="def-number-input number-input d-flex justify-content-center">
                                    <input placeholder="Qty" name="kaleng_qty" type="number" [(ngModel)]="item.quantity" (change)="this.updateCart(item)" style="height: 45px; line-height: 45px" min="0"> 
                                </li>
                            </ul>
                        </td>
                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="assets/images/sampah_sterofoam.jpeg">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-7"><strong>Sterofoam</strong></h5>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Sterofoam makanan, Sterofoam bekas pelindung benda, dan Sterofoam lainnya.</p>
                        </div>
                        <td class="p-0 d-xl-table-cell d-none">
                            <ul class="p-0 m-0">
                                <li class="justify-content-center d-flex">Masukkan Jumlah Input : </li>
                                <li *ngFor='let item of product.items' class="def-number-input number-input d-flex justify-content-center">
                                    <input placeholder="Qty" name="sterofoam_qty" type="number" [(ngModel)]="item.quantity" (change)="this.updateCart(item)" style="height: 45px; line-height: 45px" min="0"> 
                                </li>
                            </ul>
                        </td>
                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="assets/images/sampah_kain.jpeg" title="">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-7"><strong>Kain</strong></h5>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Kain perca, Kain handuk, Kain pakaian, dan Kain lainya.</p>
                        </div>
                        <td class="p-0 d-xl-table-cell d-none">
                        <ul class="p-0 m-0">
                                <li class="justify-content-center d-flex">Masukkan Jumlah Input : </li>
                                <li *ngFor='let item of product.items' class="def-number-input number-input d-flex justify-content-center">
                                    <input placeholder="Qty" name="kain_qty" type="number" [(ngModel)]="item.quantity" (change)="this.updateCart(item)" style="height: 45px; line-height: 45px" min="0"> 
                                </li>
                            </ul>
                        </td>
                    </div>
                </div><div class="item features-image сol-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="assets/images/sampah_botol_kaca.jpg" title="" data-slide-to="4" data-bs-slide-to="5">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-7"><strong>Kaca</strong></h5>
                            
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Botol kaca, Kaca jendela, Cermin, dan Kaca lainnya.</p>
                        </div>
                        <td class="p-0 d-xl-table-cell d-none">
                            <ul class="p-0 m-0">
                                <li class="justify-content-center d-flex">Masukkan Jumlah Input : </li>
                                <li *ngFor='let item of product.items' class="def-number-input number-input d-flex justify-content-center">
                                    <input placeholder="Qty" name="kaca_qty" type="number" [(ngModel)]="item.quantity" (change)="this.updateCart(item)" style="height: 45px; line-height: 45px" min="0"> 
                                </li>
                            </ul>
                        </td>
                    </div>
                </div>
            </div>
            <form action="controller.php" method="POST">
                <div class="row justify-content-center">
                    <div class="card col-12 col-md-6 col-lg-3">
                    <input type="hidden" name="form_name" value="kumpulkan">
                        <button class="btn first">kumpulkan</button>
                    </div>
                </div>
            </form>
        </form>
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
                <p class="mbr-text mbr-fonts-style mb-4 display-4">"Recyclebette berawal dari keresahan akan sampah yang semakin banyak dan belum ada cara untuk mengolahnya secara efektif dan efisien maka dari itu kami ada untuk menjadikan bumi lebih baik untuk setiap generasi".<br><em>-Founder Recyclebetter-</em></p>
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