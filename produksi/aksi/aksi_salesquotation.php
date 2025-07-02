<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO sales_quotation (id_sales_inquiry, id_customer, id_produk, total, status)
                                     VALUES ('$_POST[id_sales_inquiry]',
                                             '$_POST[id_customer]',
                                             '$_POST[id_produk]',
                                             '$_POST[total]',
                                             '$_POST[status]')");

                                             
    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../sales_quotation.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../sales_quotation.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE sales_quotation SET
                                    id_sales_quotation = '$_POST[id_sales_quotation]',
                                    id_sales_inquiry = '$_POST[id_sales_inquiry]',
                                    id_customer = '$_POST[id_customer]',
                                    id_produk = '$_POST[id_produk]',
                                    total = '$_POST[total]'
                                  WHERE id_sales_quotation = '$_POST[id_sales_quotation]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../sales_quotation.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../sales_quotation.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM sales_quotation WHERE id_sales_quotation = '$_POST[id_sales_quotation]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../sales_quotation.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../sales_quotation.php';
              </script>";
    }
}

?>
