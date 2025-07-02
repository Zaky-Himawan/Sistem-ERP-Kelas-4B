<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO purchase_order (id_purchase_quotation, id_material, date_purchase_order, unit_price, total_order, shipping_method, description, expected_delivery_date, status)
                                     VALUES ('$_POST[id_purchase_quotation]',
                                             '$_POST[id_material]',
                                             '$_POST[date_purchase_order]',
                                             '$_POST[unit_price]',
                                             '$_POST[total_order]',
                                             '$_POST[shipping_method]',
                                             '$_POST[description]',
                                             '$_POST[expected_delivery_date]',
                                             '$_POST[status]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../purchase_order.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../purchase_order.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE purchase_order SET
                                    id_purchase_quotation = '$_POST[id_purchase_quotation]',
                                    id_material = '$_POST[id_material]',
                                    date_purchase_order = '$_POST[date_purchase_order]',
                                    unit_price = '$_POST[unit_price]',
                                    total_order = '$_POST[total_order]',
                                    shipping_method = '$_POST[shipping_method]',
                                    description = '$_POST[description]',
                                    expected_delivery_date = '$_POST[expected_delivery_date]',
                                    status = '$_POST[status]'
                                  WHERE id_purchase_order = '$_POST[id_purchase_order]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../purchase_order.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../purchase_order.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM purchase_order WHERE id_purchase_order = '$_POST[id_purchase_order]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../purchase_order.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../purchase_order.php';
              </script>";
    }
}

?>
