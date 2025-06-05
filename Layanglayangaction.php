<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang-Layang</title>
</head>
<body>
    <?php
    // Ambil data dari form
    $d1 = $_POST['d1'];
    $d2 = $_POST['d2'];
    $sisi1 = $_POST['sisi1'];
    $sisi2 = $_POST['sisi2'];
    $pilih = $_POST['pilih'];

    // Hitung luas dan keliling
    $luas = 0.5 * $d1 * $d2;
    $keliling = 2 * ($sisi1 + $sisi2);
    ?>

    <a href="index.php">Home</a>
    <h1>Layang-Layang</h1>
    <table>
        <?php if ($pilih === "keliling") { ?>
            <tr>
                <th>Rumus</th>
            </tr>
            <tr>
                <td>Keliling = 2 × (sisi pendek + sisi panjang) =</td>
                <td><?php echo $keliling; ?></td>
            </tr>
        <?php } else if ($pilih === "luas") { ?>
            <tr>
                <td>Luas = 0.5 × d1 × d2 =</td>
                <td><?php echo $luas; ?></td>
            </tr>
        <?php } else { ?>
            <tr>
                <td>Luas = 0.5 × d1 × d2 =</td>
                <td><?php echo $luas; ?></td>
            </tr>
            <tr>
                <td>Keliling = 2 × (sisi pendek + sisi panjang) =</td>
                <td><?php echo $keliling; ?></td>
            </tr>
        <?php } ?>
    </table>

    <img src="layang-layang.jpg" width="300" height="300" alt="Gambar Layang-Layang">
</body>
</html>
