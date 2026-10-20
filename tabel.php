<?php
$kecamatan = array("Moyudan", "Minggir", "Seyegan", "Godean", "Gamping");
$luas = array(27.62, 27.27, 27.63, 27.84, 29.25);
$jumlah_penduduk = array(31497, 29886, 47129, 72028, 108675);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Acara 7</title>
</head>
<body>  
    <table border="1">
        <tr>
            <td>Kecamatan</td>
            <td>Luas</td>
            <td>Jumlah_Penduduk</td>
        </tr>
        <?php 
        foreach ($kecamatan as $i => $nama):
        ?>
        </tr>
            <td><?=$nama; ?></td>
            <td><?=$luas[$i];?></td>
            <td><?=$jumlah_penduduk[$i];?></td>
        </tr>
        <?php
        endforeach;
        ?>
    </table>
</body>
</html>