<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO purchase_quotation (id_purchase_inquiry, id_vendor, date_purchase_quotation, list_of_material, total_price, valid_until, status)
                                     VALUES ('$_POST[id_purchase_inquiry]',
                                             '$_POST[id_vendor]',
                                             '$_POST[date_purchase_quotation]',
                                             '$_POST[list_of_material]',
                                             '$_POST[total_price]',
                                             '$_POST[valid_until]',
                                             '$_POST[status]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../purchase_quotation.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../purchase_quotation.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE purchase_quotation SET
                                    id_purchase_inquiry = '$_POST[id_purchase_inquiry]',
                                    id_vendor = '$_POST[id_vendor]',
                                    date_purchase_quotation = '$_POST[date_purchase_quotation]',
                                    list_of_material = '$_POST[list_of_material]',
                                    total_price = '$_POST[total_price]',
                                    valid_until = '$_POST[valid_until]',
                                    status = '$_POST[status]'
                                  WHERE id_purchase_quotation = '$_POST[id_purchase_quotation]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../purchase_quotation.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../purchase_quotation.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM purchase_quotation WHERE id_purchase_quotation = '$_POST[id_purchase_quotation]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../purchase_quotation.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../purchase_quotation.php';
              </script>";
    }
}

?>
