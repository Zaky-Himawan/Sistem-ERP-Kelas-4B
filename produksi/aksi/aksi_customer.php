<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO customer (type_customer, name, address, phone, email)
                                     VALUES ('$_POST[type_customer]',
                                             '$_POST[name]',
                                             '$_POST[address]',
                                             '$_POST[phone]',
                                             '$_POST[email]')");
                                             

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../customer.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../customer.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE customer SET
                                    type_customer = '$_POST[type_customer]',
                                    name = '$_POST[name]',
                                    address = '$_POST[address]',
                                    phone = '$_POST[phone]',
                                    email = '$_POST[email]'
                                  WHERE id_customer = '$_POST[id_customer]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../customer.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../customer.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM customer WHERE id_customer = '$_POST[id_customer]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../customer.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../customer.php';
              </script>";
    }
}

?>
