<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marketing";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Create connection for handling POST requests
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if (isset($_POST['add_department'])) {
        $nama_department = $_POST['nama_department'];
        $sql = "INSERT INTO department (nama_department) VALUES ('$nama_department')";
        if ($conn->query($sql) === TRUE) {
            echo "New department added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Perancangan Produk</title>
        <link
            rel="stylesheet"
            type="text/css"
            media="screen"
            href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        <link
            rel="stylesheet"
            type="text/css"
            media="screen"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link
            rel="stylesheet"
            type="text/css"
            media="screen"
            href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script
            src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
        <link
            href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
            rel="stylesheet"/>
        <link href="css/styles.css" rel="stylesheet"/>
        <script
            src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
            crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">PT Petrokimia Gresik</a>
            <!-- Sidebar Toggle-->
            <button
                class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
                id="sidebarToggle"
                href="#!">
                <i class="fas fa-bars"></i>
            </button>
            <!-- Navbar Search-->
            <form
                class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input
                        class="form-control"
                        type="text"
                        placeholder="Search for..."
                        aria-label="Search for..."
                        aria-describedby="btnNavbarSearch"/>
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        id="navbarDropdown"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#!">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#!">Activity Log</a>
                        </li>
                        <li><hr class="dropdown-divider"/></li>
                        <li>
                            <a class="dropdown-item" href="#!">Logout</a>
                        </li>
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

            <!-- ISI MODUL -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Department</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">
                                <a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Department</li>
                        </ol>

                        <!-- HEADER -->
                        <div class="container mt-5">
                            <!-- Add Department Form -->
                            <div class="card mt-4">
                                <div class="card-body">
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <label for="nama_department">Nama Department:</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="nama_department"
                                                name="nama_department"
                                                required="required">
                                        </div>
                                        <button type="submit" name="add_department" class="btn btn-primary">Tambah Department</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Display Departments -->
                            <div class="mt-4">
                                <h3>Daftar Department</h3>
                            <?php
        // Create connection for SELECT query
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT * FROM department ORDER BY id_department");
        if ($result->num_rows > 0) {
            echo "<ul class='list-group'>";
            while ($row = $result->fetch_assoc()) {
                echo "<li class='list-group-item'>" . $row['nama_department'] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No departments found.</p>";
        }

        $conn->close();
        ?>
                            </div>
                        </div>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <script
                            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                        <script
                            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                            crossorigin="anonymous"></script>
                        <script src="js/scripts.js"></script>
                        <script
                            src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
                            crossorigin="anonymous"></script>
                        <script src="assets/demo/chart-area-demo.js"></script>
                        <script src="assets/demo/chart-bar-demo.js"></script>
                        <script
                            src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
                            crossorigin="anonymous"></script>
                        <script src="js/datatables-simple-demo.js"></script>
                    </body>
                </html>