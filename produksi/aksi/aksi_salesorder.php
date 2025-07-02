<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO sales_order (id_sales_order, id_sales_quotation, id_produk, tanggal_order, detail_order, status)
                                     VALUES ('$_POST[id_sales_order]',
                                             '$_POST[id_sales_quotation]',
                                             '$_POST[id_produk]',
                                             '$_POST[tanggal_order]',
                                             '$_POST[detail_order]',
                                             '$_POST[status]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../sales_order.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../sales_order.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE sales_order SET
                                    id_sales_order = '$_POST[id_sales_order]',
                                    id_sales_quotation = '$_POST[id_sales_quotation]',
                                    id_produk = '$_POST[id_produk]',
                                    tanggal_order = '$_POST[tanggal_order]',
                                    detail_order = '$_POST[detail_order]',
                                    status = '$_POST[status]'
                                  WHERE id_sales_order = '$_POST[id_sales_order]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../sales_order.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../sales_order.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM sales_order WHERE id_sales_order = '$_POST[id_sales_order]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../sales_order.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../sales_order.php';
              </script>";
    }
}

?>
