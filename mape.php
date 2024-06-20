<?php
include "style.css";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistem Peramalan Persediaan Obat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2c5a7f5b8c.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="penjualan.css">

</head>
<body>
        <div class="sidenav bg-dark text-light p-4">
            <?php include 'sidebar.php'; ?>
        </div>

        <div class="flex-grow-1 p-4 overflow-auto">
            <h1 class="mb-4">PERAMALAN</h1>
            
            <form action="mape.php" method="get" class="mb-4">
                <div class="form-group">
                    <label for="nama_obat">Nama Obat</label>
                    <select id="nama_obat" name="nama_obat" class="form-control">
                        <option value="">Pilih obat</option>
                        <option value="Amoxicillin 500 MG HJ Isi 200" <?= @$_GET['nama_obat'] === 'Amoxicillin 500 MG HJ Isi 200' ? 'selected' : '' ?>>Amoxicillin 500 mg HJ isi 200</option>
                        <option value="Alpara Tablet" <?= @$_GET['nama_obat'] === 'Alpara Tablet' ? 'selected' : '' ?>>Alpara Tablet</option>
                        <option value="Antangin JRG Cair Dewasa" <?= @$_GET['nama_obat'] === 'Antangin JRG Cair Dewasa' ? 'selected' : '' ?>>Antangin JRG Cair Dewasa</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Pilih Obat</button>
            </form>

            <?php 
            if(isset($_GET['nama_obat']) && !empty($_GET['nama_obat'])){
                include "mape_proses.php"; 
            }
            ?>
        </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
