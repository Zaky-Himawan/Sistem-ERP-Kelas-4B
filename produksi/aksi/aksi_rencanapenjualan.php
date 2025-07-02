<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO rencana_penjualan (id_rencana, id_produk, tanggal_penjualan, tanggal_mulai, tanggal_selesai, status)
                                     VALUES ('$_POST[id_rencana]',
                                             '$_POST[id_produk]',
                                             '$_POST[tanggal_penjualan]',
                                             '$_POST[tanggal_mulai]',
                                             '$_POST[tanggal_selesai]',
                                             '$_POST[status]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../rencana_penjualan.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../rencana_penjualan.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE rencana_penjualan SET
                                    id_produk = '$_POST[id_produk]',
                                    tanggal_penjualan = '$_POST[tanggal_penjualan]',
                                    tanggal_mulai = '$_POST[tanggal_mulai]',
                                    tanggal_selesai = '$_POST[tanggal_selesai]',
                                    status = '$_POST[status]'
                                  WHERE id_rencana = '$_POST[id_rencana]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../rencana_penjualan.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../rencana_penjualan.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM rencana_penjualan WHERE id_rencana = '$_POST[id_rencana]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../rencana_penjualan.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../rencana_penjualan.php';
              </script>";
    }
}

?>
