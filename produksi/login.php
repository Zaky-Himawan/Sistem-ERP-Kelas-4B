<?php
// Memulai sesi untuk manajemen login

// Menyertakan file koneksi database dan fungsi-fungsi yang diperlukan
include "koneksi/koneksi.php";
require 'function.php';

// Memeriksa apakah form login telah disubmit
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Melakukan query untuk memeriksa kredensial pengguna
    $cekkoneksi = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");

    // Menghitung jumlah baris yang cocok
    $hitung = mysqli_num_rows($cekkoneksi);

    // Jika ditemukan pengguna yang cocok
    if($hitung > 0){
        // Menetapkan session 'log' menjadi 'true' dan mengarahkan ke halaman utama
        $_SESSION['log'] = 'true';
        header('location:index.php');
    } else {
        // Jika tidak cocok, arahkan kembali ke halaman login
        header('location:login.php');
    }
}

// Memeriksa apakah pengguna sudah login, jika ya, arahkan ke halaman utama
if(isset($_SESSION['log'])){
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
        <!-- KODE TAMBAHAN UNTUK LATAR BELAKANG GAMBAR -->
        <style>
            body {
                /* Ganti 'URL_FOTO_ANDA.jpg' dengan path atau URL gambar Anda */
                background-image: url('data:image/jpeg;base64,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') !important;
                
                /* Memastikan gambar menutupi seluruh area latar belakang */
                background-size: cover !important;
                
                /* Memposisikan gambar di tengah */
                background-position: center !important;
                
                /* Mencegah gambar berulang */
                background-repeat: no-repeat !important;

                /* Menetapkan tinggi agar gambar memenuhi viewport */
                height: 100vh;
            }
            /* Menambahkan sedikit transparansi pada card agar gambar latar terlihat */
            .card {
                background-color: rgba(255, 255, 255, 0.9) !important;
            }
        </style>
        <!-- AKHIR DARI KODE TAMBAHAN -->

    </head>
    <body> <!-- Kelas bg-primary dihapus agar tidak menimpa background-image -->
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" autocomplete="off" />
                                                <label for="inputEmail">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary w-100" name="login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
