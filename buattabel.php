<?php
include_once("koneksidb.php");
$sql = "CREATE TABLE Penjualan_Lukisan(
    KodeLukisan Varchar(4) PRIMARY KEY,
    JumlahPesanan Varchar(12),
    NamaPembeli Varchar(50),
    Ukuran Varchar(20),
    Alamat Varchar(10)
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "tabel sukses";
}else{
    echo "tabel gagal";
}