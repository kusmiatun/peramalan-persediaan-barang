<?php
include "style.css";
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
    <link rel="stylesheet" href="pengguna.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2c5a7f5b8c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="sidenav">
        <?php include 'sidebar.php'; ?>
    </div>
    <div class="col-8 bg-light">
        <?php
        include "database.php";
        
        $sql = "SELECT * FROM skun_pengguna";  
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table class='table table-striped table-bordered'>";
            echo "
                <thead class='thead-dark'>
                    <tr>
                        <th>Divisi</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>";
                
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["divisi"] . "</td>";  
                echo "<td>" . $row["username"] . "</td>"; 
                echo "<td>" . $row["password"] . "</td>"; 
                echo "<td>";
                echo '<input type="button" class="btn btn-primary btn-sm mr-2" onclick="editRow(' . $row["id_pengguna"] . ')" value="Edit">';
                echo '<input type="button" class="btn btn-danger btn-sm" onclick="deleteRow(' . $row["id_pengguna"] . ')" value="Hapus">';
                echo "</td>";
                echo "</tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p class='text-center'>0 results</p>";
        }
        ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
    function editRow(id) {
        // Redirect ke halaman edit dengan id yang sesuai
        window.location.href = 'edit.php?id=' + id;
    }
    
    function deleteRow(id) {
        // Konfirmasi sebelum menghapus
        if (confirm('Anda yakin ingin menghapus data ini?')) {
            // Redirect ke halaman delete dengan id yang sesuai
            window.location.href = 'delete.php?id=' + id;
        }
    }
    </script>
</body>
</html>
