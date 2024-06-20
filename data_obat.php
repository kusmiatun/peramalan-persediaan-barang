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
    <div class="bg-light col-10">
        <?php
        include "database.php";

        $sql = "SELECT * FROM data_obat";  
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table class='table table-striped table-bordered'>";
            echo "
                <thead class='thead-dark'>
                    <tr>
                        <th>Deskripsi Obat</th>
                        <th>Merk</th><th>aksi</th>
                    </tr>
                </thead>
                <tbody>";
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["deskripsi_obat"] . "</td>";  
                echo "<td>" . $row["merk"] . "</td>"; 
                echo "<td>";
                echo '<input type="button" class="btn btn-primary btn-sm mr-2" onclick="editRow(' . $row["id_obat"] . ')" value="Edit">';
                echo '<input type="button" class="btn btn-danger btn-sm" onclick="deleteRow(' . $row["id_obat"] . ')" value="Hapus">';
                echo "</td>";
                echo "</tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<p class='text-center'>0 results</p>";
        }
        ?>
    </div><script>
    function editRow(id) {
        // Redirect ke halaman edit dengan id yang sesuai
        window.location.href = 'editobat.php?id=' + id;
    }
    
    function deleteRow(id) {
        // Konfirmasi sebelum menghapus
        if (confirm('Anda yakin ingin menghapus data ini?')) {
            // Redirect ke halaman delete dengan id yang sesuai
            window.location.href = 'deleteobat.php?id=' + id;
        }
    }
    </script>
    

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
