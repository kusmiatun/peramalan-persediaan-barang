<?php
session_start(); 

include "function.php"; 

$username = $_POST["username"];
$password = $_POST["password"]; 

$data = mysqli_query($conn,"SELECT * FROM skun_pengguna WHERE username='$username' AND password='$password'"); 
$cek = mysqli_num_rows($data);
// var_dump($username);
// die();
if ($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "Login";
    header("Location:beranda.php");
}else{
    header("Location:login.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil nilai dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username dan password diisi
    if (empty($username) || empty($password)) {
        // Jika kosong, kembali ke halaman login dengan pesan error
        $_SESSION['error'] = 'Username dan password harus diisi.';
        header('Location: login.php');
        exit();
    }
}