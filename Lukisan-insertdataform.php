<?php
    if(isset($_POST['txKodeLukisan'])){
    include_once ("koneksidb.php");
    $KodeLukisan =$_POST['txKodeLukisan'];
    $JumlahPesanan =$_POST["txJumlahPesanan"];
    $NamaPembeli =$_POST["txNamaPembeli"];
    $Ukuran = $_POST["txUkuran"];
    $Alamat = $_POST["txAlamat"];

    $sql = "INSERT INTO Penjualan_Lukisan(KodeLukisan,JumlahPesanan,NamaPembeli,Ukuran,Alamat) Values('$KodeLukisan','$JumlahPesanan','$NamaPembeli','$Ukuran','$Alamat');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "insert gagal<br>";
    }
}else{
    
    header("location: Lukisan-insertdatapenjualan.php");
    
   // echo '<script>window.location.href="index.php"</script>';
}

