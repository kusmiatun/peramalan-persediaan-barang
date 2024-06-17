<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $deskripsi_obat = $_POST['deskripsi_obat'];
    $merk = $_POST['merk'];

    if (empty($deskripsi_obat) || empty($merk)) {
        $_SESSION['error'] = 'deksripsi_obat, dan merk harus diisi.';
        ?>
        <script type="text/javascript">
            alert("Data Harus Diisi");
            window.location='input_obat.php';
        </script>
        <?php
    }
}
?>
<?php
     include "database.php";

     if(isset($_POST['insert'])) {
        $deskripsi_obat = $_POST['deskripsi_obat'];
        $merk = $_POST['merk'];

        $sql = "INSERT INTO data_obat (deskripsi_obat, merk) VALUES
        ('$deskripsi_obat', '$merk')";

        if($conn->query($sql)==TRUE) {
            ?>
            <script type="text/javascript">
            alert("Data Berhasil Ditambahkan");
            window.location='input_obat.php';
            </script>
            <?php
        }else {
            echo "error:". $sql. "<br>". $conn->error;
            header("Location:input_obat.php");
        }
     }  
     if (isset($_POST['cancel'])) {
        header("Location:index.php");
    }
?> 