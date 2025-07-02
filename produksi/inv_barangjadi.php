<?php
require'function.php';
require'cek.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inventory Gudang Garam</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">PT Petrokimia Gresik</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                        <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Produksi
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="perancangan_produk.php">Perancangan Produk</a>
                                    <a class="nav-link" href="inovasi.php">Inovasi Produk</a>
                                    <a class="nav-link" href="pengembangan_produk.php">Pengembangan Produk</a>
                                    <a class="nav-link" href="bahanbaku.php">Stock Bahan Baku</a>
                                    <a class="nav-link" href="rencana_produksi.php">Rencana Produksi</a>
                                    <a class="nav-link" href="hasil.php">Hasil Produksi</a>
                                    <a class="nav-link" href="inspeksi.php">Penyortiran dan Inspeksi</a>
                                    <a class="nav-link" href="transfer.php">Transfer Produk</a>
                                </nav>
                                
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Sales And Marketing
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="pemasaran_produk.php">Pemasaran Produk</a>
                                    <a class="nav-link" href="sales_inquiry.php">Sales Inquiry</a>
                                    <a class="nav-link" href="produksi_marketing.php">Produksi</a>
                                    <a class="nav-link" href="sales_quotation.php">Sales Quotation</a>
                                    <a class="nav-link" href="rencana_penjualan.php">Rencana Penjualan</a>
                                    <a class="nav-link" href="sales_invoice.php">Sales Invoice</a>
                                    <a class="nav-link" href="sales_order.php">Sales Order</a>
                                    <a class="nav-link" href="customer.php">Customer</a>
                                </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Purchasing
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="purchase_requisition.php">Purchase Requistion</a>
                                <a class="nav-link" href="request_for_quotation.php">Request For Quotation</a>
                                <a class="nav-link" href="data_vendor.php">Data Vendor</a>
                                <a class="nav-link" href="purchase_inquiry.php">Purchase Inqury</a>
                                <a class="nav-link" href="purchase_quotation.php">Purchase Quotation</a>
                                <a class="nav-link" href="purchase_order.php">Purchase Order</a>
                                <a class="nav-link" href="material.php">Material Entry</a>
                                <a class="nav-link" href="purchase_return.php">Purchase Return</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Human And Resource
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="hr_absensi.php">Absensi</a>
                            <a class="nav-link" href="hr_daftarkaryawan.php">Daftar Karyawan</a>
                            <a class="nav-link" href="hr_department.php">Departement</a>
                            <a class="nav-link" href="hr_gajikaryawan.php">Gaji Karyawan</a>
                        </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Inventory
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="inv_bahanbaku.php">Bahan Baku</a>
                                <a class="nav-link" href="inv_barangjadi.php">Barang Jadi</a>
                                <a class="nav-link" href="penerimaanbb.php">Penerimaan BB</a>
                                <a class="nav-link" href="penerimaanbj.php">Penerimaan BJ</a>
                                <a class="nav-link" href="pengirimanbb.php">Pengiriman BB</a>
                                <a class="nav-link" href="pengirimanbj.php">Pengiriman BJ</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Finance
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Menu Sidebar</title>
                            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                        </head>
                        <body>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="invoice.php">Sales Order</a>
                                    <a class="nav-link" href="payment.php">Payment</a>
                                    <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFinancialReport" aria-expanded="false" aria-controls="collapseFinancialReport">Financial Report</a>
                                    <div class="collapse" id="collapseFinancialReport">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="cash_flow.php">Cash Flow</a>
                                            <a class="nav-link" href="capital_statement.php">Capital Statement</a>
                                            <a class="nav-link" href="balance_report.php">Balance Report</a>
                                            <a class="nav-link" href="income_statement.php">Income Statement</a>
                                            <a class="nav-link" href="general_journal.php">General Journal</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link" href="production.php">Penyusunan Laporan Biaya</a>
                                    <a class="nav-link" href="laporan_harian.php" data-bs-toggle="collapse" data-bs-target="#LayoutsTransaksi" aria-expanded="false" aria-controls="LayoutsTransaksi">Database Transaksi</a>
                                    <div class="collapse" id="LayoutsTransaksi">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="input_cash_bank.php">Input Cash dan Bank</a>
                                            <a class="nav-link" href="input_purchase.php">Input Purchase</a>
                                            <a class="nav-link" href="input_sales.php">Input Sales</a>
                                            <a class="nav-link" href="input_cost.php">Input Cost</a>
                                            <a class="nav-link" href="status_pembayaran.php">Status Pembayaran</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link" href="gaji_karyawan.php">Gaji Karyawan</a>
                                    <a class="nav-link" href="pembelian.php">Pembelian</a>
                                    <a class="nav-link" href="pay.php">Purchase Order</a>
                                </nav>
                            </div>
                        </body>
                        </html>
                            
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Stok Barang Jadi</h1>

                        <div class="card mb-4">
                            <div class="card-header">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Input Barang Jadi
                            </button>
                            <a href="laporanstokbj.php" class="btn btn-info">Laporan Stok</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang Jadi</th>
                                            <th>Jumlah Stok</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $ambildata = mysqli_query($conn, "select * from barang_jadi");
                                        $i = 1;
                                        while($data=mysqli_fetch_array($ambildata)){
                                            $namabarang = $data['nama_barangjadi'];
                                            $stok = $data['stok'];
                                            $idbarang = $data['id_barangjadi'];
                                        ?>
                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$namabarang;?></td>
                                            <td><?=$stok;?></td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#update<?=$idbarang;?>">
                                                    Update
                                                </button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idbarang;?>">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>

                                        <!--Update-->
                                        <div class="modal fade" id="update<?=$idbarang;?>">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                        
                                            <div class="modal-header">
                                            <h4 class="modal-title">Update Barang Jadi</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <form method="post">
                                            <div class="modal-body">
                                            <input type="text" name="nama_barangjadi" value="<?=$namabarang;?>" class="form-control" autocomplete="off" required>
                                            <br>
                                            <input type="text" name="stok" value="<?=$stok;?>" class="form-control" autocomplete="off" required>
                                            <br>
                                            <input type="hidden" name="idbarang" value="<?=$idbarang;?>">
                                            <button type="submit" class="btn btn-primary" name="updatebj">Submit</button>
                                            </div>
                                            </form>
                                            </div>
                                            </div>
                                        </div>

                                        <!--Delete-->
                                        <div class="modal fade" id="delete<?=$idbarang;?>">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                        
                                            <div class="modal-header">
                                            <h4 class="modal-title">Hapus Item?</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <form method="post">
                                            <div class="modal-body">
                                            Apakah anda yakin ingin menghapus <?=$namabarang;?> ?
                                            <input type="hidden" name="idbarang" value="<?=$idbarang;?>">
                                            <br>
                                            <br>
                                            <button type="submit" class="btn btn-danger" name="deletebj">Hapus</button>
                                            </div>
                                            </form>
                                            </div>
                                            </div>
                                        </div>

                                        <?php
                                        };
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

            <div class="modal fade" id="myModal">
            <div class="modal-dialog">
            <div class="modal-content">
        
            <div class="modal-header">
            <h4 class="modal-title">Input Barang Jadi</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <form method="post">
            <div class="modal-body">
            <input type="text" name="nama_barangjadi" placeholder="Nama Barang Jadi" class="form-control" autocomplete="off" required>
            <br>
            <input type="number" name="stok" placeholder="Jumlah" class="form-control" autocomplete="off" required>
            <br>
            <button type="submit" class="btn btn-primary" name="submitbj">Submit</button>
            </div>
            </form>
        </div>
        </div>
    </div>
</html>
