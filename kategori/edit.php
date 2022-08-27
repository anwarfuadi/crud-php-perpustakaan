<?php
include('../tools.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_kategori=$_POST['id_kategori'];
    echo $id_kategori;
    $kode=$_POST['kode'];
    $kategori=$_POST['kategori'];


    $sql="update kategori_buku set kode_kategori='$kode', kategori_buku='$kategori' where id_kategori='$id_kategori'";
    updatekategori($sql);

}
