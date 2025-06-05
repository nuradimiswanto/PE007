<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<body>
    <?php
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $sisi = $_POST['sisi'];

    $luas = $alas * $tinggi;
    $keliling = 2 * ($alas + $sisi);
    $pilih = $_POST['pilih'];
    ?>

    <a href="index.php">Home</a>
    <h1>Jajar Genjang</h1>
    <table>
        <?php if($pilih === "keliling"){ ?>
            <tr>
                <th>Rumus</th>
            </tr>
            <tr>
                <td>Keliling = 2 × (alas + sisi miring) =</td>
                <td><?php echo $keliling; ?></td>
            </tr>
        <?php } else if ($pilih === "luas"){ ?>
            <tr>
                <td>Luas = alas × tinggi =</td>
                <td><?php echo $luas; ?></td>
            </tr>
        <?php } else { ?>
            <tr>
                <td>Luas = alas × tinggi =</td>
                <td><?php echo $luas; ?></td>
            </tr>
            <tr>
                <td>Keliling = 2 × (alas + sisi miring) =</td>
                <td><?php echo $keliling; ?></td>
            </tr>
        <?php } ?>
    </table>

    <img src="jajar-genjang.jpg" width="300" height="300" alt="">
</body>
</html>
