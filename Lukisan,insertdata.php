<?php
    include_once ("koneksidb.php");
    $KodeLukisan ="2134";
    $JumlahPesanan ="3";
    $NamaPembeli ="Wiantara";
    $Ukuran ="A4";
    $Alamat ="Jalan Raya Denpasar-Gilimanuk";

    $sql = "INSERT INTO Penjualan_Lukisan(KodeLuiksan,JumlahPesanan,NamaPembeli,Ukuran,Alamat) Values('$KodeLukisan','$JumlahPesanan','$NamaPembeli','$Ukuran','$Alamat');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "inser gagal<br>";
    }
