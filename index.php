<?php
session_start(); 

if (isset($_SESSION['username'])) { 

 header("Location: index.php"); 

} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem peramalan persediaan obat</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- start css -->
<link rel="stylesheet" href="style.css">

<!-- start font awesome -->
<script src="https://kit.fontawesome.com/2c5a7f5b8c.js" crossorigin="anonymous"></script>
<!-- end font awesome-->

</head>
<body>
<div class="sidenav">
<div class="logo"><a href=""><img src="BSJ.jpg" alt="Logo bsj" style="width:25%">PT. BARRIZ SANTUN JAYA</a></div>
  <a href="beranda.html"><i class="fa-solid fa-house"></i> Beranda</a>
  <a href="Registrasi.php"><i class="fa-solid fa-users"></i> Data pengguna</a>
  <a href="data penjualan.php"><i class="fa-solid fa-folder-open"></i> Data penjualan</a>
  <a href="#Peramalan"><i class="fa-solid fa-chart-line"></i> Peramalan</a>
  <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
</div>

<div class="content">
  <h2>SELAMAT DATANG DI WEBSITE PERAMALAN PERSEDIAAN OBAT PT. BARRIZ SANTUN JAYA</h2>
</div>

</body>
</html>