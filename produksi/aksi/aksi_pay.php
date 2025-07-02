<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {
    $simpan = mysqli_query($koneksi, "INSERT INTO pay (id_purchase_order, id_user, date, amount_paid, status, created_at)
                                       VALUES ('$_POST[id_purchase_order]',
                                               '$_POST[id_user]',
                                               '$_POST[date]',
                                               '$_POST[amount_paid]',
                                               '$_POST[status]',
                                               NOW())"); // Use NOW() for created_at

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../pay.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../pay.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {
    $ubah = mysqli_query($koneksi, "UPDATE pay SET
                                    id_purchase_order = '$_POST[id_purchase_order]',
                                    id_user = '$_POST[id_user]',
                                    date = '$_POST[date]',
                                    amount_paid = '$_POST[amount_paid]',
                                    status = '$_POST[status]',
                                    created_at = '$_POST[created_at]'  -- Added comma here
                                    WHERE id_pay = '$_POST[id_pay]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../pay.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../pay.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {
    $hapus = mysqli_query($koneksi, "DELETE FROM pay WHERE id_pay = '$_POST[id_pay]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../pay.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../pay.php';
              </script>";
    }
}

?>
