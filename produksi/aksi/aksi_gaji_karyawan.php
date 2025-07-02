<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO gaji_karyawan (nama_karyawan, payroll_period)
                                     VALUES ('$_POST[nama_karyawan]',
                                             '$_POST[payroll_period]')");
                                             

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../gaji_karyawan.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../gaji_karyawan.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE gaji_karyawan SET
                                    nama_karyawan = '$_POST[nama_karyawan]',
                                    payroll_period = '$_POST[payroll_period]'
                                    WHERE id_gaji_karyawan = '$_POST[id_gaji_karyawan]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../gaji_karyawan.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../gaji_karyawan.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM gaji_karyawan WHERE id_gaji_karyawan = '$_POST[id_gaji_karyawan]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../gaji_karyawan.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../gaji_karyawan.php';
              </script>";
    }
}

?>
