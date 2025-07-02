<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO request_for_quotation (id_purchase_requisition, id_vendor, date_rfq, list_of_material, total_price, valid_until, status)
                                     VALUES ('$_POST[id_purchase_requisition]',
                                             '$_POST[id_vendor]',
                                             '$_POST[date_rfq]',
                                             '$_POST[list_of_material]',
                                             '$_POST[total_price]',
                                             '$_POST[valid_until]',
                                             '$_POST[status]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../request_for_quotation.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../request_for_quotation.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE request_for_quotation SET
                                    id_purchase_requisition = '$_POST[id_purchase_requisition]',
                                    id_vendor = '$_POST[id_vendor]',
                                    date_rfq = '$_POST[date_rfq]',
                                    list_of_material = '$_POST[list_of_material]',
                                    total_price = '$_POST[total_price]',
                                    valid_until = '$_POST[valid_until]',
                                    status = '$_POST[status]'
                                  WHERE id_rfq = '$_POST[id_rfq]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../request_for_quotation.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../request_for_quotation.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM request_for_quotation WHERE id_rfq = '$_POST[id_rfq]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../request_for_quotation.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../rencana_penjrequest_for_quotationualan.php';
              </script>";
    }
}

?>
