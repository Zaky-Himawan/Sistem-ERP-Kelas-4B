<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO sales_inquiry (id_customer, tanggal_inquiry, status)
                                     VALUES (
                                             '$_POST[id_customer]',
                                             '$_POST[tanggal_inquiry]',
                                             '$_POST[status]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../sales_inquiry.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../sales_inquiry.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE sales_inquiry SET
                                    id_sales_inquiry = '$_POST[id_sales_inquiry]',
                                    tanggal_inquiry = '$_POST[tanggal_inquiry]',
                                    status = '$_POST[status]'
                                  WHERE id_sales_inquiry = '$_POST[id_sales_inquiry]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../sales_inquiry.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../sales_inquiry.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM sales_inquiry WHERE id_sales_inquiry = '$_POST[id_sales_inquiry]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../sales_inquiry.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../sales_inquiry.php';
              </script>";
    }
}

?>
