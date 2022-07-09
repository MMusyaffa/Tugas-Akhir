<?php
session_start();
include 'koneksi/koneksi.php';

if(isset($_POST["form_name"])){

    $form_name = $_POST["form_name"];

    #DAFTAR
    if ($form_name == "signupform"){
        $fullname = $_POST["fullname"];
        $phonenumber = $_POST["phone"];
        $gender = $_POST["gender"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];

        $sql = "INSERT INTO user (fullname, phonenumber, gender, username, email, password) 
                VALUES 
                ('$fullname', '$phonenumber', '$gender', '$username', '$email', '$password')";

            if (mysqli_query($conn, $sql)) {
                echo "<script> 
                        alert('Anda akan di arahkan ke halaman login');
                        document.location.href = 'login.php';
                      </script>";
            } else {
                echo "<script> 
                        alert('Pendaftaran Gagal, Silahkan ulangi pendaftaran');
                        document.location.href = 'daftar.php';
                      </script>" . mysqli_error($conn);
            }
    }
    #LOGIN
    else if($form_name == "loginform"){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM user
                WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
            if ($result) {
                $data = mysqli_fetch_array($result);
                $_SESSION["id_user"] = $data['id'];

                #LOGIN ADMIN
                if($data['status'] == "admin"){
                    $_SESSION['username'] = $username;
	                $_SESSION['status'] = "admin";

                    header("location:HalamanAdmin.php");
                }

                #LOGIN USER
                else if($data['status'] == "user"){
                    $_SESSION['username'] = $username;
	                $_SESSION['status'] = "user";

                    header("location:Beranda.php");
                }

                #LOGIN USER BARU
                else if($data['status'] == ""){
                    $_SESSION['username'] = $username;
	                $_SESSION['status'] = "";

                    header("location:Beranda.php");

            } else {
                echo "<script> 
                        alert('Login Gagal, Silahkan Login ulang');
                        document.location.href = 'login.php';
                      </script>" . mysqli_error($conn);
            }
            }   
    }
    #LOG OUT
    else if($form_name == "logoutform"){
        session_destroy();
        header("location:index.php");
    }
    #Pengumpulan Sampah
    #Plastik
     else if($form_name == "kumpulkan"){    
        if(isset($_POST['plastik_qty']) && $_POST['plastik_qty'] > 0){
            $plastik_qty = $_POST['plastik_qty'];
            $sql = "INSERT INTO tb_transaksi (id_user, id_sampah, kuantitas) 
                VALUES 
                (".$_SESSION['id_user'].", 1, $plastik_qty)";
            if (mysqli_query($conn, $sql)) {
                header("location:kumDatadiripulkan.php");
            } else {
                echo alert("Pendaftaran Tidak Berhasil : " . mysqli_error($conn));
            }
        }
    }   
        #Kaleng
        if (isset($_POST['kaleng_qty']) && $_POST['kaleng_qty'] > 0){
            $kaleng_qty = $_POST['kaleng_qty'];
            $sql = "INSERT INTO tb_transaksi (id_user, id_sampah, kuantitas) 
                VALUES 
                (".$_SESSION['id_user'].", 2, $kaleng_qty)";
            if (mysqli_query($conn, $sql)) {
                header("location:Datadiri.php");
            } else {
                echo alert("Pendaftaran Tidak Berhasil : " . mysqli_error($conn));
            }
        } 
        #Sterooam
        if (isset($_POST['sterofoam_qty']) && $_POST['sterofoam_qty'] > 0){
            $sterofoam_qty = $_POST['sterofoam_qty'];
            $sql = "INSERT INTO tb_transaksi (id_user, id_sampah, kuantitas) 
                VALUES 
                (".$_SESSION['id_user'].", 3, $sterofoam_qty)";
            if (mysqli_query($conn, $sql)) {
                header("location:Datadiri.php");
            } else {
                echo alert("Pendaftaran Tidak Berhasil : " . mysqli_error($conn));
            }
        }
         
        #Kain
        if (isset($_POST['kain_qty']) && $_POST['kain_qty'] > 0){
            $kain_qty = $_POST['kain_qty'];
            $sql = "INSERT INTO tb_transaksi (id_user, id_sampah, kuantitas) 
                VALUES 
                (".$_SESSION['id_user'].", 4, $kain_qty)";
            if (mysqli_query($conn, $sql)) {
                header("location:Datadiri.php");
            } else {
                echo alert("Pendaftaran Tidak Berhasil : " . mysqli_error($conn));
            }
        }

         #Kaca
         if (isset($_POST['kaca_qty']) && $_POST['kaca_qty'] > 0){
            $kaca_qty = $_POST['kaca_qty'];
            $sql = "INSERT INTO tb_transaksi (id_user, id_sampah, kuantitas) 
                VALUES 
                (".$_SESSION['id_user'].", 5, $kaca_qty)";
            if (mysqli_query($conn, $sql)) {
                header("location:Datadiri.php");
            } else {
                echo alert("Pendaftaran Tidak Berhasil : " . mysqli_error($conn));
            }
         }
    #Penukaran Hadiah
    #KAOS
    else if($form_name == "tukar"){    
        if(isset($_POST['tkr_kaos'])) {
            $tkr_kaos = $_POST['tkr_kaos'];
            $sql = "INSERT INTO tb_penukaran (id_user, id_barang) 
                VALUES 
                (".$_SESSION['id_user'].", 1 )";
            if (mysqli_query($conn, $sql)) {
                header("location:Datadiri.php");
            } else {
                echo alert("Penarikan Gagal : " . mysqli_error($conn));
            }
        }
        #TOPI
        if(isset($_POST['tkr_topi'])) {
            $tkr_topi = $_POST['tkr_topi'];
            $sql = "INSERT INTO tb_penukaran (id_user, id_barang) 
                VALUES 
                (".$_SESSION['id_user'].", 2 )";
            if (mysqli_query($conn, $sql)) {
                header("location:Datadiri.php");
            } else {
                echo alert("Penarikan Gagal : " . mysqli_error($conn));
            }
        }
        #TOTEBAG
        if(isset($_POST['tkr_totebag'])) {
            $tkr_totebag = $_POST['tkr_totebag'];
            $sql = "INSERT INTO tb_penukaran (id_user, id_barang) 
                VALUES 
                (".$_SESSION['id_user'].", 3 )";
            if (mysqli_query($conn, $sql)) {
                header("location:Datadiri.php");
            } else {
                echo alert("Penarikan Gagal : " . mysqli_error($conn));
            }
        }
        #EWALLET
        if(isset($_POST['tkr_ewallet'])) {
            $tkr_ewallet = $_POST['tkr_ewallet'];
            $sql = "INSERT INTO tb_penukaran (id_user, id_barang) 
                VALUES 
                (".$_SESSION['id_user'].", 4 )";
            if (mysqli_query($conn, $sql)) {
                header("location:Datadiri.php");
            } else {
                echo alert("Penarikan Gagal : " . mysqli_error($conn));
            }
        }
    }

}


mysqli_close($conn);

?>