<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert ke tabel penjualan Lukisan</title>
</head>
<body>
    
    <form method="POST" action="Lukisan-insertdataform.php">
        Kode Lukisan <br>
        <input type="text" name="txKodeLukisan"><br>    
        Jumlah Pesanan <br>
        <input type="text" name="txJumlahPesanan"><br>
        Nama Pembeli<br>
        <input type="text" name="txNamaPembeli"><br>
        Ukuran<br>
        <select name="txUkuran">
            <option value="A3"> A3 </option>
            <option value="A4"> A4 </option>
            <option value="A5"> A5 </option>
        </select><br>
        Alamat
        <input type="text" name="txAlamat"><br>
        <br><br>
        <button type=submit> simpan data </button>
    </form>
</body>
</html>