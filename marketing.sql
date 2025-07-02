-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 04:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_masuk` time NOT NULL,
  `waktu_pulang` time NOT NULL,
  `durasi_kerja` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_karyawan`, `tanggal`, `waktu_masuk`, `waktu_pulang`, `durasi_kerja`) VALUES
(1, 1, '2024-07-03', '00:21:00', '15:13:00', '14:52:00'),
(2, 4, '2024-07-05', '06:20:00', '18:25:00', '12:05:00'),
(3, 1, '2024-07-02', '22:59:00', '11:59:00', '11:00:00'),
(4, 6, '2024-07-04', '06:00:00', '16:00:00', '10:00:00'),
(5, 7, '2024-07-04', '23:17:00', '11:17:00', '12:00:00'),
(6, 4, '2024-07-17', '12:12:00', '00:31:00', '11:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `analisa_bisnis`
--

CREATE TABLE `analisa_bisnis` (
  `id_analisa` int(25) NOT NULL,
  `id_sales_order` int(25) NOT NULL,
  `tanggal_analisa` date NOT NULL,
  `hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahanbaku` int(11) NOT NULL,
  `nama_bahanbaku` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `balance_report`
--

CREATE TABLE `balance_report` (
  `id_balance_report` int(11) NOT NULL,
  `report_date` date NOT NULL,
  `total_assets` decimal(15,2) NOT NULL,
  `total_liabilities` decimal(15,2) NOT NULL,
  `total_equity` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barang_jadi`
--

CREATE TABLE `barang_jadi` (
  `id_barangjadi` int(11) NOT NULL,
  `nama_barangjadi` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `capital_statement`
--

CREATE TABLE `capital_statement` (
  `id_capital_statement` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `balance_date` date NOT NULL,
  `opening_balance` decimal(15,2) NOT NULL,
  `closing_balance` decimal(15,2) NOT NULL,
  `net_income` decimal(15,2) NOT NULL,
  `owner_drawings` decimal(15,2) NOT NULL,
  `owner_investmen` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `capital_statement`
--

INSERT INTO `capital_statement` (`id_capital_statement`, `id_account`, `balance_date`, `opening_balance`, `closing_balance`, `net_income`, `owner_drawings`, `owner_investmen`) VALUES
(1, 345, '2024-07-11', 12345.00, 123.00, 0.00, 0.00, 0.00),
(3, 1231, '2024-07-12', 21321321.00, 23123.00, 23123.00, 12312.00, 312312.00);

-- --------------------------------------------------------

--
-- Table structure for table `cash_flow`
--

CREATE TABLE `cash_flow` (
  `id_cash_flow` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cash_flow`
--

INSERT INTO `cash_flow` (`id_cash_flow`, `date`, `amount`, `type`, `description`, `created`, `updated`) VALUES
(1, 0, 588584, '', 'pembelian warung', '0000-00-00', '0000-00-00'),
(2, 2024, 132312, 'Cash', 'dasdasdas', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(25) NOT NULL,
  `type_customer` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `type_customer`, `name`, `address`, `phone`, `email`) VALUES
(0, 'VIP', 'ASEP', 'KTW TAMAN ELOK BLOK E18/7 PUP MARRAKASH BEKASI', '081299459739', 'Aghnamaula12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `data_vendor`
--

CREATE TABLE `data_vendor` (
  `id_vendor` int(11) NOT NULL,
  `vendor_name` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `website` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_vendor`
--

INSERT INTO `data_vendor` (`id_vendor`, `vendor_name`, `phone`, `email`, `address`, `website`) VALUES
(2, 'Mantap', '081299459739', 'aghnamaula12@gmail.com', 'KTW TAMAN ELOK BLOK E18/7', 'Gacor123');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id_department` int(11) NOT NULL,
  `nama_department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id_department`, `nama_department`) VALUES
(8, 'Human Resource'),
(12, 'Inventory'),
(7, 'Produksi'),
(9, 'Purchasing');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gaji` varchar(100) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id_karyawan`, `nama`, `gaji`, `departement`, `jabatan`, `alamat`, `nomor_telepon`, `email`) VALUES
(1, 'Sufyan Dzaki', '10.000.000', 'Inventory', 'HR Management', 'Kp.Rempoa Rt/Rw 001/006, No 26, Rempoa, Ciputat Timur,\r\nTangerang Selatan, Banten', '083871852577', 'dzakisufyan12@gmail.com'),
(4, 'Fikri', '5.000.000', 'Produksi', 'Manajer Produksi', 'Kp.Rempoa Rt/Rw 001/006, No 26, Rempoa, Ciputat Timur,\r\nTangerang Selatan, Banten', '083871852577', 'fadhlurahman.fikri22@mhs.uinjkt.ac.id'),
(6, 'Shaffly Nizam', '', 'Human Resource', 'Manajer Purchasing', 'Kp.Rempoa Rt/Rw 001/006, No 26, Rempoa, Ciputat Timur,\r\nTangerang Selatan, Banten', '083871852577', 'shaffly.nizham22@mhs.uinjkt.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `finansial_report`
--

CREATE TABLE `finansial_report` (
  `id_finansial_report` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finansial_report`
--

INSERT INTO `finansial_report` (`id_finansial_report`, `category`, `item_name`, `amount`, `date`) VALUES
(1, 'Liabilities', 'asas', 2.00, '2024-07-03'),
(2, 'Liabilities', 'asas', 2.00, '2024-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `gaji_karyawan`
--

CREATE TABLE `gaji_karyawan` (
  `id_gaji_karyawan` int(11) NOT NULL,
  `nama_karyawan` text NOT NULL,
  `payroll_period` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_journal`
--

CREATE TABLE `general_journal` (
  `id_general_journal` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `debit` decimal(15,2) NOT NULL,
  `credit` decimal(15,2) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `id_account` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `general_journal`
--

INSERT INTO `general_journal` (`id_general_journal`, `date`, `description`, `debit`, `credit`, `created_at`, `updated_at`, `id_account`) VALUES
(1, '0000-00-00', '', 0.00, 0.00, '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `income_statement`
--

CREATE TABLE `income_statement` (
  `id_income_statement` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_income` decimal(15,2) NOT NULL,
  `total_expense` decimal(15,2) NOT NULL,
  `net_income` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `income_statement`
--

INSERT INTO `income_statement` (`id_income_statement`, `start_date`, `end_date`, `total_income`, `total_expense`, `net_income`) VALUES
(1, '2024-07-10', '2024-07-20', 123456.00, 12345.00, 123.00);

-- --------------------------------------------------------

--
-- Table structure for table `input_cash_bank`
--

CREATE TABLE `input_cash_bank` (
  `id_input_cash_bank` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `input_cash_bank`
--

INSERT INTO `input_cash_bank` (`id_input_cash_bank`, `type`, `amount`, `date`, `description`) VALUES
(1, 'Bank', 99999999.99, '2024-07-03', 'pembelian ginjal');

-- --------------------------------------------------------

--
-- Table structure for table `input_cost`
--

CREATE TABLE `input_cost` (
  `id_input_cost` int(11) NOT NULL,
  `category` text NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `input_cost`
--

INSERT INTO `input_cost` (`id_input_cost`, `category`, `date`, `amount`, `description`) VALUES
(1, 'weqw', '0000-00-00', 23213.00, 'dsaas');

-- --------------------------------------------------------

--
-- Table structure for table `input_purchase`
--

CREATE TABLE `input_purchase` (
  `id_input_purchase` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `input_sales`
--

CREATE TABLE `input_sales` (
  `id_input_sales` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `issuedate` date NOT NULL,
  `number` int(11) NOT NULL,
  `duedate` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pengiriman`
--

CREATE TABLE `jadwal_pengiriman` (
  `id_jadwal` int(25) NOT NULL,
  `id_sales_order` int(25) NOT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_pengiriman`
--

INSERT INTO `jadwal_pengiriman` (`id_jadwal`, `id_sales_order`, `tanggal_pengiriman`, `status`) VALUES
(5, 4, '2024-07-10', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `iduser` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`iduser`, `email`, `password`) VALUES
(1, 'kelasd@gmail.com', 'aghnajago');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id_material` int(11) NOT NULL,
  `material_name` varchar(25) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id_material`, `material_name`, `unit_price`, `status`) VALUES
(4, 'Tembakau', 150000, 'Dalam Proses');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id_pay` int(11) NOT NULL,
  `id_purchase_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount_paid` decimal(10,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id_pay`, `id_purchase_order`, `id_user`, `date`, `amount_paid`, `status`, `created_at`) VALUES
(1, 678, 6, '2024-07-05', 12356.00, 'Berhasil', '2024-07-04'),
(2, 678, 6, '2024-07-05', 12356.00, 'Cancelled', '2024-07-04'),
(3, 221312, 12312, '2024-07-09', 213.00, 'Cancelled', '2024-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_method` varchar(25) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `customer_id`, `amount`, `payment_date`, `payment_method`, `total`, `status`) VALUES
(1, 0, 454, '2024-07-04', 'asxyugax', 0, ''),
(2, 0, 0, '0000-00-00', '', 81586252, ''),
(3, 0, 0, '0000-00-00', '', 0, 'Cancelled'),
(4, 0, 1231321, '2024-07-12', '213111', 21312, 'Berhasil');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `waktu_masuk` time NOT NULL,
  `jumlah_gaji` varchar(100) NOT NULL,
  `status_pembayaran` enum('berhasil','menunggu','gagal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `nama`, `tanggal_pembayaran`, `waktu_masuk`, `jumlah_gaji`, `status_pembayaran`) VALUES
(5, 'Sufyan Dzaki', '2024-07-01', '00:00:00', '20.000.000', 'berhasil'),
(6, 'Shaffly Nizam', '2024-07-11', '00:00:00', '213213', 'gagal'),
(7, 'Fikri', '2024-07-17', '00:00:00', '10.000.000', 'berhasil');

-- --------------------------------------------------------

--
-- Table structure for table `pemasaran_produk`
--

CREATE TABLE `pemasaran_produk` (
  `id_pemasaran` int(11) NOT NULL,
  `id_customer` int(25) NOT NULL,
  `nama_pemasanan` varchar(50) NOT NULL,
  `deskripsi` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemasaran_produk`
--

INSERT INTO `pemasaran_produk` (`id_pemasaran`, `id_customer`, `nama_pemasanan`, `deskripsi`, `tanggal_mulai`, `tanggal_selesai`, `status`) VALUES
(11, 2, 'Tembakau', 0, '2024-07-03', '2024-07-11', 'Dalam Proses');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `id_order` varchar(50) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `quantity` int(50) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_vendor`, `id_order`, `total`, `quantity`, `unit_price`) VALUES
(10, 67282, 'u292', 90000.00, 1, 90000.00);

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan_bb`
--

CREATE TABLE `penerimaan_bb` (
  `id_penerimaan_bahan_baku` int(11) NOT NULL,
  `id_bahanbaku` int(11) NOT NULL,
  `tgl_penerimaan` timestamp NOT NULL DEFAULT current_timestamp(),
  `penerima` varchar(25) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerimaan_bb`
--

INSERT INTO `penerimaan_bb` (`id_penerimaan_bahan_baku`, `id_bahanbaku`, `tgl_penerimaan`, `penerima`, `total`) VALUES
(90, 48, '2024-07-11 09:17:31', 'Inventory', 10),
(91, 48, '2024-07-11 09:17:43', 'Inventory', 100),
(92, 49, '2024-07-11 09:18:46', 'Inventory', 100),
(93, 50, '2024-07-11 09:19:09', 'Inventory', 300),
(94, 51, '2024-07-11 09:24:49', 'Inventory', 100),
(95, 51, '2024-07-11 09:27:31', 'Inventory', 400),
(96, 52, '2024-07-11 09:31:38', 'Inventory', 0),
(97, 54, '2024-07-11 09:33:14', 'Inventory', 100),
(98, 53, '2024-07-11 09:40:40', 'Inventory', 50),
(99, 55, '2024-07-11 09:43:17', 'Inventory', 10),
(102, 58, '2024-07-11 09:47:57', 'Inventory', 100),
(108, 59, '2024-07-11 10:18:42', 'Inventory', 5),
(109, 57, '2024-07-11 10:51:13', 'Inventory', 60),
(110, 61, '2024-07-12 08:28:45', 'Inventory', 4),
(111, 0, '2024-07-12 09:25:55', 'Inventory', 200),
(112, 0, '2024-07-12 09:26:17', 'Inventory', 300),
(113, 66, '2024-07-12 09:42:51', 'Inventory', 200),
(114, 67, '2024-07-12 09:54:54', 'Inventory', 25000),
(117, 70, '2024-07-12 10:07:55', 'Inventory', 100),
(118, 71, '2024-07-12 10:08:54', 'Inventory', 15),
(119, 72, '2024-07-12 10:10:18', 'Inventory', 50),
(121, 74, '2024-07-12 10:15:16', 'Inventory', 10),
(122, 75, '2024-07-12 10:16:59', 'Inventory', 10),
(124, 73, '2024-07-12 10:24:59', 'Inventory', 3),
(125, 77, '2024-07-12 10:25:55', 'Inventory', 3),
(126, 78, '2024-07-12 10:28:16', 'Inventory', 3),
(127, 79, '2024-07-12 10:29:17', 'Inventory', 3),
(128, 80, '2024-07-12 10:31:17', 'Inventory', 3),
(129, 81, '2024-07-12 10:33:08', 'Inventory', 3),
(130, 83, '2024-07-12 18:28:55', 'Inventory', 2000),
(131, 84, '2024-07-12 18:29:54', 'Inventory', 100),
(132, 85, '2024-07-14 19:18:43', 'Inventory', 20000),
(133, 86, '2024-07-14 19:18:56', 'Inventory', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan_bj`
--

CREATE TABLE `penerimaan_bj` (
  `id_penerimaan_barang_jadi` int(11) NOT NULL,
  `id_barangjadi` int(11) NOT NULL,
  `tgl_penerimaan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `penerima` varchar(25) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerimaan_bj`
--

INSERT INTO `penerimaan_bj` (`id_penerimaan_barang_jadi`, `id_barangjadi`, `tgl_penerimaan`, `penerima`, `total`) VALUES
(3, 6, '2024-07-12 09:41:12', 'Inventory', 5000),
(4, 7, '2024-07-12 18:56:11', 'Inventory', 500),
(5, 8, '2024-07-14 19:30:36', 'Inventory', 3000),
(6, 9, '2024-07-15 17:04:43', 'Inventory', 232132),
(8, 12, '2024-07-15 17:04:52', 'dwqdwq', 3213213),
(9, 11, '2024-07-17 03:03:19', 'hdjshjnd', 200),
(10, 10, '2024-07-17 03:04:57', 'eee', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman_bb`
--

CREATE TABLE `pengiriman_bb` (
  `id_pengiriman_bahan_baku` int(11) NOT NULL,
  `id_bahanbaku` int(11) NOT NULL,
  `tgl_pengiriman` timestamp NOT NULL DEFAULT current_timestamp(),
  `tujuan` varchar(25) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengiriman_bb`
--

INSERT INTO `pengiriman_bb` (`id_pengiriman_bahan_baku`, `id_bahanbaku`, `tgl_pengiriman`, `tujuan`, `total`) VALUES
(10, 57, '2024-07-11 10:01:09', 'Bag.Produksi', 10),
(11, 59, '2024-07-11 10:06:35', 'Bag.Produksi', 1),
(12, 57, '2024-07-11 10:50:20', 'Bag.Produksi', 150),
(13, 60, '2024-07-11 10:50:48', 'Bag.Produksi', 150),
(14, 60, '2024-07-11 10:52:47', 'Bag.Produksi', 200),
(19, 0, '2024-07-12 09:26:31', 'Bag.Produksi', 200),
(20, 0, '2024-07-12 09:27:51', 'Bag.Produksi', 200),
(21, 0, '2024-07-12 09:30:22', 'Bag.Produksi', 200),
(22, 0, '2024-07-12 09:32:32', 'Bag.Produksi', 200),
(24, 73, '2024-07-12 10:12:59', 'Bag.Produksi', 5),
(26, 85, '2024-07-14 19:21:22', 'Produksi', 10000),
(27, 86, '2024-07-14 19:21:37', 'Produksi', 10000),
(29, 91, '2024-07-17 03:00:01', 'Produksi', 100);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman_bj`
--

CREATE TABLE `pengiriman_bj` (
  `id_pengiriman_barang_jadi` int(11) NOT NULL,
  `id_barangjadi` int(11) NOT NULL,
  `tgl_pengiriman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tujuan` varchar(25) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengiriman_bj`
--

INSERT INTO `pengiriman_bj` (`id_pengiriman_barang_jadi`, `id_barangjadi`, `tgl_pengiriman`, `tujuan`, `total`) VALUES
(3, 3, '2024-07-12 09:42:12', 'Bag.Produksi', 10000),
(4, 7, '2024-07-12 18:55:49', 'Bag.marketing', 500),
(7, 11, '2024-07-15 17:05:52', 'hffewfwq', 111),
(8, 11, '2024-07-17 03:03:57', 'hjhj', 100),
(9, 10, '2024-07-17 03:05:22', 'jdn', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `id_production` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produksi_marketing`
--

CREATE TABLE `produksi_marketing` (
  `id_produk` int(20) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_price` int(30) NOT NULL,
  `biaya_produksi` int(30) NOT NULL,
  `category` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `stock` int(50) NOT NULL,
  `tag` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produksi_marketing`
--

INSERT INTO `produksi_marketing` (`id_produk`, `nama_produk`, `harga_price`, `biaya_produksi`, `category`, `description`, `stock`, `tag`) VALUES
(0, 'Surya', 26000, 23000, 'Rokok Mantap', '', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_inquiry`
--

CREATE TABLE `purchase_inquiry` (
  `id_purchase_inquiry` int(11) NOT NULL,
  `id_request_quotation` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `date_purchase_inquiry` date NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_inquiry`
--

INSERT INTO `purchase_inquiry` (`id_purchase_inquiry`, `id_request_quotation`, `id_vendor`, `date_purchase_inquiry`, `status`) VALUES
(2, 2, 4, '2024-07-09', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id_purchase_order` int(11) NOT NULL,
  `id_purchase_quotation` int(11) NOT NULL,
  `date_purchase_order` date NOT NULL,
  `id_material` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `total_order` int(11) NOT NULL,
  `shipping_method` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `expected_delivery_date` date NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id_purchase_order`, `id_purchase_quotation`, `date_purchase_order`, `id_material`, `unit_price`, `total_order`, `shipping_method`, `description`, `expected_delivery_date`, `status`) VALUES
(2, 2, '2024-07-11', 3, 500000, 10, 'E-Money', 'Mantap', '2024-07-17', 'Dalam Proses');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_quotation`
--

CREATE TABLE `purchase_quotation` (
  `id_purchase_quotation` int(11) NOT NULL,
  `id_purchase_inquiry` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `date_purchase_quotation` date NOT NULL,
  `list_of_material` varchar(25) NOT NULL,
  `total_price` int(11) NOT NULL,
  `valid_until` date NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_quotation`
--

INSERT INTO `purchase_quotation` (`id_purchase_quotation`, `id_purchase_inquiry`, `id_vendor`, `date_purchase_quotation`, `list_of_material`, `total_price`, `valid_until`, `status`) VALUES
(6, 2, 3, '2024-07-10', 'Tembakau', 450000, '2024-07-16', 'Dalam Proses');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_requisition`
--

CREATE TABLE `purchase_requisition` (
  `id_purchase_requisition` int(11) NOT NULL,
  `date_purchase_requisition` date NOT NULL,
  `id_user_request` int(11) NOT NULL,
  `departement` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_requisition`
--

INSERT INTO `purchase_requisition` (`id_purchase_requisition`, `date_purchase_requisition`, `id_user_request`, `departement`, `status`) VALUES
(2, '2024-07-11', 2, 'Marketing', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return`
--

CREATE TABLE `purchase_return` (
  `id_purchase_return` int(11) NOT NULL,
  `id_purchase_order` int(11) NOT NULL,
  `date_purchase_return` date NOT NULL,
  `id_material` int(11) NOT NULL,
  `total_material` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `payment_method` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `reason_for_return` text NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_return`
--

INSERT INTO `purchase_return` (`id_purchase_return`, `id_purchase_order`, `date_purchase_return`, `id_material`, `total_material`, `total_price`, `payment_method`, `description`, `reason_for_return`, `status`) VALUES
(2, 3, '2024-07-10', 4, 6, 1500000, 'Bank', 'Mantap', 'Bungkus Penyok Dikit', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `rencana_penjualan`
--

CREATE TABLE `rencana_penjualan` (
  `id_rencana` int(25) NOT NULL,
  `id_produk` int(25) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rencana_penjualan`
--

INSERT INTO `rencana_penjualan` (`id_rencana`, `id_produk`, `tanggal_penjualan`, `tanggal_mulai`, `tanggal_selesai`, `status`) VALUES
(0, 5, '2024-07-11', '2024-07-09', '2024-07-18', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `request_for_quotation`
--

CREATE TABLE `request_for_quotation` (
  `id_rfq` int(11) NOT NULL,
  `id_purchase_requisition` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `date_rfq` date NOT NULL,
  `list_of_material` varchar(25) NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `valid_until` date NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_for_quotation`
--

INSERT INTO `request_for_quotation` (`id_rfq`, `id_purchase_requisition`, `id_vendor`, `date_rfq`, `list_of_material`, `total_price`, `valid_until`, `status`) VALUES
(2, 1, 2, '2024-07-10', 'Tembakau', 15000, '2024-07-17', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `sales_inquiry`
--

CREATE TABLE `sales_inquiry` (
  `id_sales_inquiry` int(25) NOT NULL,
  `id_customer` int(25) NOT NULL,
  `id_product` int(25) NOT NULL,
  `tanggal_inquiry` date NOT NULL,
  `status` varchar(25) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_inquiry`
--

INSERT INTO `sales_inquiry` (`id_sales_inquiry`, `id_customer`, `id_product`, `tanggal_inquiry`, `status`, `description`) VALUES
(2, 4, 0, '2024-07-11', 'Selesai', ''),
(3, 6, 0, '2024-07-15', 'Selesai', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoice`
--

CREATE TABLE `sales_invoice` (
  `id_sales_invoice` int(25) NOT NULL,
  `id_sales_order` int(25) NOT NULL,
  `date_invoice` date NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_invoice`
--

INSERT INTO `sales_invoice` (`id_sales_invoice`, `id_sales_order`, `date_invoice`, `status`) VALUES
(4, 3, '2024-07-10', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `id_sales_order` int(25) NOT NULL,
  `id_sales_quotation` int(25) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tanggal_order` date NOT NULL,
  `detail_order` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`id_sales_order`, `id_sales_quotation`, `id_produk`, `tanggal_order`, `detail_order`, `status`) VALUES
(0, 3, 4, '2024-07-18', 'Surya 1 Slop', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `sales_quotation`
--

CREATE TABLE `sales_quotation` (
  `id_sales_quotation` int(25) NOT NULL,
  `id_sales_inquiry` int(25) NOT NULL,
  `id_customer` int(25) NOT NULL,
  `id_produk` int(25) NOT NULL,
  `total` int(25) NOT NULL,
  `id_sales_inquiry_` int(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quotation`
--

INSERT INTO `sales_quotation` (`id_sales_quotation`, `id_sales_inquiry`, `id_customer`, `id_produk`, `total`, `id_sales_inquiry_`, `status`) VALUES
(6, 2, 3, 4, 5, 0, 'Dalam Proses');

-- --------------------------------------------------------

--
-- Table structure for table `status_pembayaran`
--

CREATE TABLE `status_pembayaran` (
  `id_status_pembayaran` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `total_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbahanbaku`
--

CREATE TABLE `tbahanbaku` (
  `id_bahanbaku` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_bahanbaku` varchar(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbiaya`
--

CREATE TABLE `tbiaya` (
  `id_laporan_biaya` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `biaya_bahanbaku` int(25) NOT NULL,
  `biaya_overhead_produksi` int(25) NOT NULL,
  `biaya_tenaga_kerja` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tinovasi`
--

CREATE TABLE `tinovasi` (
  `id_inovasi` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_aktor` varchar(25) NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `deskripsi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tinspeksi`
--

CREATE TABLE `tinspeksi` (
  `id_sortir_dan_inspeksi` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tpenerimaan`
--

CREATE TABLE `tpenerimaan` (
  `id_penerimaan_bahan_baku` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_bahanbaku` varchar(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tpengembangan`
--

CREATE TABLE `tpengembangan` (
  `id_pengembangan` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tperancangan`
--

CREATE TABLE `tperancangan` (
  `id_perancangan` int(10) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `jumlah` int(25) NOT NULL,
  `deskripsi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tproduk`
--

CREATE TABLE `tproduk` (
  `id_produk` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trencana`
--

CREATE TABLE `trencana` (
  `id_rencana` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga_jual` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ttransfer`
--

CREATE TABLE `ttransfer` (
  `id_pengiriman_barang_jadi` int(10) NOT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `gudang_tujuan` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahanbaku`);

--
-- Indexes for table `balance_report`
--
ALTER TABLE `balance_report`
  ADD PRIMARY KEY (`id_balance_report`);

--
-- Indexes for table `barang_jadi`
--
ALTER TABLE `barang_jadi`
  ADD PRIMARY KEY (`id_barangjadi`);

--
-- Indexes for table `capital_statement`
--
ALTER TABLE `capital_statement`
  ADD PRIMARY KEY (`id_capital_statement`);

--
-- Indexes for table `cash_flow`
--
ALTER TABLE `cash_flow`
  ADD PRIMARY KEY (`id_cash_flow`);

--
-- Indexes for table `data_vendor`
--
ALTER TABLE `data_vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`),
  ADD KEY `nama_department` (`nama_department`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `nama` (`nama`),
  ADD KEY `idx_nama` (`nama`);

--
-- Indexes for table `finansial_report`
--
ALTER TABLE `finansial_report`
  ADD PRIMARY KEY (`id_finansial_report`);

--
-- Indexes for table `gaji_karyawan`
--
ALTER TABLE `gaji_karyawan`
  ADD PRIMARY KEY (`id_gaji_karyawan`);

--
-- Indexes for table `general_journal`
--
ALTER TABLE `general_journal`
  ADD PRIMARY KEY (`id_general_journal`);

--
-- Indexes for table `income_statement`
--
ALTER TABLE `income_statement`
  ADD PRIMARY KEY (`id_income_statement`);

--
-- Indexes for table `input_cash_bank`
--
ALTER TABLE `input_cash_bank`
  ADD PRIMARY KEY (`id_input_cash_bank`);

--
-- Indexes for table `input_cost`
--
ALTER TABLE `input_cost`
  ADD PRIMARY KEY (`id_input_cost`);

--
-- Indexes for table `input_purchase`
--
ALTER TABLE `input_purchase`
  ADD PRIMARY KEY (`id_input_purchase`);

--
-- Indexes for table `input_sales`
--
ALTER TABLE `input_sales`
  ADD PRIMARY KEY (`id_input_sales`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `jadwal_pengiriman`
--
ALTER TABLE `jadwal_pengiriman`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id_pay`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `pemasaran_produk`
--
ALTER TABLE `pemasaran_produk`
  ADD PRIMARY KEY (`id_pemasaran`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `penerimaan_bb`
--
ALTER TABLE `penerimaan_bb`
  ADD PRIMARY KEY (`id_penerimaan_bahan_baku`);

--
-- Indexes for table `penerimaan_bj`
--
ALTER TABLE `penerimaan_bj`
  ADD PRIMARY KEY (`id_penerimaan_barang_jadi`);

--
-- Indexes for table `pengiriman_bb`
--
ALTER TABLE `pengiriman_bb`
  ADD PRIMARY KEY (`id_pengiriman_bahan_baku`);

--
-- Indexes for table `pengiriman_bj`
--
ALTER TABLE `pengiriman_bj`
  ADD PRIMARY KEY (`id_pengiriman_barang_jadi`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`id_production`);

--
-- Indexes for table `purchase_inquiry`
--
ALTER TABLE `purchase_inquiry`
  ADD PRIMARY KEY (`id_purchase_inquiry`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id_purchase_order`);

--
-- Indexes for table `purchase_quotation`
--
ALTER TABLE `purchase_quotation`
  ADD PRIMARY KEY (`id_purchase_quotation`);

--
-- Indexes for table `purchase_requisition`
--
ALTER TABLE `purchase_requisition`
  ADD PRIMARY KEY (`id_purchase_requisition`);

--
-- Indexes for table `purchase_return`
--
ALTER TABLE `purchase_return`
  ADD PRIMARY KEY (`id_purchase_return`);

--
-- Indexes for table `request_for_quotation`
--
ALTER TABLE `request_for_quotation`
  ADD PRIMARY KEY (`id_rfq`);

--
-- Indexes for table `sales_inquiry`
--
ALTER TABLE `sales_inquiry`
  ADD PRIMARY KEY (`id_sales_inquiry`);

--
-- Indexes for table `sales_invoice`
--
ALTER TABLE `sales_invoice`
  ADD PRIMARY KEY (`id_sales_invoice`);

--
-- Indexes for table `sales_quotation`
--
ALTER TABLE `sales_quotation`
  ADD PRIMARY KEY (`id_sales_quotation`);

--
-- Indexes for table `status_pembayaran`
--
ALTER TABLE `status_pembayaran`
  ADD PRIMARY KEY (`id_status_pembayaran`);

--
-- Indexes for table `tbahanbaku`
--
ALTER TABLE `tbahanbaku`
  ADD PRIMARY KEY (`id_bahanbaku`);

--
-- Indexes for table `tbiaya`
--
ALTER TABLE `tbiaya`
  ADD PRIMARY KEY (`id_laporan_biaya`);

--
-- Indexes for table `tinspeksi`
--
ALTER TABLE `tinspeksi`
  ADD PRIMARY KEY (`id_sortir_dan_inspeksi`);

--
-- Indexes for table `tpenerimaan`
--
ALTER TABLE `tpenerimaan`
  ADD PRIMARY KEY (`id_penerimaan_bahan_baku`);

--
-- Indexes for table `tpengembangan`
--
ALTER TABLE `tpengembangan`
  ADD PRIMARY KEY (`id_pengembangan`);

--
-- Indexes for table `tperancangan`
--
ALTER TABLE `tperancangan`
  ADD PRIMARY KEY (`id_perancangan`);

--
-- Indexes for table `tproduk`
--
ALTER TABLE `tproduk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `trencana`
--
ALTER TABLE `trencana`
  ADD PRIMARY KEY (`id_rencana`);

--
-- Indexes for table `ttransfer`
--
ALTER TABLE `ttransfer`
  ADD PRIMARY KEY (`id_pengiriman_barang_jadi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id_bahanbaku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `balance_report`
--
ALTER TABLE `balance_report`
  MODIFY `id_balance_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `barang_jadi`
--
ALTER TABLE `barang_jadi`
  MODIFY `id_barangjadi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `capital_statement`
--
ALTER TABLE `capital_statement`
  MODIFY `id_capital_statement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cash_flow`
--
ALTER TABLE `cash_flow`
  MODIFY `id_cash_flow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_vendor`
--
ALTER TABLE `data_vendor`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `finansial_report`
--
ALTER TABLE `finansial_report`
  MODIFY `id_finansial_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gaji_karyawan`
--
ALTER TABLE `gaji_karyawan`
  MODIFY `id_gaji_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_journal`
--
ALTER TABLE `general_journal`
  MODIFY `id_general_journal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `income_statement`
--
ALTER TABLE `income_statement`
  MODIFY `id_income_statement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `input_cash_bank`
--
ALTER TABLE `input_cash_bank`
  MODIFY `id_input_cash_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `input_cost`
--
ALTER TABLE `input_cost`
  MODIFY `id_input_cost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `input_purchase`
--
ALTER TABLE `input_purchase`
  MODIFY `id_input_purchase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `input_sales`
--
ALTER TABLE `input_sales`
  MODIFY `id_input_sales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jadwal_pengiriman`
--
ALTER TABLE `jadwal_pengiriman`
  MODIFY `id_jadwal` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id_pay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemasaran_produk`
--
ALTER TABLE `pemasaran_produk`
  MODIFY `id_pemasaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penerimaan_bb`
--
ALTER TABLE `penerimaan_bb`
  MODIFY `id_penerimaan_bahan_baku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `penerimaan_bj`
--
ALTER TABLE `penerimaan_bj`
  MODIFY `id_penerimaan_barang_jadi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengiriman_bb`
--
ALTER TABLE `pengiriman_bb`
  MODIFY `id_pengiriman_bahan_baku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pengiriman_bj`
--
ALTER TABLE `pengiriman_bj`
  MODIFY `id_pengiriman_barang_jadi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `id_production` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_inquiry`
--
ALTER TABLE `purchase_inquiry`
  MODIFY `id_purchase_inquiry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id_purchase_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_quotation`
--
ALTER TABLE `purchase_quotation`
  MODIFY `id_purchase_quotation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase_requisition`
--
ALTER TABLE `purchase_requisition`
  MODIFY `id_purchase_requisition` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_return`
--
ALTER TABLE `purchase_return`
  MODIFY `id_purchase_return` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request_for_quotation`
--
ALTER TABLE `request_for_quotation`
  MODIFY `id_rfq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales_inquiry`
--
ALTER TABLE `sales_inquiry`
  MODIFY `id_sales_inquiry` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales_invoice`
--
ALTER TABLE `sales_invoice`
  MODIFY `id_sales_invoice` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales_quotation`
--
ALTER TABLE `sales_quotation`
  MODIFY `id_sales_quotation` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `status_pembayaran`
--
ALTER TABLE `status_pembayaran`
  MODIFY `id_status_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbahanbaku`
--
ALTER TABLE `tbahanbaku`
  MODIFY `id_bahanbaku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbiaya`
--
ALTER TABLE `tbiaya`
  MODIFY `id_laporan_biaya` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tinspeksi`
--
ALTER TABLE `tinspeksi`
  MODIFY `id_sortir_dan_inspeksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tpenerimaan`
--
ALTER TABLE `tpenerimaan`
  MODIFY `id_penerimaan_bahan_baku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tpengembangan`
--
ALTER TABLE `tpengembangan`
  MODIFY `id_pengembangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tperancangan`
--
ALTER TABLE `tperancangan`
  MODIFY `id_perancangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tproduk`
--
ALTER TABLE `tproduk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `trencana`
--
ALTER TABLE `trencana`
  MODIFY `id_rencana` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ttransfer`
--
ALTER TABLE `ttransfer`
  MODIFY `id_pengiriman_barang_jadi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `payroll_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `employees` (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
