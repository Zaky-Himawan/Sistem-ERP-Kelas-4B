<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO input_cost (category, date, amount, description)
                                     VALUES ('$_POST[category]',
                                             '$_POST[date]',
                                             '$_POST[amount]',
                                             '$_POST[description]')");
                                             

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../input_cost.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../input_cost.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE input_cost SET
                                    category = '$_POST[category]',
                                    date = '$_POST[date]',
                                    amount = '$_POST[amount]',
                                    description = '$_POST[description]'
                                    WHERE id_input_cost = '$_POST[id_input_cost]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../input_cost.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../input_cost.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM input_cost WHERE id_input_cost = '$_POST[id_input_cost]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../input_cost.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../input_cost.php';
              </script>";
    }
}

?>
