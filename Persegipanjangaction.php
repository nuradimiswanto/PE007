<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Persegi Panjang</title>
</head>
<body>
    <?php
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $pilih = $_POST['pilih'];

    $luas = $panjang * $lebar;
    $keliling = 2 * ($panjang + $lebar);
    ?>

    <a href="index.php">Home</a>
    <h1>Persegi Panjang</h1>
    <table>
        <?php if ($pilih === "keliling") { ?>
            <tr><th>Rumus</th></tr>
            <tr>
                <td>Keliling = 2 × (panjang + lebar) =</td>
                <td><?php echo $keliling; ?></td>
            </tr>
        <?php } else if ($pilih === "luas") { ?>
            <tr>
                <td>Luas = panjang × lebar =</td>
                <td><?php echo $luas; ?></td>
            </tr>
        <?php } else { ?>
            <tr>
                <td>Luas = panjang × lebar =</td>
                <td><?php echo $luas; ?></td>
            </tr>
            <tr>
                <td>Keliling = 2 × (panjang + lebar) =</td>
                <td><?php echo $keliling; ?></td>
            </tr>
        <?php } ?>
    </table>

    <img src="Persegi-Panjang.jpg" width="300" height="300" alt="Gambar Persegi Panjang">
</body>
</html>