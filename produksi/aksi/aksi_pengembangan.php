<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO tpengembangan (tanggal, nama_produk, jumlah, status)
                                     VALUES ('$_POST[ttanggal]',
                                             '$_POST[tnama_produk]',
                                             '$_POST[tjumlah]',
                                             '$_POST[tstatus]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../pengembangan_produk.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../pengembangan_produk.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE tpengembangan SET
                                    tanggal = '$_POST[ttanggal]',
                                    nama_produk = '$_POST[tnama_produk]',
                                    jumlah = '$_POST[tjumlah]',
                                    status = '$_POST[tstatus]'
                                  WHERE id_pengembangan = '$_POST[id_pengembangan]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../pengembangan_produk.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../pengembangan_produk.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM tpengembangan WHERE id_pengembangan = '$_POST[id_pengembangan]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../pengembangan_produk.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../pengembangan_produk.php';
              </script>";
    }
}

?>
