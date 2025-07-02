<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO produksi_marketing (id_produk, nama_produk, harga_price, biaya_produksi, category, stock)
                                     VALUES ('$_POST[id_produk]',
                                             '$_POST[nama_produk]',
                                             '$_POST[harga_price]',
                                             '$_POST[biaya_produksi]',
                                             '$_POST[category]',
                                             '$_POST[stock]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../produksi_marketing.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../produksi_marketing.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE produksi_marketing SET
                                    id_produk = '$_POST[id_produk]',
                                    nama_produk = '$_POST[nama_produk]',
                                    harga_price = '$_POST[harga_price]',
                                    biaya_produksi = '$_POST[biaya_produksi]',
                                    category = '$_POST[category]',
                                    stock = '$_POST[stock]'
                                  WHERE id_produk = '$_POST[id_produk]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../produksi_marketing.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../produksi_marketing.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM produksi_marketing WHERE id_produk = '$_POST[id_produk]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../produksi_marketing.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../produksi_marketing.php';
              </script>";
    }
}

?>
