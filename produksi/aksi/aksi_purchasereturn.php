<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO purchase_return (id_purchase_order, id_material, date_purchase_return, total_material, total_price, payment_method, description, reason_for_return, status)
                                     VALUES ('$_POST[id_purchase_order]',
                                             '$_POST[id_material]',
                                             '$_POST[date_purchase_return]',
                                             '$_POST[total_material]',
                                             '$_POST[total_price]',
                                             '$_POST[payment_method]',
                                             '$_POST[description]',
                                             '$_POST[reason_for_return]',
                                             '$_POST[status]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../purchase_return.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../purchase_return.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE purchase_return SET
                                    id_purchase_order = '$_POST[id_purchase_order]',
                                    id_material = '$_POST[id_material]',
                                    date_purchase_return = '$_POST[date_purchase_return]',
                                    total_material = '$_POST[total_material]',
                                    total_price = '$_POST[total_price]',
                                    payment_method = '$_POST[payment_method]',
                                    description = '$_POST[description]',
                                    reason_for_return = '$_POST[reason_for_return]',
                                    status = '$_POST[status]'
                                  WHERE id_purchase_return = '$_POST[id_purchase_return]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../purchase_return.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../purchase_return.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM purchase_return WHERE id_purchase_return = '$_POST[id_purchase_return]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../purchase_return.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../purchase_return.php';
              </script>";
    }
}

?>
