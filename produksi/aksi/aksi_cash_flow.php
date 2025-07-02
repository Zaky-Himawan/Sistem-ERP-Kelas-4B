<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO cash_flow (date, amount, type, description, created, updated)
                                     VALUES ('".$_POST['date']."',
                                             '".$_POST['amount']."',
                                             '".$_POST['type']."',
                                             '".$_POST['description']."',
                                             '".$_POST['created']."',
                                             '".$_POST['updated']."')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../cash_flow.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../cash_flow.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE cash_flow SET
                                    date = '".$_POST['date']."',
                                    amount = '".$_POST['amount']."',
                                    type = '".$_POST['type']."',
                                    description = '".$_POST['description']."',
                                    created = '".$_POST['created']."',
                                    updated = '".$_POST['updated']."'
                                    WHERE id_cash_flow = '".$_POST['id_cash_flow']."'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../cash_flow.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../cash_flow.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM cash_flow WHERE id_cash_flow = '".$_POST['id_cash_flow']."'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../cash_flow.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../cash_flow.php';
              </script>";
    }
}

?>
