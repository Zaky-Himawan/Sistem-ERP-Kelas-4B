<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO tperancangan (tanggal, nama_produk, jumlah, deskripsi)
                                     VALUES ('$_POST[ttanggal]',
                                             '$_POST[tnama_produk]',
                                             '$_POST[tjumlah]',
                                             '$_POST[tdeskripsi]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../perancangan_produk.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../perancangan_produk.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE tperancangan SET
                                    tanggal = '$_POST[ttanggal]',
                                    nama_produk = '$_POST[tnama_produk]',
                                    jumlah = '$_POST[tjumlah]',
                                    deskripsi = '$_POST[tdeskripsi]'
                                  WHERE id_perancangan = '$_POST[id_perancangan]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../perancangan_produk.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../perancangan_produk.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM tperancangan WHERE id_perancangan = '$_POST[id_perancangan]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../perancangan_produk.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../perancangan_produk.php';
              </script>";
    }
}

?>
