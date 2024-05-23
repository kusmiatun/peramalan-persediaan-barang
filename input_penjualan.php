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
<link rel="stylesheet" href="input_penjualan.css">

<!-- start font awesome -->
<script src="https://kit.fontawesome.com/2c5a7f5b8c.js" crossorigin="anonymous"></script>
<!-- end font awesome-->

<div class="sidenav">
<?php include 'sidebar.php'; ?>
</div>
</head>
<body>
<form action="input_proses.php" method="POST"> 
<div class="container">
<h1>INPUT PENJUALAN</h1>
<br/>
<br/>
    Nama obat<br>
    <select id="nama_obat" name="nama_obat">
    <option value=""></option>
    <option value="Amoxicillin 500 MG HJ Isi 200">Amoxicillin 500 mg HJ isi 200</option>
    <option value="Alpara Tablet">Alpara Tablet</option>
    <option value="Antangin JRG Cair Dewasa">Antangin JRG Cair Dewasa</option>
    </select><br><br>
    Periode<br>
    <input type="date" name="periode"><br><br>
    Jumlah penjualan<br>
    <input type="text" name="jumlah_penjualan"><br><br>
    <button type="submit" name="insert">Simpan</button>
    <button type="reset" name="hapus">Hapus</button>
</form> 
</div>
</body>
</html>