<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO pemasaran_produk (id_customer, nama_pemasanan, tanggal_mulai, tanggal_selesai, status)
                                     VALUES ('$_POST[id_customer]',
                                             '$_POST[nama_pemasanan]',
                                             '$_POST[tanggal_mulai]',
                                             '$_POST[tanggal_selesai]',
                                             '$_POST[status]')");
                                             

    if ($simpan) {  
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../pemasaran_produk.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../pemasaran_produk.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE pemasaran_produk SET
                                    id_customer = '$_POST[id_customer]',
                                    nama_pemasanan = '$_POST[nama_pemasanan]',
                                    tanggal_mulai = '$_POST[tanggal_mulai]',
                                    tanggal_selesai = '$_POST[tanggal_selesai]',
                                    status = '$_POST[status]'
                                  WHERE id_pemasaran = '$_POST[id_pemasaran]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../pemasaran_produk.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../pemasaran_produk.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM pemasaran_produk WHERE id_pemasaran = '$_POST[id_pemasaran]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../pemasaran_produk.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../pemasaran_produk.php';
              </script>";
    }
}

?>
