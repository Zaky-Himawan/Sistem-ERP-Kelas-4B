<?php
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
        
        <!-- KODE CSS BARU UNTUK MENYESUAIKAN TAMPILAN -->
        <style>
            body {
                /* URL gambar latar belakang diperbarui */
                background-image: url('https://storage.googleapis.com/pkg-portal-bucket/images/news/2023-10/petrokimia-gresik-komitmen-dukung-pengembangan-energi-bersih-tanah-air-lewat-green-hydrogen-green-ammonia/Area-Pabrik-1A-Petrokimia-Gresik.jpeg') !important;
                background-size: cover !important;
                background-position: center !important;
                background-repeat: no-repeat !important;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                
                /* Menjadikan body sebagai flex container untuk centering */
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                margin: 0;
            }

            #layoutAuthentication {
                width: 100%;
            }

            /* Mengubah kartu login menjadi gelap dan lebih transparan */
            .card {
                top: 160px;
                background-color: rgba(45, 45, 45, 0.8) !important; 
                border-radius: 15px !important;
                border: none !important;
                box-shadow: 0 0 25px rgba(0,0,0,0.5) !important;
            }

            /* Menghapus latar belakang dan border header kartu */
            .card-header {
                background-color: transparent !important;
                border-bottom: none !important;
                padding: 2rem 2rem 1rem 2rem;
            }

            /* Mengubah warna teks judul menjadi putih */
            .card-header h3 {
                color: #ffffff !important;
                font-weight: 600 !important;
            }

            .card-body {
                padding: 1rem 2rem 2rem 2rem;
            }

            /* Mengubah gaya input field */
            .form-control {
                background-color: #333333 !important;
                color: #ffffff !important;
                border: 1px solid #555555 !important;
                border-radius: 8px !important;
            }
            .form-control:focus {
                background-color: #333333 !important;
                color: #ffffff !important;
                border-color: #bbbbbb !important;
                box-shadow: none !important;
            }

            /* Mengubah warna teks label pada form floating */
            .form-floating > label {
                color: #bbbbbb !important;
            }

            /* Mengubah gaya tombol login */
            .btn-primary {
                background-color: #e0e0e0 !important;
                color: #111111 !important;
                border: none !important;
                font-weight: bold !important;
                padding-top: 0.75rem;
                padding-bottom: 0.75rem;
                border-radius: 8px !important;
            }
            .btn-primary:hover {
                background-color: #ffffff !important;
                color: #000000 !important;
            }
        </style>
        <!-- AKHIR DARI KODE CSS BARU -->

    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg">
                                    <div class="card-header"><h3 class="text-center font-weight-light">Login</h3></div>
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
