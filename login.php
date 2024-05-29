<?php
include "login.css";
// session_start(); 

// include "database.php"; 

// $username = $_POST["username"];
// $password = $_POST["password"]; 

// $data = mysqli_query($conn,"SELECT * FROM skun_pengguna WHERE username='$username' AND password='$password'"); 
// $cek = mysqli_num_rows($data);
// // var_dump($cek);
// // die();
// if ($cek > 0){
//     $_SESSION['username'] = $username;
//     $_SESSION['status'] = "Login";
//     header("Location:index.php");
// }else{
//     header("Location:login.php");
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title> Halaman Login</title>
</head>
<body>
<form action="login_proses.php" method="POST">
   <div class="container">
   <h1>Halaman Login</h1>
    Username<br>
    <input type="text" name="username" placeholder="Enter the username"><br><br>
    Password<br>
    <input type="password" name="password" placeholder="Enter the password"><br><br>
    <button type="submit" name="login">Login</button>
   </form>
</div>
</body>
</html> 