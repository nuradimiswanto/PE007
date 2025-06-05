<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>

    <a href="index.php">Home</a>
    <h1>Hitung Luas dan Keliling Lingkaran</h1>

    <form action="lingkaranaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan Jari-jari (r):</td>
                <td><input type="number" name="jari" required step="any" min="0"></td>
            </tr>
            <tr>
                <td>Pilih Perhitungan:</td>
                <td>
                    <input type="radio" name="pilih" value="luas" required> <label>Luas</label><br>
                    <input type="radio" name="pilih" value="keliling"> <label>Keliling</label><br>
                    <input type="radio" name="pilih" value="semua"> <label>Semua</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>

</body>
</html>