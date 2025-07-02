<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO input_cash_bank (date, amount, type, description)
                                     VALUES ('$_POST[date]',
                                             '$_POST[amount]',
                                             '$_POST[type]',
                                             '$_POST[description]')");
                                             

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../input_cash_bank.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../input_cash_bank.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE input_cash_bank SET
                                    date = '$_POST[date]',
                                    amount = '$_POST[amount]',
                                    type = '$_POST[type]',
                                    description = '$_POST[description]'
                                    WHERE id_input_cash_bank = '$_POST[id_input_cash_bank]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../input_cash_bank.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../input_cash_bank.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM input_cash_bank WHERE id_input_cash_bank = '$_POST[id_input_cash_bank]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../input_cash_bank.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../input_cash_bank.php';
              </script>";
    }
}

?>
