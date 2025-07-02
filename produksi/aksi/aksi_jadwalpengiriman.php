<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO jadwal_pengiriman (id_sales_order, tanggal_pengiriman, status)
                                     VALUES ('$_POST[id_sales_order]',
                                             '$_POST[tanggal_pengiriman]',
                                             '$_POST[status]')");
                                             

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../jadwal_pengiriman.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../jadwal_pengiriman.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE jadwal_pengiriman SET
                                    id_sales_order = '$_POST[id_sales_order]',
                                    tanggal_pengiriman = '$_POST[tanggal_pengiriman]',
                                    status = '$_POST[status]'
                                  WHERE id_jadwal = '$_POST[id_jadwal]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../jadwal_pengiriman.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../jadwal_pengiriman.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM jadwal_pengiriman WHERE id_jadwal = '$_POST[id_jadwal]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../jadwal_pengiriman.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../jadwal_pengiriman.php';
              </script>";
    }
}

?>
