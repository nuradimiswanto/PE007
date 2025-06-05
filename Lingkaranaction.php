<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Lingkaran</title>
</head>
<body>
    <?php
    $jari = $_POST['jari'];
    $pilih = $_POST['pilih'];
    $phi = 3.14;

    $luas = $phi * $jari * $jari;
    $keliling = 2 * $phi * $jari;
    ?>

    <a href="index.php">Home</a>
    <h1>Lingkaran</h1>
    <table>
        <?php if ($pilih === "keliling") { ?>
            <tr><th>Rumus</th></tr>
            <tr>
                <td>Keliling = 2 × π × r =</td>
                <td><?php echo number_format($keliling, 2); ?></td>
            </tr>
        <?php } else if ($pilih === "luas") { ?>
            <tr>
                <td>Luas = π × r × r =</td>
                <td><?php echo number_format($luas, 2); ?></td>
            </tr>
        <?php } else { ?>
            <tr>
                <td>Luas = π × r × r =</td>
                <td><?php echo number_format($luas, 2); ?></td>
            </tr>
            <tr>
                <td>Keliling = 2 × π × r =</td>
                <td><?php echo number_format($keliling, 2); ?></td>
            </tr>
        <?php } ?>
    </table>

    <img src="luas-lingkaran.png" width="250" height="250" alt="Gambar Lingkaran">
</body>
</html>