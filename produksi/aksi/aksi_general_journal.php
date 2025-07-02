<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO general_journal (id_account, date, description, debit, credit, created_at, updated_at)
                                     VALUES ('$_POST[id_account]',
                                             '$_POST[date]',
                                             '$_POST[description]',
                                             '$_POST[debit]',
                                             '$_POST[credit]',
                                             '$_POST[created_at]',
                                             '$_POST[updated_at]')");
                                             

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../general_journal.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../general_journal.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE general_journal SET
                                    id_account = '$_POST[id_account]',
                                    date = '$_POST[date]',
                                    description = '$_POST[description]', 
                                    debit = '$_POST[debit]',
                                    credit = '$_POST[credit]',
                                    created_at = '$_POST[created_at]',
                                    updated_at = '$_POST[updated_at]'
                                    WHERE id_general_journal = '$_POST[id_general_journal]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../general_journal.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../general_journal.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM general_journal WHERE id_general_journal = '$_POST[id_general_journal]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../general_journal.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../general_journal.php';
              </script>";
    }
}

?>
