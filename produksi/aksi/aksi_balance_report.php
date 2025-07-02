<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO balance_report (report_date, total_assets, total_liabilities, total_equity)
                                     VALUES ('$_POST[report_date]',
                                             '$_POST[total_assets]',
                                             '$_POST[total_liabilities]',
                                             '$_POST[total_equity]')");
                                             

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../balance_report.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../balance_report.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE balance_report SET
                                    report_date = '$_POST[report_date]',
                                    total_assets = '$_POST[total_assets]',
                                    total_liabilities = '$_POST[total_liabilities]',
                                    total_equity = '$_POST[total_equity]'
                                    WHERE id_balance_report = '$_POST[id_balance_report]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../balance_report.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../balance_report.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM balance_report WHERE id_balance_report = '$_POST[id_balance_report]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../balance_report.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../balance_report.php';
              </script>";
    }
}

?>
