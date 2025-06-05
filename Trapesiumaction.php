<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Trapesium</title>
</head>
<body>
    <?php
    $a = $_POST['sisiAtas'];
    $b = $_POST['sisiBawah'];
    $t = $_POST['tinggi'];
    $kiri = $_POST['sisiKiri'];
    $kanan = $_POST['sisiKanan'];
    $pilih = $_POST['pilih'];

    $luas = 0.5 * ($a + $b) * $t;
    $keliling = $a + $b + $kiri + $kanan;
    ?>

    <a href="trapesium.php">Kembali</a>
    <h1>Trapesium</h1>
    <table>
        <?php if ($pilih === "keliling") { ?>
            <tr><th>Rumus</th></tr>
            <tr>
                <td>Keliling = a + b + sisi kiri + sisi kanan =</td>
                <td><?php echo $keliling; ?></td>
            </tr>
        <?php } else if ($pilih === "luas") { ?>
            <tr>
                <td>Luas = ½ × (a + b) × t =</td>
                <td><?php echo $luas; ?></td>
            </tr>
        <?php } else { ?>
            <tr>
                <td>Luas = ½ × (a + b) × t =</td>
                <td><?php echo $luas; ?></td>
            </tr>
            <tr>
                <td>Keliling = a + b + sisi kiri + sisi kanan =</td>
                <td><?php echo $keliling; ?></td>
            </tr>
        <?php } ?>
    </table>

    <br>
    <img src="Trapesium.jpg" width="300" height="200" alt="Gambar Trapesium">
</body>
</html>
