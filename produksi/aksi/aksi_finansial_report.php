<?php
include "../koneksi/koneksi.php";

// Proses penyimpanan data (Create)
if (isset($_POST['bsimpan'])) {
    $category = $_POST['category'];
    $item_name = $_POST['item_name'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];

    $simpan = mysqli_query($koneksi, "INSERT INTO balance_sheet (category, item_name, amount, date)
                                     VALUES ('$category', '$item_name', '$amount', '$date')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='balancesheet.php';
              </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='balancesheet.php';
              </script>";
    }
}

// Proses pengubahan data (Update)
if (isset($_POST['bubah'])) {
    $id_balance_sheet = $_POST['id_balance_sheet'];
    $category = $_POST['category'];
    $item_name = $_POST['item_name'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];

    $ubah = mysqli_query($koneksi, "UPDATE balance_sheet SET
                                    category = '$category',
                                    item_name = '$item_name',
                                    amount = '$amount',
                                    date = '$date'
                                    WHERE id_balance_sheet = '$id_balance_sheet'");

    if ($ubah) {
        echo "<script>
                alert('Ubah Data Sukses!');
                document.location='balancesheet.php';
              </script>";
    } else {
        echo "<script>
                alert('Ubah Data Gagal!');
                document.location='balancesheet.php';
              </script>";
    }
}

// Proses penghapusan data (Delete)
if (isset($_POST['bhapus'])) {
    $id_balance_sheet = $_POST['id_balance_sheet'];

    $hapus = mysqli_query($koneksi, "DELETE FROM balance_sheet WHERE id_balance_sheet = '$id_balance_sheet'");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='balancesheet.php';
              </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='balancesheet.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance Sheet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Input Balance Sheet</h2>
        <!-- Form Input Balance Sheet -->
        <form method="POST" action="">
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="Assets">Assets</option>
                    <option value="Liabilities">Liabilities</option>
                    <option value="Equity">Equity</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="item_name" class="form-label">Item Name</label>
                <input type="text" class="form-control" id="item_name" name="item_name" required>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <button type="submit" name="bsimpan" class="btn btn-primary">Submit</button>
        </form>

        <h2 class="mt-5">Balance Sheet</h2>
        <div class="row">
            <!-- Assets Section -->
            <div class="col-md-4">
                <h3>Assets</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = mysqli_query($koneksi, "SELECT * FROM balance_sheet WHERE category='Assets'");
                        $total_assets = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                    <td>{$row['item_name']}</td>
                                    <td>{$row['amount']}</td>
                                    <td>
                                        <form method='POST' action='' style='display:inline;'>
                                            <input type='hidden' name='id_balance_sheet' value='{$row['id_balance_sheet']}'>
                                            <button type='submit' name='bhapus' class='btn btn-danger btn-sm'>Hapus</button>
                                        </form>
                                        <button type='button' class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#editModal{$row['id_balance_sheet']}'>Edit</button>
                                    </td>
                                  </tr>";
                            $total_assets += $row['amount'];
                        ?>
                        <!-- Modal Edit -->
                        <div class="modal fade" id="editModal<?php echo $row['id_balance_sheet']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="">
                                    <input type="hidden" name="id_balance_sheet" value="<?php echo $row['id_balance_sheet']; ?>">
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Category</label>
                                        <select class="form-select" name="category" required>
                                            <option value="Assets" <?php if ($row['category'] == 'Assets') echo 'selected'; ?>>Assets</option>
                                            <option value="Liabilities" <?php if ($row['category'] == 'Liabilities') echo 'selected'; ?>>Liabilities</option>
                                            <option value="Equity" <?php if ($row['category'] == 'Equity') echo 'selected'; ?>>Equity</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="item_name" class="form-label">Item Name</label>
                                        <input type="text" class="form-control" name="item_name" value="<?php echo $row['item_name']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="amount" class="form-label">Amount</label>
                                        <input type="number" class="form-control" name="amount" value="<?php echo $row['amount']; ?>" step="0.01" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" class="form-control" name="date" value="<?php echo $row['date']; ?>" required>
                                    </div>
                                    <button type="submit" name="bubah" class="btn btn-warning">Update</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                        }
                        ?>
                        <tr>
                            <td><strong>Total Assets</strong></td>
                            <td><strong><?php echo $total_assets; ?></strong></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Liabilities Section -->
            <div class="col-md-4">
                <h3>Liabilities</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr
