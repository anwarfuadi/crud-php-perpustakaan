<?php
include('../tools.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $kategori=$_POST["kategori"];
    $hurufdepan = substr($kategori,0,1);    
    $hurufdepanbesar = strtoupper($hurufdepan);
    //echo $hurufdepanbesar;
    $sql1 = "SELECT * FROM kategori_buku WHERE kategori_buku LIKE '$hurufdepanbesar%'";
    $hasil1 = select($sql1);
    $nourut =1;
    while($data=mysqli_fetch_array($hasil1)){
        $nourut++;
    }
    //echo $nourut;
    $nourutfinal1= "00000".$nourut;
    $nourutfinal2=substr($nourutfinal1,-3);
    $nourutfinal3=$hurufdepanbesar."".$nourutfinal2; 
    
    // echo $nourutfinal3;


    

    $sql2 = "INSERT INTO kategori_buku(kode_kategori,kategori_buku) VALUES ('$nourutfinal3','$kategori')";
    
    insertkategori($sql2);
}

?>