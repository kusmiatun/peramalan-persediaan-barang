<?php
include "database.php";

//masuk login
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($conn, "SELECT * FROM skun_pengguna where username='$username' and password='$password'");
$hitung = mysqli_num_rows($cekuser);

if($hitung>0){
    //jika data ditemukan
    $ambildatarole = mysqli_fetch_array($cekuser);
    $role = $ambildatarole['role'];

    if($role=='admin'){
        //kalau dia admin
        $_SESSION['log'] = 'logged';
        $_SESSION['role'] = 'admin';
        header('Location:admin');
    }else{
        //kalau dia pengadaan
        $_SESSION['log'] = 'logged';
        $_SESSION['role'] = 'pengadaan';
        header('Location:pengadaan');
    }
}
}
?>