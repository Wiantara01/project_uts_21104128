<?php
    
    include_once("koneksidb.php");
    $KodeLukisan = "2134";
    $sql = "DELETE FROM Penjualan_Lukisan WHERE KodeLukisan='$KodeLukisan';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }