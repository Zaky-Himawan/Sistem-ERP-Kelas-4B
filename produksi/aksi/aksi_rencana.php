<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO trencana (tanggal, nama_produk, jumlah, harga_jual)
                                     VALUES ('$_POST[ttanggal]',
                                             '$_POST[tnama_produk]',
                                             '$_POST[tjumlah]',
                                             '$_POST[tharga_jual]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../rencana_produksi.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../rencana_produksi.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE trencana SET
                                    tanggal = '$_POST[ttanggal]',
                                    nama_produk = '$_POST[tnama_produk]',
                                    jumlah = '$_POST[tjumlah]',
                                    harga_jual = '$_POST[tharga_jual]'
                                  WHERE id_rencana = '$_POST[id_rencana]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../rencana_produksi.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../rencana_produksi.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM trencana WHERE id_rencana = '$_POST[id_rencana]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../rencana_produksi.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../rencana_produksi.php';
              </script>";
    }
}

?>
