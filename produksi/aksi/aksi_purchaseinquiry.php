<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO purchase_inquiry (id_request_quotation, id_vendor, date_purchase_inquiry, status)
                                     VALUES ('$_POST[id_request_quotation]',
                                             '$_POST[id_vendor]',
                                             '$_POST[date_purchase_inquiry]',
                                             '$_POST[status]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../purchase_inquiry.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../purchase_inquiry.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE purchase_inquiry SET
                                    id_request_quotation = '$_POST[id_request_quotation]',
                                    id_vendor = '$_POST[id_vendor]',
                                    date_purchase_inquiry = '$_POST[date_purchase_inquiry]',
                                    status = '$_POST[status]'
                                  WHERE id_purchase_inquiry = '$_POST[id_purchase_inquiry]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../purchase_inquiry.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../purchase_inquiry.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM purchase_inquiry WHERE id_purchase_inquiry = '$_POST[id_purchase_inquiry]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../purchase_inquiry.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../purchase_inquiry.php';
              </script>";
    }
}

?>
