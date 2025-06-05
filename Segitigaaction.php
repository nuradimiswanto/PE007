<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Segitiga</title>
</head>
<body>
    <?php
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $sisi1 = $_POST['sisi1'];
    $sisi2 = $_POST['sisi2'];
    $sisi3 = $_POST['sisi3'];
    $pilih = $_POST['pilih'];

    $luas = 0.5 * $alas * $tinggi;
    $keliling = $sisi1 + $sisi2 + $sisi3;

    // Validasi segitiga
    $valid = ($sisi1 + $sisi2 > $sisi3) &&
             ($sisi1 + $sisi3 > $sisi2) &&
             ($sisi2 + $sisi3 > $sisi1);
    ?>

    <a href="index.php">Home</a>
    <h1>Segitiga</h1>

    <?php if ($valid): ?>
    <table>
        <?php if ($pilih === "keliling") { ?>
            <tr><th>Rumus</th></tr>
            <tr>
                <td>Keliling = sisi1 + sisi2 + sisi3 =</td>
                <td><?php echo $keliling; ?></td>
            </tr>
        <?php } else if ($pilih === "luas") { ?>
            <tr>
                <td>Luas = ½ × alas × tinggi =</td>
                <td><?php echo $luas; ?></td>
            </tr>
        <?php } else { ?>
            <tr>
                <td>Luas = ½ × alas × tinggi =</td>
                <td><?php echo $luas; ?></td>
            </tr>
            <tr>
                <td>Keliling = sisi1 + sisi2 + sisi3 =</td>
                <td><?php echo $keliling; ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php else: ?>
        <p style="color:red;">❌ Sisi-sisi yang dimasukkan tidak membentuk segitiga yang valid.</p>
    <?php endif; ?>

    <img src="segitiga.jpg" width="300" height="300" alt="Gambar Segitiga">
</body>
</html>