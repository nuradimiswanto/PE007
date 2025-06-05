<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>

    <a href="index.php">Home</a>
    <h1>Hitung Luas dan Keliling Trapesium</h1>

    <form action="trapesiumaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan Sisi Atas (a):</td>
                <td><input type="number" name="sisiAtas" required min="0" step="any"></td>
            </tr>
            <tr>
                <td>Masukkan Sisi Bawah (b):</td>
                <td><input type="number" name="sisiBawah" required min="0" step="any"></td>
            </tr>
            <tr>
                <td>Masukkan Tinggi (t):</td>
                <td><input type="number" name="tinggi" required min="0" step="any"></td>
            </tr>
            <tr>
                <td>Masukkan Sisi Miring Kiri:</td>
                <td><input type="number" name="sisiKiri" required min="0" step="any"></td>
            </tr>
            <tr>
                <td>Masukkan Sisi Miring Kanan:</td>
                <td><input type="number" name="sisiKanan" required min="0" step="any"></td>
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