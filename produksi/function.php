<?php
session_start();
$conn = mysqli_connect("localhost","root","","marketing");

//submit bahan
if(isset($_POST['submitbb'])){
    $namabahan = $_POST['nama_bahanbaku'];
    $stok = $_POST['stok'];
    
    $addtotable = mysqli_query($conn, "insert into bahan_baku (nama_bahanbaku, stok) values('$namabahan', '$stok')");
    if($addtotable){
        header('location:inv_bahanbaku.php');
    } else {
        echo'gagal';
        header ('location:inv_bahanbaku.php');
    }
};

//penerimaan bahan
if(isset($_POST['Terimabb'])){
    $bahan = $_POST['bahan'];
    $total = $_POST['total'];
    $penerima = $_POST['penerima'];

    $cekstok = mysqli_query($conn, "select * from bahan_baku where id_bahanbaku='$bahan'");
    $ambildata = mysqli_fetch_array($cekstok);

    $stoksekarang = $ambildata['stok'];
    $tambahstokdengantotal = $stoksekarang+$total;

    $addtopenerimaan = mysqli_query($conn,"insert into penerimaan_bb (id_bahanbaku, total, penerima) values('$bahan','$total','$penerima')");
    $updatestokpenerimaan = mysqli_query($conn, "update bahan_baku set stok='$tambahstokdengantotal' where id_bahanbaku='$bahan'");
    if($addtopenerimaan&&$updatestokpenerimaan){
        header('location:penerimaanbb.php');
    } else {
        echo'gagal';
        header ('location:penerimaanbb.php');
    }
}

//pengiriman bahan
if(isset($_POST['Kirimbb'])){
    $bahan = $_POST['bahan'];
    $total = $_POST['total'];
    $tujuan = $_POST['tujuan'];

    $cekstok = mysqli_query($conn, "select * from bahan_baku where id_bahanbaku='$bahan'");
    $ambildata = mysqli_fetch_array($cekstok);

    $stoksekarang = $ambildata['stok'];
    $tambahstokdengantotal = $stoksekarang-$total;

    $addtopengiriman = mysqli_query($conn,"insert into pengiriman_bb (id_bahanbaku, total, tujuan) values('$bahan','$total','$tujuan')");
    $updatestokpegiriman = mysqli_query($conn, "update bahan_baku set stok='$tambahstokdengantotal' where id_bahanbaku='$bahan'");
    if($addtopengiriman&&$updatestokpengiriman){
        header('location:pengirimanbb.php');
    } else {
        echo'gagal';
        header ('location:pengirimanbb.php');
    }
}

//update stok bahan
if(isset($_POST['updatebb'])){
    $idbahan = $_POST['idbahan'];
    $namabahan = $_POST['nama_bahanbaku'];
    $stok = $_POST['stok'];

    $update = mysqli_query($conn,"update bahan_baku set nama_bahanbaku='$namabahan', stok='$stok' where id_bahanbaku='$idbahan'");
    if($update){
        header('location:inv_bahanbaku.php');
    } else {
        echo'gagal';
        header ('location:inv_bahanbaku.php');
    }
}

//hapus stok bahan
if(isset($_POST['deletebb'])){
    $idbahan = $_POST['idbahan'];
    $hapus = mysqli_query($conn, "delete from bahan_baku where id_bahanbaku='$idbahan'");
    if($delete){
    header('location:inv_bahanbaku.php');
    } else {
        echo'gagal';
        header ('location:inv_bahanbaku.php');
    }
}

//update data penerimaan
if(isset($_POST['updatepenerimaanbb'])){
    $idbahan = $_POST['idbahan'];
    $idpenerimaan = $_POST['idpenerimaan'];
    $total = $_POST['total'];

    $cekstok = mysqli_query($conn,"select * from bahan_baku where id_bahanbaku='$idbahan'");
    $stoknya = mysqli_fetch_array($cekstok);
    $stoksaatini = $stoknya['stok'];

    $totalsaatini = mysqli_query($conn,"select * from penerimaan_bb where id_penerimaan_bahan_baku='$idpenerimaan'");
    $totalnya = mysqli_fetch_array($totalsaatini);
    $totalsaatini = $totalnya['total'];

    if($total>$totalsaatini){
        $selisih = $total-$totalsaatini;
        $kurangi = $stoksaatini-$selisih;
        $kurangistoknya = mysqli_query($conn,"update bahan_baku set stok='$kurangi' where id_bahanbaku='$idbahan'");
        $update = mysqli_query($conn,"update penerimaan_bb set total='$total' where id_penerimaan_bahan_baku='$idpenerimaan'");
            if($kurangistoknya&&$update){ 
            header('location:penerimaanbb.php');  
            } else {
                echo'gagal';
                header ('location:penerimaanbb.php');
            }
    } else{
        $selisih = $totalsaatini-$total; 
        $kurangi = $stoksaatini+$selisih;
        $kurangistoknya = mysqli_query($conn,"update bahan_baku set stok='$kurangi' where id_bahanbaku='$idbahan'");
        $update = mysqli_query($conn,"update penerimaan_bb set total='$total' where id_penerimaan_bahan_baku='$idpenerimaan'");
            if($kurangistoknya&&$update){ 
            header('location:penerimaanbb.php');  
            } else {
                echo'gagal';
                header ('location:penerimaanbb.php');
            }
    }
}

//hapus penerimaan
if(isset($_POST['hapuspenerimaanbb'])){
    $idbahan = $_POST['idbahan'];
    $total = $_POST['totalnya'];
    $idpenerimaan = $_POST['idpenerimaan'];

    $getdatastok = mysqli_query($conn, "select * from bahan_baku where id_bahanbaku='$idbahan'");
    $data = mysqli_fetch_array($getdatastok);
    $stok = $data['stok'];

    $selisih = $stok-$total;

    $update = mysqli_query($conn,"update bahan_baku set stok='$selisih' where id_bahanbaku='$idbahan'");
    $hapusdata = mysqli_query($conn,"delete from penerimaan_bb where id_penerimaan_bahan_baku='$idpenerimaan'");

    if($update&&$hapusdata){
        header('location:penerimaanbb.php');  
            } else {
                echo'gagal';
                header ('location:penerimaanbb.php');
            }
    }


//update data pengiriman
if(isset($_POST['updatepengirimanbb'])){
    $idbahan = $_POST['idbahan'];
    $idpengiriman = $_POST['idpengiriman'];
    $total = $_POST['total'];

    $cekstok = mysqli_query($conn,"select * from bahan_baku where id_bahanbaku='$idbahan'");
    $stoknya = mysqli_fetch_array($cekstok);
    $stoksaatini = $stoknya['stok'];

    $totalsaatini = mysqli_query($conn,"select * from pengiriman_bb where id_pengiriman_bahan_baku='$idpengiriman'");
    $totalnya = mysqli_fetch_array($totalsaatini);
    $totalsaatini = $totalnya['total'];

    if($total>$totalsaatini){
        $selisih = $total-$totalsaatini;
        $kurangi = $stoksaatini-$selisih;
        $kurangistoknya = mysqli_query($conn,"update bahan_baku set stok='$kurangi' where id_bahanbaku='$idbahan'");
        $update = mysqli_query($conn,"update pengiriman_bb set total='$total' where id_pengiriman_bahan_baku='$idpengiriman'");
            if($kurangistoknya&&$update){ 
            header('location:pengirimanbb.php');  
            } else {
                echo'gagal';
                header ('location:pengirimanbb.php');
            }
    } else{
        $selisih = $totalsaatini-$total; 
        $kurangi = $stoksaatini+$selisih;
        $kurangistoknya = mysqli_query($conn,"update bahan_baku set stok='$kurangi' where id_bahanbaku='$idbahan'");
        $update = mysqli_query($conn,"update pengiriman_bb set total='$total' where id_pengiriman_bahan_baku='$idpengiriman'");
            if($kurangistoknya&&$update){ 
            header('location:pengirimanbb.php');  
            } else {
                echo'gagal';
                header ('location:pengirimanbb.php');
            }
    }
}

//hapus pengiriman
if(isset($_POST['hapuspengirimanbb'])){
    $idbahan = $_POST['idbahan'];
    $total = $_POST['totalnya'];
    $idpengiriman = $_POST['idpengiriman'];

    $getdatastok = mysqli_query($conn, "select * from bahan_baku where id_bahanbaku='$idbahan'");
    $data = mysqli_fetch_array($getdatastok);
    $stok = $data['stok'];

    $selisih = $stok+$total;

    $update = mysqli_query($conn,"update bahan_baku set stok='$selisih' where id_bahanbaku='$idbahan'");
    $hapusdata = mysqli_query($conn,"delete from pengiriman_bb where id_pengiriman_bahan_baku='$idpengiriman'");

    if($update&&$hapusdata){
        header('location:pengirimanbb.php');  
            } else {
                echo'gagal';
                header ('location:pengirimanbb.php');
            }
    }

//Bagian Barang Jadiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii//

//submit barang
if(isset($_POST['submitbj'])){
    $namabarang = $_POST['nama_barangjadi'];
    $stok = $_POST['stok'];
    
    $addtotable = mysqli_query($conn, "insert into barang_jadi (nama_barangjadi, stok) values('$namabarang', '$stok')");
    if($addtotable){
        header('location:inv_barangjadi.php');
    } else {
        echo'gagal';
        header ('location:inv_barangjadi.php');
    }
};

//penerimaan barang
if(isset($_POST['Terimabj'])){
    $barang = $_POST['barang'];
    $total = $_POST['total'];
    $penerima = $_POST['penerima'];

    $cekstok = mysqli_query($conn, "select * from barang_jadi where id_barangjadi='$barang'");
    $ambildata = mysqli_fetch_array($cekstok);

    $stoksekarang = $ambildata['stok'];
    $tambahstokdengantotal = $stoksekarang+$total;

    $addtopenerimaan = mysqli_query($conn,"insert into penerimaan_bj (id_barangjadi, total, penerima) values('$barang','$total','$penerima')");
    $updatestokpenerimaan = mysqli_query($conn, "update barang_jadi set stok='$tambahstokdengantotal' where id_barangjadi='$barang'");
    if($addtopenerimaan&&$updatestokpenerimaan){
        header('location:penerimaanbj.php');
    } else {
        echo'gagal';
        header ('location:penerimaanbj.php');
    }
}

//pengiriman barang
if(isset($_POST['Kirimbj'])){
    $barang = $_POST['barang'];
    $total = $_POST['total'];
    $tujuan = $_POST['tujuan'];

    $cekstok = mysqli_query($conn, "select * from barang_jadi where id_barangjadi='$barang'");
    $ambildata = mysqli_fetch_array($cekstok);

    $stoksekarang = $ambildata['stok'];
    $tambahstokdengantotal = $stoksekarang-$total;

    $addtopengiriman = mysqli_query($conn,"insert into pengiriman_bj (id_barangjadi, total, tujuan) values('$barang','$total','$tujuan')");
    $updatestokpegiriman = mysqli_query($conn, "update barang_jadi set stok='$tambahstokdengantotal' where id_barangjadi='$barang'");
    if($addtopengiriman&&$updatestokpengiriman){
        header('location:pengirimanbj.php');
    } else {
        echo'gagal';
        header ('location:pengirimanbj.php');
    }
}

//update stok barang
if(isset($_POST['updatebj'])){
    $idbarang = $_POST['idbarang'];
    $namabarang = $_POST['nama_barangjadi'];
    $stok = $_POST['stok'];

    $update = mysqli_query($conn,"update barang_jadi set nama_barangjadi='$namabarang', stok='$stok' where id_barangjadi='$idbarang'");
    if($update){
        header('location:inv_barangjadi.php');
    } else {
        echo'gagal';
        header ('location:inv_barangjadi.php');
    }
}

//hapus stok barang
if(isset($_POST['deletebj'])){
    $idbarang = $_POST['idbarang'];
    $hapus = mysqli_query($conn, "delete from barang_jadi where id_barangjadi='$idbarang'");
    if($delete){
    header('location:inv_barangjadi.php');
    } else {
        echo'gagal';
        header ('location:inv_barangjadi.php');
    }
}

//update data penerimaan
if(isset($_POST['updatepenerimaanbj'])){
    $idbarang = $_POST['idbarang'];
    $idpenerimaan = $_POST['idpenerimaan'];
    $total = $_POST['total'];

    $cekstok = mysqli_query($conn,"select * from barang_jadi where id_barangjadi='$idbarang'");
    $stoknya = mysqli_fetch_array($cekstok);
    $stoksaatini = $stoknya['stok'];

    $totalsaatini = mysqli_query($conn,"select * from penerimaan_bj where id_penerimaan_barang_jadi='$idpenerimaan'");
    $totalnya = mysqli_fetch_array($totalsaatini);
    $totalsaatini = $totalnya['total'];

    if($total>$totalsaatini){
        $selisih = $total-$totalsaatini;
        $kurangi = $stoksaatini-$selisih;
        $kurangistoknya = mysqli_query($conn,"update barang_jadi set stok='$kurangi' where id_barangjadi='$idbarang'");
        $update = mysqli_query($conn,"update penerimaan_bj set total='$total' where id_penerimaan_barang_jadi='$idpenerimaan'");
            if($kurangistoknya&&$update){ 
            header('location:penerimaanbj.php');  
            } else {
                echo'gagal';
                header ('location:penerimaanbj.php');
            }
    } else{
        $selisih = $totalsaatini-$total; 
        $kurangi = $stoksaatini+$selisih;
        $kurangistoknya = mysqli_query($conn,"update barang_jadi set stok='$kurangi' where id_barangjadi='$idbarang'");
        $update = mysqli_query($conn,"update penerimaan_bj set total='$total' where id_penerimaan_barang_jadi='$idpenerimaan'");
            if($kurangistoknya&&$update){ 
            header('location:penerimaanbj.php');  
            } else {
                echo'gagal';
                header ('location:penerimaanbj.php');
            }
    }
}

//hapus penerimaan
if(isset($_POST['hapuspenerimaanbj'])){
    $idbarang = $_POST['idbarang'];
    $total = $_POST['totalnya'];
    $idpenerimaan = $_POST['idpenerimaan'];

    $getdatastok = mysqli_query($conn, "select * from barang_jadi where id_barangjadi='$idbarang'");
    $data = mysqli_fetch_array($getdatastok);
    $stok = $data['stok'];

    $selisih = $stok-$total;

    $update = mysqli_query($conn,"update barang_jadi set stok='$selisih' where id_barangjadi='$idbarang'");
    $hapusdata = mysqli_query($conn,"delete from penerimaan_bj where id_penerimaan_barang_jadi='$idpenerimaan'");

    if($update&&$hapusdata){
        header('location:penerimaanbj.php');  
            } else {
                echo'gagal';
                header ('location:penerimaanbj.php');
            }
    }


//update data pengiriman
if(isset($_POST['updatepengirimanbj'])){
    $idbarang = $_POST['idbarang'];
    $idpengiriman = $_POST['idpengiriman'];
    $total = $_POST['total'];

    $cekstok = mysqli_query($conn,"select * from barang_jadi where id_barangjadi='$idbarang'");
    $stoknya = mysqli_fetch_array($cekstok);
    $stoksaatini = $stoknya['stok'];

    $totalsaatini = mysqli_query($conn,"select * from pengiriman_bj where id_pengiriman_barang_jadi='$idpengiriman'");
    $totalnya = mysqli_fetch_array($totalsaatini);
    $totalsaatini = $totalnya['total'];

    if($total>$totalsaatini){
        $selisih = $total-$totalsaatini;
        $kurangi = $stoksaatini-$selisih;
        $kurangistoknya = mysqli_query($conn,"update barang_jadi set stok='$kurangi' where id_barangjadi='$idbarang'");
        $update = mysqli_query($conn,"update pengiriman_bj set total='$total' where id_pengiriman_barang_jadi='$idpengiriman'");
            if($kurangistoknya&&$update){ 
            header('location:pengirimanbj.php');  
            } else {
                echo'gagal';
                header ('location:pengirimanbj.php');
            }
    } else{
        $selisih = $totalsaatini-$total; 
        $kurangi = $stoksaatini+$selisih;
        $kurangistoknya = mysqli_query($conn,"update barang_jadi set stok='$kurangi' where id_barangjadi='$idbarang'");
        $update = mysqli_query($conn,"update pengiriman_bj set total='$total' where id_pengiriman_barang_jadi='$idpengiriman'");
            if($kurangistoknya&&$update){ 
            header('location:pengirimanbj.php');  
            } else {
                echo'gagal';
                header ('location:pengirimanbj.php');
            }
    }
}

//hapus pengiriman
if(isset($_POST['hapuspengirimanbj'])){
    $idbarang = $_POST['idbarang'];
    $total = $_POST['totalnya'];
    $idpengiriman = $_POST['idpengiriman'];

    $getdatastok = mysqli_query($conn, "select * from barang_jadi where id_barangjadi='$idbarang'");
    $data = mysqli_fetch_array($getdatastok);
    $stok = $data['stok'];

    $selisih = $stok+$total;

    $update = mysqli_query($conn,"update barang_jadi set stok='$selisih' where id_barangjadi='$idbarang'");
    $hapusdata = mysqli_query($conn,"delete from pengiriman_bj where id_pengiriman_barang_jadi='$idpengiriman'");

    if($update&&$hapusdata){
        header('location:pengirimanbj.php');  
            } else {
                echo'gagal';
                header ('location:pengirimanbj.php');
            }
    }




?>