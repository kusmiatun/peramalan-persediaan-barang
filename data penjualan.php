<?php
include "database.php";

if(isset($_POST['insert'])) {
    $nama_obat = $_POST['nama_obat'];
    $periode = $_POST['periode'];
    $jumlah_penjualan = $_POST['jumlah_penjualan'];

    $sql = "INSERT INTO data_penjualan (nama_obat, periode, jumlah_penjualan) VALUES
    ('$nama_obat', '$periode', '$jumlah_penjualan')";

    if($conn->query($sql)== TRUE) {
        echo "data berhasil ditambahkan";
    }else {
        echo "error:". $sql. "<br>". $conn->error;
    }
    }
 $conn->close();
?> 

<!DOCTYPE html>
<html>
<body>
    <style>
        </style>
<h2>Isi data penjualan</h2>

<form action="data penjualan.php" method="POST"> 
    Nama obat<br>
    <input type="text" name="nama_obat"><br><br>  
    Periode<br>
    <input type="date" name="periode"><br><br>
    Jumlah penjualan<br>
    <input type="text" name="jumlah_penjualan"><br><br>
    <button type="submit" name="insert">Simpan</button>
    <button type="reset" name="hapus">Hapus</button>
</form> 

</body>
</html>
