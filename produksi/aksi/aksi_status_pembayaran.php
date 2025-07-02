<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO status_pembayaran (id_order, purchase_date, total_amount)
                                     VALUES ('$_POST[id_order]',
                                             '$_POST[purchase_date]',
                                             '$_POST[total_amount]')");
                                             

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../status_pembayaran.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../status_pembayaran.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE status_pembayaran SET
                                    id_order = '$_POST[id_order]',
                                    purchase_date = '$_POST[purchase_date]',
                                    total_amount = '$_POST[total_amount]'
                                    WHERE id_status_pembayaran = '$_POST[id_status_pembayaran]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../status_pembayaran.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../status_pembayaran.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM status_pembayaran WHERE id_status_pembayaran = '$_POST[id_status_pembayaran]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../status_pembayaran.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../status_pembayaran.php';
              </script>";
    }
}

?>
