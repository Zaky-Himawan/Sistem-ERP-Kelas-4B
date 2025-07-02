<?php
    include "koneksi/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Penyortiran dan Inspeksi</title>
        <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
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
                        <h1 class="mt-4">Sales Invoice</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Sales Invoice</li>
                        </ol>
            
            <div class="card-body">
                <!-- Tombol modal -->
                <button type="button" class="btn btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#modaldaftar">
                    Tambah Data
                </button>

                <div class="container">
    <table id="export" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Sales order</th>
                <th>Date Invoice</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi/koneksi.php";
            $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * FROM sales_invoice ORDER BY id_sales_invoice DESC");
            while ($data = mysqli_fetch_array($tampil)) {
                echo "<tr>
                <td>".$no."</td>
                <td>".$data['id_sales_order']."</td>
                <td>".$data['date_invoice']."</td>
                <td>".$data['status']."</td>
                <td>
                    <a href='#' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#modalubah".$no."'>Ubah</a>
                    <a href='#' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#modalhapus".$no."'>Hapus</a>
                </td>
                </tr>";

                echo "<!-- Awal Modal Ubah-->
                <div class='modal fade' id='modalubah".$no."' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title fs-5' id='staticBackdropLabel'>Form Untuk Mengubah Data</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <form method='POST' action='aksi/aksi_salesinvoice.php'>
                                <input type='hidden' name='id_sales_invoice' value='".$data['id_sales_invoice']."'>
                                <div class='modal-body'>
                                    <div class='mb-3'>
                                        <label class='form-label'>ID Sales Order</label>
                                        <input type='text' class='form-control' name='id_sales_order' value='".$data['id_sales_order']."' placeholder='Masukkan ID Sales order'>
                                    </div>
                                    <div class='mb-3'>
                                        <label class='form-label'>Date Invoice</label>
                                        <input type='date' class='form-control' name='date_invoice' value='".$data['date_invoice']."' placeholder='Masukkan Date Invoice'>
                                    </div>
                                    <div class='mb-3'>
                                        <label class='form-label'>Status</label>
                                        <select class='form-select' name='status'>
                                            <option value='Selesai' ".(($data['status'] == 'Selesai') ? 'selected' : '').">Selesai</option>
                                            <option value='Dalam Proses' ".(($data['status'] == 'Dalam Proses') ? 'selected' : '').">Dalam Proses</option>
                                            <option value='Belum Dimulai' ".(($data['status'] == 'Belum Dimulai') ? 'selected' : '').">Belum Dimulai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='modal-footer'>
                                    <button type='submit' class='btn btn-primary' name='bubah'>Ubah</button>
                                    <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Ubah-->";

                echo "<!-- Awal Modal Hapus-->
                <div class='modal fade' id='modalhapus".$no."' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title fs-5' id='staticBackdropLabel'>Konfirmasi Penghapusan</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <form method='POST' action='aksi/aksi_salesinvoice.php'>
                                <input type='hidden' name='id_sales_invoice' value='".$data['id_sales_invoice']."'>
                                <div class='modal-body'>
                                    <h5> Dengan menghapus data ini anda akan menghapus data dari daftar!<br><br>
                                        <span class='text-danger'>".$data['id_sales_invoice']."</span>
                                    </h5>
                                </div>
                                <div class='modal-footer'>
                                    <button type='submit' class='btn btn-primary' name='bhapus'>Hapus</button>
                                    <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Hapus-->";
                $no++;
            }
            ?>
        </tbody>
    </table>
</div>
                <!-- Awal Modal Daftar -->
                <div class="modal fade" id="modaldaftar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fs-5" id="staticBackdropLabel">Form Untuk Tambah Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="aksi/aksi_salesinvoice.php">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">ID Sales Order</label>
                                        <input type="text" class="form-control" name="id_sales_order" placeholder="Masukkan ID Sales order">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Date Invoice</label>
                                        <input type="date" class="form-control" name="date_invoice" placeholder="Masukkan Date Invoice">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="form-select" name="status">
                                            <option value="Selesai">Selesai</option>
                                            <option value="Dalam Proses">Dalam Proses</option>
                                            <option value="Belum Dimulai">Belum Dimulai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Daftar -->
            </div>
        </div>
    </div>

<script>
$(document).ready(function() {
        $('#export').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy',
                    exportOptions: {
                        columns: ':not(:last-child)'
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: ':not(:last-child)'
                    }
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: ':not(:last-child)'
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: ':not(:last-child)'
                    }
                }
            ]
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    <script src="scriptt.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>