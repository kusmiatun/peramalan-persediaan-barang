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
            $total_mape += $mape;
            $total_wma += $wma;
            $total_selisih += $selisih;
            $list[$index]['wma'] = $wma;
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


<hr style="margin: 36px 0">

<div style="padding: 24px">
    <h1 style="text-align: center; display: block; margin-bottom: 24px">Grafik Data dan Hasil Prediksi WMA</h1>
    <canvas id="acquisitions"></canvas>
</div>


<script src="chart.umd.js"></script>
<script>
    (async function() {
        <?php 
            $periode_list = array_map(function($row) {
                return format_periode($row['periode']);
            }, $list);
            $actual_list = array_column($list, 'jumlah_penjualan');
            $wma_list = array_map(function($row) {
                return $row['wma'] > 0 ? $row['wma'] : null;
            }, $list);
        ?>
        const labels = <?= json_encode([...$periode_list, 'Periode selanjutnya']); ?>;
        const data_aktual = <?= json_encode([...$actual_list, null]); ?>;
        const data_wma = <?php echo json_encode([...$wma_list, $wma_bulan_selanjutnya]); ?>;

        new Chart(
            document.getElementById('acquisitions'),
            {
                type: 'line',
                data:  {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Data aktual',
                            data: data_aktual,
                            fill: false,
                            borderColor: 'rgb(75, 192, 192)',
                            tension: 0.1
                        },
                        {
                            label: 'WMA',
                            data: data_wma,
                            fill: false,
                            borderColor: 'rgb(192, 75, 192)',
                            tension: 0.1
                        }
                    ]
                }
            }
        );
    })();
</script>