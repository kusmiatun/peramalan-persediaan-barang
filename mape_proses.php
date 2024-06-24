<?php
include "database.php";
include "utils.php";

$nama_obat = $_GET['nama_obat'];

$sql = "SELECT * FROM data_penjualan WHERE nama_obat = '$nama_obat' ORDER BY periode ASC";  

$result = $conn->query($sql);
$list = $result->fetch_all(MYSQLI_ASSOC);
$wma_bulan_selanjutnya = null;
$mape_bulan_selanjutnya = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan <?= htmlspecialchars($nama_obat) ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .table-container {
            margin-top: 24px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="table-container">
            <?php if (count($list) > 0): ?>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nama Obat</th>
                            <th>Periode</th>
                            <th>Jumlah Penjualan</th>
                            <th>WMA</th>
                            <th>Selisih</th>
                            <th>MAPE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total_mape = 0;
                        $total_data = count($list);
                        $total_wma = 0;
                        $total_selisih = 0;
                        ?>
                        <?php foreach($list as $index => $row) : ?>
                            <?php 
                                if ($index < 3) {
                                    $wma = 0;
                                    $mape = 0;
                                    $selisih = 0;
                                } else {
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
                                <td><?= htmlspecialchars($row["nama_obat"]) ?></td>  
                                <td><?= format_periode($row["periode"]) ?></td> 
                                <td align="center"><?= htmlspecialchars($row["jumlah_penjualan"]) ?></td>
                                <td align="center"><?= $index < 3 ? '-' : round($wma, 2) ?></td>
                                <td align="center"><?= $index < 3 ? '-' : round($selisih, 2) ?></td>
                                <td align="center"><?= $index < 3 ? '-' : number_format($mape, 4) ?></td>
                            </tr>
                        <?php endforeach; ?>

                        <tr>
                            <td align="center" colspan="3">Rata-rata</td>
                            <td align="center"><?= round($total_wma / ($total_data - 3), 2) ?></td>
                            <td align="center"><?= round($total_selisih / ($total_data - 3), 2) ?></td>
                            <td align="center"><?= number_format(($total_mape / ($total_data - 3) * 100), 0) ?>%</td>
                        </tr>
                    </tbody>
                </table>
            
                <div class="mt-4">
                    <?php
                    $last_index = count($list) - 1;
                    $wma_bulan_selanjutnya = (($list[$last_index]['jumlah_penjualan'] * 3) + ($list[$last_index-1]['jumlah_penjualan'] * 2) + ($list[$last_index-2]['jumlah_penjualan'] * 1)) / 6;
                    $mape_bulan_selanjutnya = (abs($list[$last_index]['jumlah_penjualan'] - $wma_bulan_selanjutnya) / $list[$last_index]['jumlah_penjualan']);

                    $last_period = $list[$last_index]['periode'];
                    echo "<!-- Debugging: last_period is '$last_period' -->"; // Tambahkan debugging
                    $last_period_date = DateTime::createFromFormat('Y-m', $last_period);

                    if ($last_period_date) {
                        $next_period_date = $last_period_date->modify('+1 month');
                        $next_period = $next_period_date->format('F Y');
                    } else {
                        $date = new DateTime($row["periode"]);
                        $date->modify('+28 day');
                        $next_period =format_periode($date->format('Y-m-d'));
                    }
                    ?>
                    <p class="mb-0">Peramalan untuk <?= htmlspecialchars($next_period) ?> adalah <?= round($wma_bulan_selanjutnya, 2) ?></p>
                </div>
            
            <?php else: ?>
                <p class="text-center">0 results</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
