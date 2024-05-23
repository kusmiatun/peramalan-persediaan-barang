<?php
// Start the session
session_start();

if (isset($_SESSION['username']) == false) { 
 header("Location: login.php"); 
}

include "style.css";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem peramalan persediaan obat</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- start css -->
<link rel="stylesheet" href="pengguna.css">

<!-- start font awesome -->
<script src="https://kit.fontawesome.com/2c5a7f5b8c.js" crossorigin="anonymous"></script>
<!-- end font awesome-->

<div class="sidenav">
<?php include 'sidebar.php'; ?>
</div>
</head>

<body>
<form action="pengguna_proses.php" method="POST">  
<div class="container">
<h1>INPUT PENGGUNA</h1>
<br/>
<br/>
    Divisi<br>
    <input type="text" name="divi"><br><br>
    Username<br>
    <input type="text" name="username"><br><br>
    Password<br>
    <input type="text" name="password"><br><br>
    <button type="submit" name="insert">Simpan</button>
    <button type="reset" name="hapus">Hapus</button>
</form> 
</div>
</body>
</html>