<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO purchase_requisition (id_user_request, date_purchase_requisition, departement, status)
                                     VALUES ('$_POST[id_user_request]',
                                             '$_POST[date_purchase_requisition]',
                                             '$_POST[departement]',
                                             '$_POST[status]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../purchase_requisition.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../purchase_requisition.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE purchase_requisition SET
                                    id_user_request = '$_POST[id_user_request]',
                                    date_purchase_requisition = '$_POST[date_purchase_requisition]',
                                    departement = '$_POST[departement]',
                                    status = '$_POST[status]'
                                  WHERE id_purchase_requisition = '$_POST[id_purchase_requisition]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../purchase_requisition.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../purchase_requisition.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM purchase_requisition WHERE id_purchase_requisition = '$_POST[id_purchase_requisition]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../purchase_requisition.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../purchase_requisition.php';
              </script>";
    }
}

?>
