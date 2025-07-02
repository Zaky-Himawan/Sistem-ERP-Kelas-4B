<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO tinspeksi (tanggal, nama_produk, jumlah, status)
                                     VALUES ('$_POST[ttanggal]',
                                             '$_POST[tnama_produk]',
                                             '$_POST[tjumlah]',
                                             '$_POST[tstatus]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../inspeksi.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../inspeksi.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE tinspeksi SET
                                    tanggal = '$_POST[ttanggal]',
                                    nama_produk = '$_POST[tnama_produk]',
                                    jumlah = '$_POST[tjumlah]',
                                    status = '$_POST[tstatus]'
                                  WHERE id_sortir_dan_inspeksi = '$_POST[id_sortir_dan_inspeksi]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../inspeksi.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../inspeksi.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM tinspeksi WHERE id_sortir_dan_inspeksi = '$_POST[id_sortir_dan_inspeksi]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../inspeksi.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../inspeksi.php';
              </script>";
    }
}

?>
