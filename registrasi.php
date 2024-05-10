 <?php
     include "database.php";

     if(isset($_POST["username"]) && isset($_POST["password"])){
        $divisi = $_POST["divisi"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO skun_pengguna (divisi, username, password) VALUES
        ('$divisi', '$username', '$password')";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "DATA MASUK";
        }else {
            echo "DATA GAGAL MASUK";
        }
     }  
?> 
<!DOCTYPE html>
<html lang="en">
<head> 
   <title></title>
</head>
<body>
    <h1>INPUT DATA PENGGUNA</h1>
<form action="registrasi.php" method="POST">  
    Divisi<br>
    <select id="divisi" name="divisi">
    <option value="Bag.keuangan">Bag.pengadaan</option>
    <option value="Admin">Admin</option>
    </select><br><br>
    Username<br>
    <input type="text" name="username"><br><br>
    Password<br>
    <input type="text" name="password"><br><br>
    <button type="submit" name="insert">Simpan</button>
    <button type="reset" name="hapus">Hapus</button>
</form> 
</body>
</html> 

