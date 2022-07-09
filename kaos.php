<?php
session_start();
include "koneksi/koneksi.php";
?>

<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.6.8, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Kaos">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/bumilogo-1.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Kaos</title>
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
.cid-taIdNSqZas {
padding-top: 6rem;
padding-bottom: 6rem;
background-color: #ffffff;
}
.cid-taIdNSqZas .mbr-fallback-image.disabled {
  display: none;
}
.cid-taIdNSqZas .mbr-fallback-image {
  display: block;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
}
@media (max-width: 991px) {
  .cid-taIdNSqZas .image-wrapper {
    margin-bottom: 1rem;
  }
}
.cid-taIdNSqZas img {
  width: 100%;
}
@media (min-width: 992px) {
  .cid-taIdNSqZas .text-wrapper {
    padding: 2rem;
  }
}

.btn {
  box-sizing: border-box;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: transparent;
  border: 2px solid #96d2d9;
  border-radius: 0.6em;
  color: #000000;
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
  color: #000000;
  outline: 0;
}
.first {
  transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
}
.first:hover {
  box-shadow: 0 0 40px 40px #96d2d9 inset;
}

</style>  
</head>
<body>
  
  <section class="menu cid-t8hb3pvaYl" once="menu" id="MobiGaryMenu26-2a">
    <nav class="navbar navbar-dropdown TopMenuUnderline navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="Penarikan.php">Ketuk untuk kembali</a></span>
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

<?php
$sql = "SELECT (sum(tr.kuantitas) * sum(smph.harga)) as saldo 
        FROM tb_transaksi tr
        INNER JOIN tb_sampah smph ON smph.id_sampah = tr.id_sampah
        WHERE tr.id_user = '".$_SESSION['id_user']."'";    

$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);

$saldo = $data['saldo'];


$sql2 = "SELECT sum(smph.harga_barang) as pengurangan 
        FROM tb_penukaran tr
        INNER JOIN tb_barang smph ON smph.id_barang = tr.id_barang
        WHERE tr.id_user = '".$_SESSION['id_user']."'";    

$result2 = mysqli_query($conn, $sql2);
$data2 = mysqli_fetch_array($result2);

$pengurangan = $data2['pengurangan'];

?>

<section data-bs-version="5.1" class="image1 cid-taIdNSqZas" id="image1-2i">
    <div class="container">
        <form method="POST" action="controller.php">
            <div class="row align-items-center">
            <input type="hidden" name="form_name" value="tukar">
                <div class="col-9"></div>
                <div class="col-3 align-right">
                    <p style="font-size:30px;"> <label>Saldo Anda: <?=($saldo - $pengurangan) ?></label></p>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="assets/images/kaos.jpeg">
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>Kaos Keren</strong></h3>
                            <p>
                                <label>Harga: 75.000 </label><br><br>
                                <label>UKURAN &nbsp;</label>
	                                <select name='ukuran'>
                                        <option> Pilih Ukuran </option>
		                                <option value='S'>S</option>
		                                <option value='M'>M</option>
		                                <option value='L'>L</option>
		                                <option value='XL'>XL</option>
	                                </select>
	                        </p>
                            <p>
                                <label>WARNA &nbsp;</label>
	                                <select name='warna'>
                                        <option> Pilih Warna </option>
		                                <option value='hitam'>HITAM</option>
		                                <option value='putih'>PUTIH</option>
		                                <option value='merah'>MERAH</option>
		                                <option value='biru'>BIRU</option>
                                        <option value='abu'>ABU-ABU</option>
	                                </select>
	                        </p>
                            <p>
                                <label>ALAMAT &nbsp;</label>
                                    <input type="text" name="alamat" placeholder="Masukan Alamat Pengiriman">
                            </p>
                    </div>
                    <button type="submit" class="btn first" name="tkr_kaos">Tukarkan</button>
                </div>
            </div>
        </form>
    </div>
</section>

<section data-bs-version="5.1" class="footer4 cid-t8fDxZZ03Z" once="footers" id="footer4-2b">
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
                <p class="mbr-text mbr-fonts-style mb-4 display-4">"Recyclebette berawal dari keresahan akan sampah yang semakin banyak dan belum ada cara 
                    untuk mengolahnya secara efektif dan efisien maka dari itu kami ada untuk menjadikan bumi lebih baik untuk setiap generasi".
                    <br><em>-Founder Recyclebetter-</em></p>
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
</section>

<section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/2793116" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7"></p><a style="z-index:1" href="https://mobirise.com/website-maker.html"></a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
</body>
</html>