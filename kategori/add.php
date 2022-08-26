<?php
include('../tools.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $kode=$_POST["kode"];
    $kategori=$_POST["kategori"];
    
    $sql = "INSERT INTO kategori_buku(kode_kategori,kategori_buku) 
    VALUES ('$kode','$kategori')";
    
    insertkategori($sql);
}

?>