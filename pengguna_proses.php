<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $divisi = $_POST['divisi'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role= $_POST ['role'];
    if (empty($divisi) || empty($username)|| empty($password) || empty($role)) {
        $_SESSION['error'] = 'divisi, username, admin password harus diisi.';
        ?>
        <script type="text/javascript">
            alert("Data Harus Diisi");
            window.location='menu_pengguna.php';
        </script>
        <?php
    }
}
?>
<?php
     include "database.php";

     if(isset($_POST['insert'])) {
        $divisi = $_POST['divisi'];
        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = "INSERT INTO skun_pengguna (divisi, username, password, role) VALUES
        ('$divisi', '$username', '$password', '$role')";

        if($conn->query($sql)==TRUE) {
            ?>
            <script type="text/javascript">
            alert("Data Berhasil Ditambahkan");
            window.location='menu_pengguna.php';
            </script>
            <?php
        }else {
            echo "error:". $sql. "<br>". $conn->error;
            header("Location:menu_penggguna.php");
        }
     }  
     if (isset($_POST['cancel'])) {
        header("Location:index.php");
    }
?> 