<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_obat = $_POST['nama_obat'];
    $periode = $_POST['periode'];
    $jumlah_penjualan = $_POST['jumlah_penjualan'];

    if (empty($nama_obat) || empty($periode)|| empty($jumlah_penjualan)) {
        $_SESSION['error'] = 'nama_obat, periode, jumlah_penjualan harus diisi.';
        ?>
        <script type="text/javascript">
            alert("Data Harus Diisi");
            window.location='input_penjualan.php';
        </script>
        <?php
    }
}
?>
<?php
include "database.php";

if(isset($_POST['insert'])) {
    $nama_obat = $_POST['nama_obat'];
    $periode = $_POST['periode'];
    $jumlah_penjualan = $_POST['jumlah_penjualan'];

    $sql = "INSERT INTO data_penjualan (nama_obat, periode, jumlah_penjualan) VALUES
    ('$nama_obat', '$periode', '$jumlah_penjualan')";

    if($conn->query($sql)== TRUE) {
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Ditambahkan");
            window.location='input_penjualan.php';
        </script>
        <?php
    }else {
        echo "error:". $sql. "<br>". $conn->error;
        header("Location:input_penjualan.php");
    }
   }  
   if (isset($_POST['cancel'])) {
   header("Location:index.php");
   }
 $conn->close();
?> 


