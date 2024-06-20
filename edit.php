<?php
// Koneksi ke database
include 'database.php';
$id = $_GET['id'];

// Mengambil data berdasarkan ID
$sql = "SELECT * FROM skun_pengguna WHERE id_pengguna = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan!";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $divisi = $_POST['divisi'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Update data ke database
    $sql = "UPDATE skun_pengguna SET divisi='$divisi', username='$username', password='$password' WHERE id_pengguna=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diupdate!";
        header("Location: data_pengguna.php"); // Ganti dengan halaman yang sesuai
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
            <label for="divisi">Divisi</label>
            <input type="text" class="form-control" id="divisi" name="divisi" value="<?php echo htmlspecialchars($row['divisi']); ?>" required>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($row['username']); ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="<?php echo htmlspecialchars($row['password']); ?>" required>
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
