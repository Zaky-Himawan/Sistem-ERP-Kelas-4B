<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO data_vendor (vendor_name, phone, email, address,  website)
                                     VALUES ('$_POST[vendor_name]',
                                             '$_POST[phone]',
                                             '$_POST[email]',
                                             '$_POST[address]',
                                             '$_POST[website]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../data_vendor.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../data_vendor.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE data_vendor SET
                                    vendor_name = '$_POST[vendor_name]',
                                    phone = '$_POST[phone]',
                                    email = '$_POST[email]',
                                    address = '$_POST[address]',
                                    website = '$_POST[website]'
                                  WHERE id_vendor = '$_POST[id_vendor]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../data_vendor.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../data_vendor.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM data_vendor WHERE id_vendor = '$_POST[id_vendor]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../data_vendor.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../data_vendor.php';
              </script>";
    }
}

?>
