<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO input_sales (id_order, date, amount)
                                     VALUES ('$_POST[id_order]',
                                             '$_POST[date]',
                                             '$_POST[amount]')");
                                             

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../input_sales.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../input_sales.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE input_sales SET
                                    id_order = '$_POST[id_order]',
                                    date = '$_POST[date]',
                                    amount = '$_POST[amount]'
                                    WHERE id_input_sales = '$_POST[id_input_sales]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../input_sales.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../input_sales.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM input_sales WHERE id_input_sales = '$_POST[id_input_sales]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../input_sales.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../input_sales.php';
              </script>";
    }
}

?>
