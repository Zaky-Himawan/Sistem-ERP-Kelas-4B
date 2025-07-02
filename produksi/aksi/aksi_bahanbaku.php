<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO tbahanbaku (tanggal, nama_bahanbaku, jumlah, status)
                                     VALUES ('$_POST[ttanggal]',
                                             '$_POST[tnama_bahanbaku]',
                                             '$_POST[tjumlah]',
                                             '$_POST[tstatus]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../permintaan_bahan_baku.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../permintaan_bahan_baku.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($koneksi, "UPDATE tbahanbaku SET
                                    tanggal = '$_POST[ttanggal]',
                                    nama_bahanbaku = '$_POST[tnama_bahanbaku]',
                                    jumlah = '$_POST[tjumlah]',
                                    status = '$_POST[tstatus]'
                                  WHERE id_bahanbaku = '$_POST[id_bahanbaku]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../permintaan_bahan_baku.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../permintaan_bahan_baku.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {

    $hapus = mysqli_query($koneksi, "DELETE FROM tbahanbaku WHERE id_bahanbaku = '$_POST[id_bahanbaku]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../permintaan_bahan_baku.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../permintaan_bahan_baku.php';
              </script>";
    }
}

?>
