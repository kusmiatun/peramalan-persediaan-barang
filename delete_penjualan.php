<?php
// Koneksi ke database
include 'database.php';

$id = $_GET['id'];

// Menghapus data berdasarkan ID
$sql = "DELETE FROM data_penjualan WHERE id_penjualan = $id";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus!";
    header("Location: data_penjualan.php"); // Ganti dengan halaman yang sesuai
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
