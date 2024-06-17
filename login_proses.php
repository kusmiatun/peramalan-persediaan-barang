<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $_SESSION['error'] = 'Username dan password harus diisi.';
        header('Location: login.php');
        exit();
    }
}

include "database.php";

session_start(); 


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($conn, "SELECT * FROM skun_pengguna where username='$username' and password='$password'");
    $hitung = mysqli_num_rows($cekuser);

    if($hitung>0){
        $ambildatarole = mysqli_fetch_array($cekuser);
        $role = $ambildatarole['role'];

        if($role=='admin'){
            //kalau dia admin
            $_SESSION['log'] = 'logged';
            $_SESSION['role'] = 'admin';
            header('Location:index.php');
        }else{
            //kalau dia pengadaan
            $_SESSION['log'] = 'logged';
            $_SESSION['role'] = 'pengadaan';
            header('Location:index.php');
        }
    }else{
        header('Location:login.php');
    }
}

