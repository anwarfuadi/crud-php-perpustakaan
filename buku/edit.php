<?php
include('../tools.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id_buku=$_POST['id_buku'];
    $kode_buku=$_POST['kode_buku'];
    $nama_buku=$_POST['nama_buku'];
    $isbn=$_POST['isbn'];
    $penerbit=$_POST['penerbit'];
    $id_kategori=$_POST['id_kategori'];
    $tahun_buku=$_POST['tahun_buku'];
    $sql="update buku set kode_buku='$kode_buku', nama_buku='$nama_buku', isbn='$isbn', penerbit='$penerbit',tahun_buku='$tahun_buku', id_kategori='$id_kategori' where id_buku='$id_buku'";
    update($sql,"buku");
}
