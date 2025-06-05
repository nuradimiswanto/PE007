<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Persegi</title>
</head>
<body>
    <?php
    $sisi = $_POST['sisi'];
    $pilih = $_POST['pilih'];

    $luas = $sisi * $sisi;
    $keliling = 4 * $sisi;
    ?>

    <a href="index.php">Home</a>
    <h1>Persegi</h1>
    <table>
        <?php if ($pilih === "keliling") { ?>
            <tr><th>Rumus</th></tr>
            <tr>
                <td>Keliling = 4 × sisi =</td>
                <td><?php echo $keliling; ?></td>
            </tr>
        <?php } else if ($pilih === "luas") { ?>
            <tr>
                <td>Luas = sisi × sisi =</td>
                <td><?php echo $luas; ?></td>
            </tr>
        <?php } else { ?>
            <tr>
                <td>Luas = sisi × sisi =</td>
                <td><?php echo $luas; ?></td>
            </tr>
            <tr>
                <td>Keliling = 4 × sisi =</td>
                <td><?php echo $keliling; ?></td>
            </tr>
        <?php } ?>
    </table>

    <img src="persegi.jpg" width="300" height="300" alt="Gambar Persegi">
</body>
</html>
