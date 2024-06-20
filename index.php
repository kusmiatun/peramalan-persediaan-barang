<?php 
include_once 'private_guard.php';
include 'database.php';

// Dapatkan informasi pengguna dari sesi atau database
// Asumsikan ada sesi yang berisi informasi pengguna
$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'Guest';
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'User';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistem Peramalan Persediaan Obat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2c5a7f5b8c.js" crossorigin="anonymous"></script>

    <!-- Custom Style -->
    <style>
        .image-container {
            position: relative;
            text-align: center;
            color: white;
        }
        .image-container img {
            width: 150%;
            height: 100vh;
            object-fit: cover;
            opacity: 0.7;
        }
        .welcome-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2rem;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        .datetime {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 1.2rem;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="sidenav">
        <?php include 'sidebar.php'; ?>
    </div>
    <div class="image-container">
        <img src="image/gudang.jpg" alt="Gudang">
        <div class="welcome-text">
            Selamat Datang, <?php echo htmlspecialchars($username); ?>! (Role: <?php echo htmlspecialchars($role); ?>)
        </div>
        <div class="datetime" id="datetime"></div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JS for Date and Time -->
    <script>
        function updateDateTime() {
            const now = new Date();
            const dateTimeString = now.toLocaleString('en-GB', {
                weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit'
            });
            document.getElementById('datetime').innerText = dateTimeString;
        }
        setInterval(updateDateTime, 1000);
        updateDateTime(); // initial call
    </script>
</body>
</html>
