<?php
include "style.css";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem peramalan persediaan obat</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2c5a7f5b8c.js" crossorigin="anonymous"></script>

    <!-- Your custom CSS -->
    <link rel="stylesheet" href="penjualan.css">
</head>
<body>
    <div class="sidenav">
        <?php include 'sidebar.php'; ?>
    </div>

    <div class="container-fluid" style="padding: 36px;">
        <h1 class="mb-4">DATA PENJUALAN</h1>
        <form action="data_penjualan.php" method="get" class="form-inline mb-4">
            <label for="nama_obat" class="mr-sm-2">Nama obat</label>
            <select id="nama_obat" name="nama_obat" class="form-control mr-sm-2">
                <option value="">Pilih obat</option>
                <option value="Amoxicillin 500 MG HJ Isi 200">Amoxicillin 500 mg HJ isi 200</option>
                <option value="Alpara Tablet">Alpara Tablet</option>
                <option value="Antangin JRG Cair Dewasa">Antangin JRG Cair Dewasa</option>
            </select>
            <button type="submit" class="btn btn-primary">Pilih obat</button>
        </form>

        <?php 
        if(isset($_GET['nama_obat']) && !empty($_GET['nama_obat'])){
            include "penjualan_proses.php"; 
        }
        ?>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
