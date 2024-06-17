<?php
include "style.css";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem peramalan persediaan obat</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- start css -->
<link rel="stylesheet" href="pengguna.css">

<!-- start font awesome -->
<script src="https://kit.fontawesome.com/2c5a7f5b8c.js" crossorigin="anonymous"></script>
<!-- end font awesome-->



</head>
<body>
    <div class="sidenav">
        <?php include 'sidebar.php'; ?>
    </div>
    <?php
    include "database.php";
    
    $sql = "SELECT * FROM data_obat";  
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1' style='width: 80%'>";
        echo "
            <tr>
            <th>Deskripsi obat</th>
            <th>Merk</th>
            </tr>";
        
    while($row = $result->fetch_assoc()) {
        echo   "<tr>";
            echo "<td>" . $row["deskripsi_obat"] . "</td>";  
            echo "<td>" . $row["merk"]. "</td>"; 
        echo "</tr>";

        }
        echo "</table>";

    }else {
        echo "0 results";
    }
    ?>
</body>
</html>