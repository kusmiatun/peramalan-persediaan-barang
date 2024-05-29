<?php
include "database.php";
include "utils.php";

$nama_obat = $_GET['nama_obat'];

$sql = "SELECT * FROM data_penjualan WHERE nama_obat = '$nama_obat' ORDER BY periode ASC";  

$result = $conn->query($sql);

$list = $result->fetch_all(MYSQLI_ASSOC);

$final_list = $list;
// exclude 2 data pertama untuk peramalan
array_splice($final_list, 0, 2);

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
        <tr>
            <td><?= $row["nama_obat"] ?></td>  
            <td><?= format_periode($row["periode"]) ?></td> 
            <td align="center"><?= $row["jumlah_penjualan"] ?></td>
            <td align="center">
                <?php if($index == 0 || $index == 1): ?>
                    -
                <?php else: ?>
                    <?php $wma = (($list[$index-1]['jumlah_penjualan'] * 2) + ($list[$index-2]['jumlah_penjualan'] * 1)) / 3; ?>
                    <?= $wma ?>
                <?php endif  ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>

    <div style="margin-top: 24px">
        <?php
        $last_index = count($list) - 1;
        $wma_bulan_selanjutnya = (($list[$last_index]['jumlah_penjualan'] * 2) + ($list[$last_index-1]['jumlah_penjualan'] * 1)) / 3;
        ?>
        Peramalan untuk periode selanjutnya adalah <?= $wma_bulan_selanjutnya ?>
    </div>
<?php else: ?>
    0 results
<?php endif; ?>