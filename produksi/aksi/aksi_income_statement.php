<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO income_statement (start_date, end_date, total_income, total_expense, net_income)
                                     VALUES ('$_POST[start_date]',
                                             '$_POST[end_date]',
                                             '$_POST[total_income]',
                                             '$_POST[total_expense]',
                                             '$_POST[net_income]')");
                                             

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../income_statement.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../income_statement.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE income_statement SET
                                    start_date = '$_POST[start_date]',
                                    end_date = '$_POST[end_date]',
                                    total_income = '$_POST[total_income]',
                                    total_expense = '$_POST[total_expense]',
                                    net_income = '$_POST[net_income]'
                                    WHERE id_income_statement = '$_POST[id_income_statement]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../income_statement.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../income_statement.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM income_statement WHERE id_income_statement = '$_POST[id_income_statement]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../income_statement.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../income_statement.php';
              </script>";
    }
}

?>
