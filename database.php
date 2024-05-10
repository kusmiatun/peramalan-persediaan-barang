<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "pengguna";

$conn = mysqli_connect($hostname, $username, $password, $database_name);
if($conn->connect_error) {
   echo "Koneksi database gagal";
   die("error!"); 
}else{
   echo "koneksi berhasil";
}
?> 
