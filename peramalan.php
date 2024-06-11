<?php
include "style.css";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem peramalan persediaan obat</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- start css -->
<link rel="stylesheet" href="penjualan.css">

<!-- start font awesome -->
<script src="https://kit.fontawesome.com/2c5a7f5b8c.js" crossorigin="anonymous"></script>
<!-- end font awesome-->



</head>
<body>
    <div class="sidenav">
        <?php include 'sidebar.php'; ?>
    </div>

    <div style='flex: 1; max-height: 100vh; overflow: auto; padding-left: 36px; padding-right: 36px; padding-top: 36px'>
        <h1 style="margin-bottom: 24px">PERAMALAN</h1>
        
        Nama obat<br>

        <form action="peramalan.php" method="get">
            <select id="nama_obat" name="nama_obat">
                <option value="">Pilih obat</option>
                <option value="Amoxicillin 500 MG HJ Isi 200" <?= @$_GET['nama_obat'] === 'Amoxicillin 500 MG HJ Isi 200' ? 'selected' : '' ?>>Amoxicillin 500 mg HJ isi 200</option>
                <option value="Alpara Tablet" <?= @$_GET['nama_obat'] === 'Alpara Tablet' ? 'selected' : '' ?>>Alpara Tablet</option>
                <option value="Antangin JRG Cair Dewasa" <?= @$_GET['nama_obat'] === 'Antangin JRG Cair Dewasa' ? 'selected' : '' ?>>Antangin JRG Cair Dewasa</option>
            </select>
            <button>Pilih obat</button>
        </form>
        <br><br>

        <?php 
            if(isset($_GET['nama_obat']) && !empty($_GET['nama_obat'])){
                include "peramalan_proses.php"; 
            }
        ?>
        
    </div>
</body>
</html>