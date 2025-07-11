<?php
require'function.php';
?>
<html>
<head>
  <title>Laporan</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
			<h2>Pengiriman Bahan Baku</h2>
			<h4>(Inventory)</h4>
				<div class="data-tables datatable-dark">
					
					<!-- Masukkan table nya disini, dimulai dari tag TABLE -->
                    
                    <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Nama Bahan Baku</th>
                                            <th>Tujuan</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        $ambildata = mysqli_query($conn, "select * from pengiriman_bb k, bahan_baku s where s.id_bahanbaku = k.id_bahanbaku");
                                        while($data=mysqli_fetch_array($ambildata)){
                                            $idpengiriman=$data['id_pengiriman_bahan_baku'];
                                            $idbahan=$data['id_bahanbaku'];
                                            $tanggal = $data['tgl_pengiriman'];
                                            $namabahan = $data['nama_bahanbaku'];
                                            $tujuan = $data['tujuan'];
                                            $total = $data['total'];
                                        ?>
                                        <tr>
                                            <td><?php echo $tanggal;?></td>
                                            <td><?php echo $namabahan;?></td>
                                            <td><?php echo $tujuan;?></td>
                                            <td><?php echo $total;?></td>
                                        </tr>

                                        <?php
                                        };
                                        ?>

                                    </tbody>
                                </table>           
</div>

<a href="pengirimanbb.php" class="btn btn-danger">Kembali</a>
	
<script>
$(document).ready(function() {
    $('#datatablesSimple').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>