<?php
include "database.php";
include "utils.php";

$nama_obat = $_GET['nama_obat'];

$sql = "SELECT * FROM data_penjualan WHERE nama_obat = '$nama_obat' ORDER BY periode ASC";  

$result = $conn->query($sql);
$list = $result->fetch_all(MYSQLI_ASSOC);
?>

<?php if (count($list) > 0): ?>
    <table border='1' style='width: 100%'>
        <tr>
            <th>Nama Obat</th>
            <th>Periode</th>
            <th>Jumlah Penjualan</th>
            <th>WMA</th>
        </tr>

    <?php foreach($list as $index => $row) : ?>
        <?php 
            if($index == 0 || $index == 1 || $index == 2) {
                $wma = 0;
                $mape = 0;
                $selisih = 0;
            }else{
                $wma = (($list[$index-1]['jumlah_penjualan'] * 3) + ($list[$index-2]['jumlah_penjualan'] * 2) + ($list[$index-3]['jumlah_penjualan'] * 1)) / 6;
                $mape = (abs($row['jumlah_penjualan'] - $wma) / $row['jumlah_penjualan']);
                $selisih = $row["jumlah_penjualan"] - $wma;
            } 
        ?>
        <tr>
            <td><?= $row["nama_obat"] ?></td>  
            <td><?= format_periode($row["periode"]) ?></td> 
            <td align="center"><?= $row["jumlah_penjualan"] ?></td>
            <td align="center"><?= $index == 0 || $index == 1 ? '-' : $wma ?></td>
        </tr>
    <?php endforeach; ?>
    </table>

    <div style="margin-top: 24px; margin-bottom: 24px">
        <?php
        $last_index = count($list) - 1;
        $wma_bulan_selanjutnya = (($list[$last_index]['jumlah_penjualan'] * 3) + ($list[$last_index-1]['jumlah_penjualan'] * 2) + ($list[$last_index-2]['jumlah_penjualan'] * 1)) / 6;
        ?>
        Peramalan untuk periode selanjutnya adalah <?= $wma_bulan_selanjutnya ?>
    </div>

    <div style="text-align: right">
        <a href="mape.php?nama_obat=<?= $nama_obat ?>">Klik akurasi error</a>
    </div>
<?php else: ?>
    0 results
<?php endif; ?>