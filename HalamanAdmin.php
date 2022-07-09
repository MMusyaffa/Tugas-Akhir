<?php
session_start();
include "koneksi/koneksi.php";

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
  <meta name="twitter:title" content="Halaman Admin">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/bumilogo-1.png" type="image/x-icon">
  <meta name="description" content="">
    
  
  <title>Halaman Admin</title>
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

td {
	border: 1px solid #CCCCCC;
	padding: 5px 15px;
    align: center;
}

table{
    width:100%;
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
  <section class="menu cid-t8hb3pvaYl" once="menu" id="MobiGaryMenu26-1v">
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

<?php
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);

    $sql2 = "SELECT *, ts.sampah as sampah FROM user INNER JOIN tb_transaksi tr ON id = id_user
                INNER JOIN tb_sampah ts on tr.id_sampah = ts.id_sampah";    
    $result2 = mysqli_query($conn, $sql2);
    
    $sql3 = "SELECT *, tb.nama_barang as nama_barang FROM user INNER JOIN tb_penukaran tr ON id = id_user
                INNER JOIN tb_barang tb on tr.id_barang = tb.id_barang";    
    $result3 = mysqli_query($conn, $sql3);
?>

<div class="container">
    <section data-bs-version="5.1" class="contacts2 cid-t9Ssfv2Cms" id="contacts2-1k">
        <table name="user" cellpadding="10">
        <p style="font-size:20px;"> <label>Informasi User</label></p>
            <tr>
                <td>Id</td>
                <td>Username</td>
                <td>Nama</td>
                <td>No. Telphone</td>
                <td>Email</td>
                <td>Gender</td>
            </tr>
<?php
     while($data = mysqli_fetch_array($result)){
?>
            <tr>
                <td><?=$data['id']?></td>
                <td><?=$data['username']?></td>
                <td><?=$data['fullname']?></td>
                <td><?=$data['phonenumber']?></td>
                <td><?=$data['email']?></td>
                <td><?=$data['gender']?></td>
            </tr>
<?php
     }
?>
        </table>

        <br>
        <br>
        <br>
        <table name="user" cellpadding="10">
        <p style="font-size:20px;"> <label>Informasi Pengumpulan Sampah Oleh User</label></p>
            <tr>
                <td>Id</td>
                <td>Username</td>
                <td>Jenis Sampah</td>
                <td>Kuantitas</td>
            </tr>
<?php
     while($data = mysqli_fetch_array($result2)){
?>
            <tr>
                <td><?=$data['id']?></td>
                <td><?=$data['username']?></td>
                <td><?=$data['sampah']?></td>
                <td><?=$data['kuantitas']?></td>
            </tr>
<?php
     }
?>
        </table>

        <br>
        <br>
        <br>
        <table name="user" cellpadding="10">
        <p style="font-size:20px;"> <label>Informasi Penukaran Hadiah Oleh User</label></p>
            <tr>
                <td>Id</td>
                <td>Username</td>
                <td>Barang</td>
                <td>Harga</td>
            </tr>
        
<?php
     while($data = mysqli_fetch_array($result3)){
?>
            <tr>
                <td><?=$data['id']?></td>
                <td><?=$data['username']?></td>
                <td><?=$data['nama_barang']?></td>
                <td><?=$data['harga_barang']?></td>
            </tr>
<?php
     }
?>
        </table>


        
    </section>
</div>

<section data-bs-version="5.1" class="footer4 cid-t8fDxZZ03Z" once="footers" id="footer4-1w">
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