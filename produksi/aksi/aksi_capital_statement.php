<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO capital_statement (id_account, balance_date, opening_balance, closing_balance, net_income, owner_drawings, owner_investmen)
                                     VALUES ('$_POST[id_account]',
                                             '$_POST[balance_date]',
                                             '$_POST[opening_balance]',
                                             '$_POST[closing_balance]',
                                             '$_POST[net_income]',
                                             '$_POST[owner_drawings]',
                                             '$_POST[owner_investmen]')");
                                             

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../capital_statement.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../capital_statement.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE capital_statement SET
                                    id_account = '$_POST[id_account]',
                                    balance_date = '$_POST[balance_date]',
                                    opening_balance = '$_POST[opening_balance]',
                                    closing_balance = '$_POST[closing_balance]',
                                    net_income = '$_POST[net_income]',
                                    owner_drawings = '$_POST[owner_drawings]',
                                    owner_investmen = '$_POST[owner_investmen]'
                                    WHERE id_capital_statement = '$_POST[id_capital_statement]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../capital_statement.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../capital_statement.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM capital_statement WHERE id_capital_statement = '$_POST[id_capital_statement]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../capital_statement.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../capital_statement.php';
              </script>";
    }
}

?>
