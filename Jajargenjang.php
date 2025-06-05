<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Jajar Genjang</title>
</head>
<body>
    <a href="index.php">Home</a>
    <h1>Hitung Luas dan Keliling Jajar Genjang</h1>

    <form action="jajargenjangaction.php" method="post">
    <table>
        <tr>
            <td>Masukkan alas:</td>
            <td><input type="number" name="alas" required></td>
        </tr>
        <tr>
            <td>Masukkan tinggi:</td>
            <td><input type="number" name="tinggi" required></td>
        </tr>
        <tr>
            <td>Masukkan sisi miring:</td>
            <td><input type="number" name="sisi" required></td>
        </tr>
        <tr>
            <td>Pilih:</td>
            <td>
                <input type="radio" name="pilih" value="luas" required> Luas<br>
                <input type="radio" name="pilih" value="keliling"> Keliling<br>
                <input type="radio" name="pilih" value="semua"> Semua
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Hitung"></td>
        </tr>
    </table>
</form>
