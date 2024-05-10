<?php
session_start(); 

include "database.php"; 

$username = $_POST["username"];
$password = $_POST["password"]; 

$data = mysqli_query($conn,"SELECT * FROM skun_pengguna WHERE username='$username' AND password='$password'"); 
$cek = mysqli_num_rows($data);

if ($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "Login";
    header("Location:index.php");
}else{
    header("Location:login.php?pesan=gagal");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title> Halaman Login</title>
</head>
<body>
   <h1>Halaman Login</h1>
<form action="login.php" method="POST">
    Username <input type="text" name="username" placeholder="Enter the username"><br><br>
    Password <input type="password" name="password" placeholder="Enter the password"><br><br>
    <button type="submit" name="insert">Login</button>
</form>
</body>
</html> 