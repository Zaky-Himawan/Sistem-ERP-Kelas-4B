<?php

include "../koneksi/koneksi.php";

// Simpan Data
if (isset($_POST['bsimpan'])) {
    $simpan = mysqli_query($koneksi, "INSERT INTO tbiaya (tanggal, biaya_bahanbaku, biaya_overhead_produksi, biaya_tenaga_kerja)
                                     VALUES ('$_POST[ttanggal]',
                                             '$_POST[tbiaya_bahanbaku]',
                                             '$_POST[tbiaya_overhead_produksi]',
                                             '$_POST[tbiaya_tenaga_kerja]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='../laporan_biaya.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='../laporan_biaya.php';
              </script>";
    }
}

// Ubah Data
if (isset($_POST['bubah'])) {
    $ubah = mysqli_query($koneksi, "UPDATE tbiaya SET
                                    tanggal = '$_POST[ttanggal]',
                                    biaya_bahanbaku = '$_POST[tbiaya_bahanbaku]',
                                    biaya_overhead_produksi = '$_POST[tbiaya_overhead_produksi]',
                                    biaya_tenaga_kerja = '$_POST[tbiaya_tenaga_kerja]'
                                  WHERE id_laporan_biaya = '$_POST[id_laporan_biaya]'");

    if ($ubah) {
        echo "<script>
                alert('Simpan Ubah Data Sukses!');
                document.location='../laporan_biaya.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Ubah Data Gagal!');
                document.location='../laporan_biaya.php';
              </script>";
    }
}

// Hapus Data
if (isset($_POST['bhapus'])) {
    $hapus = mysqli_query($koneksi, "DELETE FROM tbiaya WHERE id_laporan_biaya = '$_POST[id_laporan_biaya]'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='../laporan_biaya.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='../laporan_biaya.php';
              </script>";
    }
}

?>
