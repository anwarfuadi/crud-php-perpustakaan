<?php
include('../tools.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_buku=$_POST["kode_buku"];
    $id_kategori=$_POST["id_kategori"];
    $nama_buku=$_POST["nama_buku"];
    $isbn=$_POST["isbn"];
    $penerbit=$_POST["penerbit"];

    $sql = "INSERT INTO `buku` (`id_kategori`,`kode_buku`, `nama_buku`, 
    `isbn`,`penerbit`) 
    VALUES ('$id_kategori','$kode_buku','$nama_buku','$isbn','$penerbit')";
    insert($sql);
}

?>