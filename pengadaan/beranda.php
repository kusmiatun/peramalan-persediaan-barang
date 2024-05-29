<?php
// Start the session
session_start();

if (isset($_SESSION['username']) == false) { 
 header("Location: login.php"); 
}

include "style.css";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem peramalan persediaan obat</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- start css -->
<link rel="stylesheet" href="beranda.css">

<!-- start font awesome -->
<script src="https://kit.fontawesome.com/2c5a7f5b8c.js" crossorigin="anonymous"></script>
<!-- end font awesome-->

<div class="sidenav">
<?php include 'sidebar.php'; ?>
</div>
</head>
<body>
  <div class="image-container">
    <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="image">
	    <div class="overlay-text">
        Selamat datang, Pengadaan
	    </div>
<!--     <img src="https://ondemand.bannerbear.com/simpleurl/vKJl40B6DjQkno2NDV/image/text_container/text/Your+text+here/image_container/image_url/https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80/" alt="image"> -->
  </div>
</body>
</html>