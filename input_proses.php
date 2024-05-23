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
       header("Location:input_penjualan.php");
    }else {
        echo "error:". $sql. "<br>". $conn->error;
        header("Location:input_penjualan.php");
    }
    }
 $conn->close();
?> 