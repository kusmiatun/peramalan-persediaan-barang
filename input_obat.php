<?php
include "private_guard.php";

include "style.css";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem peramalan persediaan obat</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- start css -->
<link rel="stylesheet" href="input_obat.css">

<!-- start font awesome -->
<script src="https://kit.fontawesome.com/2c5a7f5b8c.js" crossorigin="anonymous"></script>
<!-- end font awesome-->

</head>

<body>
    <div class="sidenav">
        <?php include 'sidebar.php'; ?>
    </div>
    <div style="heigh: 100vh; flex: 1">
    <div class="container">
            <form action="input_obat_proses.php" method="POST">  
                <h1>INPUT OBAT</h1>
                <br/>
                <br/>
                Deskripsi obat
                <br>
                <input type="text" name="deskripsi_obat">
                <br><br>
                Merk
                <br>
                <input type="text" name="merk">
                <br><br>
                
                <button type="submit" name="insert">Simpan</button>
                <button type="cancel" name="cancel">Kembali</button>
            </form> 
        </div>
    </div>
</body>
</html>