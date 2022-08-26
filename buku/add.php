<?php
include('../tools.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_kategori=$_POST["id_kategori"];
    $nama_buku=$_POST["nama_buku"];
    $isbn=$_POST["isbn"];
    $penerbit=$_POST["penerbit"];
    $tahun_buku=$_POST["tahun_buku"];
    $kode_buku=generateKodeBuku($nama_buku,$id_kategori,$tahun_buku);
    
    $sql = "INSERT INTO buku(id_kategori,kode_buku,nama_buku,isbn,penerbit,tahun_buku) 
    VALUES ('$id_kategori','$kode_buku','$nama_buku','$isbn','$penerbit','$tahun_buku')";
    
    insert($sql);
}

?>