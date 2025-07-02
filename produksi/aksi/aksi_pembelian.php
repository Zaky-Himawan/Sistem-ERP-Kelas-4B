<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO pembelian (id_vendor, id_order, unit_price, quantity, total)
                                     VALUES ('$_POST[id_vendor]',
                                             '$_POST[id_order]',
                                             '$_POST[unit_price]',
                                             '$_POST[quantity]',
                                             '$_POST[total]')");
                                             

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../pembelian.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../pembelian.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE pembelian SET
                                    id_vendor = '$_POST[id_vendor]',
                                    id_order = '$_POST[id_order]',
                                    unit_price = '$_POST[unit_price]',
                                    quantity = '$_POST[quantity]',
                                    total = '$_POST[total]'
                                    WHERE id_pembelian = '$_POST[id_pembelian]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../pembelian.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../pembelian.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM pembelian WHERE id_pembelian = '$_POST[id_pembelian]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../pembelian.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../pembelian.php';
              </script>";
    }
}

?>
