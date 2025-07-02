<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO sales_invoice (id_sales_order, date_invoice, status)
                                     VALUES ('$_POST[id_sales_order]',
                                             '$_POST[date_invoice]',
                                             '$_POST[status]')");
                                             

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../sales_invoice.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../sales_invoice.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE sales_invoice SET
                                    id_sales_invoice = '$_POST[id_sales_invoice]',
                                    id_sales_order = '$_POST[id_sales_order]',
                                    date_invoice = '$_POST[date_invoice]',
                                    status = '$_POST[status]'
                                  WHERE id_sales_invoice = '$_POST[id_sales_invoice]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../sales_invoice.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../sales_invoice.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM sales_invoice WHERE id_sales_invoice = '$_POST[id_sales_invoice]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../sales_invoice.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../sales_invoice.php';
              </script>";
    }
}

?>
