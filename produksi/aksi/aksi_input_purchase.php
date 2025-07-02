<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO input_purchase (id_order, date, amount)
                                     VALUES ('$_POST[id_order]',
                                             '$_POST[date]',
                                             '$_POST[amount]')");
                                             

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../input_purchase.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../input_purchase.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE input_purchase SET
                                    id_order = '$_POST[id_order]',
                                    date = '$_POST[date]',
                                    amount = '$_POST[amount]'
                                    WHERE id_input_purchase = '$_POST[id_input_purchase]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../input_purchase.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../input_purchase.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM input_purchase WHERE id_input_purchase = '$_POST[id_input_purchase]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../input_purchase.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../input_purchase.php';
              </script>";
    }
}

?>
