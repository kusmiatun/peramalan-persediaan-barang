<?php
include "database.php";

$id = $_GET['id'];
mysqli_query("DELETE FROM skun_pengguna WHERE id ='$id'")or die(mysqli_error());

header("location:data_pengguna.php?pesan=hapus");
?>