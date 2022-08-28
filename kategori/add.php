<?php
include('../tools.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $kategori=$_POST["kategori"];
    $kode=generateKodeKategori($kategori);

    $sql= "INSERT INTO kategori_buku(kode_kategori,kategori_buku)
    VALUES ('$kode','$kategori')";
    
    insert($sql,"kategori");
}

?>