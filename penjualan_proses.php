<?php
    include "database.php";

    $sql = "SELECT * FROM data_penjualan";  
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "
            <tr>
            <th>Nama Obat</th>
            <th>Periode</th>
            <th>Jumlah Penjualan</th>
            </tr>";
        
    while($row = $result->fetch_assoc()) {
        echo   "<tr>";
            echo "<td>" . $row["nama_obat"] . "</td>";  
            echo "<td>" . $row["periode"] . "</td>"; 
            echo "<td>" . $row["jumlah_penjualan"] . "</td>"; 
        echo "</tr>";

        }
        echo "</table>";

    }else {
        echo "0 results";
    }
    ?>