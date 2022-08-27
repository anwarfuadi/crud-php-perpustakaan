<?php
include('../tools.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id_kategori=$_POST['id_kategori'];
    $kode_kategori=$_POST['kode_kategori'];
    $kategori_buku=$_POST['kategori_buku'];
    $sql="update kategori_buku set kode_kategori='$kode_kategori', kategori_buku='$kategori_buku' where id_kategori='$id_kategori'";
    update($sql,"kategori");
}