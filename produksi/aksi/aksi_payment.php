<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO payment (amount, payment_date, payment_method, total, status)
                                     VALUES ('$_POST[amount]',
                                             '$_POST[payment_date]',
                                             '$_POST[payment_method]',
                                             '$_POST[total]',
                                             '$_POST[status]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../payment.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../payment.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE payment SET
                                    amount = '$_POST[amount]',
                                    payment_date = '$_POST[payment_date]',
                                    payment_method = '$_POST[payment_method]',
                                    total = '$_POST[total]',
                                    status = '$_POST[status]'
                                    WHERE id_payment = '$_POST[id_payment]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../payment.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../payment.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM payment WHERE id_payment = '$_POST[id_payment]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../payment.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../payment.php';
              </script>";
    }
}

?>
