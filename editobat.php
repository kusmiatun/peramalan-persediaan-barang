<?php
// Koneksi ke database
include 'database.php';
$id = $_GET['id'];

// Mengambil data berdasarkan ID
$sql = "SELECT * FROM data_obat WHERE id_obat = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan!";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $deskripsi_obat = $_POST['deskripsi_obat'];
    $merk = $_POST['merk'];
   
    // Update data ke database
    $sql = "UPDATE data_obat SET deskripsi_obat='$deskripsi_obat', merk='$merk' WHERE id_obat=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diupdate!";
        header("Location: data_obat.php"); // Ganti dengan halaman yang sesuai
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
 
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2c5a7f5b8c.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-4">
    <h1>Edit Data Pengguna</h1>
    <form method="post" action="">
        <div class="form-group">
            <label for="deskripsi_obat">deskripsi obat</label>
            <input type="text" class="form-control" id="deskripsi_obat" name="deskripsi_obat" value="<?php echo htmlspecialchars($row['deskripsi_obat']); ?>" required>
        </div>
        <div class="form-group">
            <label for="merk">merk</label>
            <input type="text" class="form-control" id="merk" name="merk" value="<?php echo htmlspecialchars($row['merk']); ?>" required>
        </div>
        
        <button type="submit" class="btn btn-primary mt-1 p-1">Update</button>
        <button type="button" class="btn btn-secondary mt-1 p-1" onclick="window.location.href='data_pengguna.php'">Kembali</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
