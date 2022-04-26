<?php

    include_once("koneksidb.php");
    $KodeLukisan = "2134";
    $NamaPembeli = "Wayan";
    $sql = "UPDATE Penjualan_Lukisan SET NamaPembeli='$NamaPembeli' WHERE KodeLukisan='$KodeLukisan';";

    $hsl = mysqli_query($cnn,$sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }