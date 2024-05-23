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
            // echo "DATA MASUK";
            header("Location:menu_pengguna.php");
        }else {
            header("Location:menu_pengguna.php");
            // echo "DATA GAGAL MASUK";
        }
     }  
?> 