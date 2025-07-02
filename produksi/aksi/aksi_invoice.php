<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO invoice (issuedate, number, duedate, total)
                                     VALUES ('$_POST[issuedate]',
                                             '$_POST[number]',
                                             '$_POST[duedate]',
                                             '$_POST[total]')");
                                             

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../invoice.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../invoice.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE invoice SET
                                    issuedate = '$_POST[issuedate]',
                                    number = '$_POST[number]',
                                    duedate = '$_POST[duedate]',
                                    total = '$_POST[total]'
                                    WHERE id_invoice = '$_POST[id_invoice]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../invoice.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../invoice.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM invoice WHERE id_invoice = '$_POST[id_invoice]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../invoice.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../invoice.php';
              </script>";
    }
}

?>
