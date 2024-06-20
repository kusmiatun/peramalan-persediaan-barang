<?php
    include "database.php";
    include "utils.php";

    $nama_obat = $_GET['nama_obat'];
    
    $sql = "SELECT * FROM data_penjualan WHERE nama_obat = '$nama_obat' ORDER BY periode ASC";  
    
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1' style='width: 100%'>";
        echo "
            <tr>
            <th>Nama Obat</th>
            <th>Periode</th>
            <th>Jumlah Penjualan</th>
            <th>Aksi</th>
        </tr>";
        
    while($row = $result->fetch_assoc()) {
        echo   "<tr>";
            echo "<td>" . $row["nama_obat"] . "</td>";  
            echo "<td>" . format_periode($row["periode"]). "</td>"; 
            echo "<td>" . $row["jumlah_penjualan"] . "</td>"; 
            echo "<td>";
            echo '<button onclick="deleteRow(' . $row["id_penjualan"] . ')">Hapus</button>'; 
            echo "</td>";
        echo "</tr>";

        }
        echo "</table>";

    }else {
        echo "0 results";
    }
    ?><script>
function deleteRow(id) {
        // Konfirmasi sebelum menghapus
        if (confirm('Anda yakin ingin menghapus data ini?')) {
            // Redirect ke halaman delete dengan id yang sesuai
            window.location.href = 'delete_penjualan.php?id=' + id;
        }
    }</script>