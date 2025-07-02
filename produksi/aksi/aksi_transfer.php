<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO ttransfer (tanggal_pengiriman, nama_produk, jumlah, gudang_tujuan, status)
                                     VALUES ('$_POST[ttanggal_pengiriman]',
                                             '$_POST[tnama_produk]',
                                             '$_POST[tjumlah]',
                                             '$_POST[tgudang_tujuan]',
                                             '$_POST[tstatus]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../transfer.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../transfer.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE ttransfer SET
                                    tanggal_pengiriman = '$_POST[ttanggal_pengiriman]',
                                    nama_produk = '$_POST[tnama_produk]',
                                    jumlah = '$_POST[tjumlah]',
                                    gudang_tujuan = '$_POST[tgudang_tujuan]',
                                    status = '$_POST[tstatus]'
                                  WHERE id_pengiriman_barang_jadi = '$_POST[id_pengiriman_barang_jadi]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../transfer.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../transfer.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM ttransfer WHERE id_pengiriman_barang_jadi = '$_POST[id_pengiriman_barang_jadi]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../transfer.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../transfer.php';
              </script>";
    }
}

?>
