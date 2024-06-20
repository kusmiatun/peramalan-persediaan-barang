<?php
// Koneksi ke database
include 'database.php';

$id = $_GET['id'];

// Menghapus data berdasarkan ID
$sql = "DELETE FROM skun_pengguna WHERE id_pengguna = $id";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus!";
    header("Location: index.php"); // Ganti dengan halaman yang sesuai
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
