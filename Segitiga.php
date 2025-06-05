<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>

    <a href="index.php">Home</a>
    <h1>Hitung Luas dan Keliling Segitiga</h1>

    <form action="segitigaaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan Alas:</td>
                <td><input type="number" name="alas" required min="0" step="any"></td>
            </tr>
            <tr>
                <td>Masukkan Tinggi:</td>
                <td><input type="number" name="tinggi" required min="0" step="any"></td>
            </tr>
            <tr>
                <td>Masukkan Sisi 1:</td>
                <td><input type="number" name="sisi1" required min="0" step="any"></td>
            </tr>
            <tr>
                <td>Masukkan Sisi 2:</td>
                <td><input type="number" name="sisi2" required min="0" step="any"></td>
            </tr>
            <tr>
                <td>Masukkan Sisi 3:</td>
                <td><input type="number" name="sisi3" required min="0" step="any"></td>
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