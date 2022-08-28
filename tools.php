<?php
//Include CONFIG
include('config.php');

//fungsi INSERT
function insert($sql,$location) {
    global $conn;
    if ($conn->query($sql)) {
        echo "insert berhasil";
        header("location: http://localhost/crud-php-perpustakaan/".$location);
    } else {
        echo "Insert Error ";
    }
  }

//fungsi SELECT
function select($sql) {
    global $conn;
    $result = $conn->query($sql);
    return $result;
 }

//fungsi UPDATE
function update($sql,$location) {
    global $conn;
    if ($conn->query($sql)) {
        echo "update berhasil";
        header("location: http://localhost/crud-php-perpustakaan/".$location);
    } else {
        echo "Update error";
    }
}

//fungsi DELETE
function delete($sql) {
    global $conn;
    if($conn->query($sql)){
        echo "delete berhasil";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        echo "Delete Error";
    }
}

//fungsi generate kode kategori
function generateKodeKategori($kategori){
    $hurufdepan = substr($kategori,0,1);    
    $hurufdepanbesar = strtoupper($hurufdepan);

    $sql = "SELECT count(*) as jml FROM kategori_buku WHERE kategori_buku LIKE '$hurufdepanbesar%'";
    $result = select($sql);
    $data = $result->fetch_assoc();

    $nourut =$data['jml'];
    $nourut++;

    $nourut = sprintf('%03d', $nourut);
    $kodeKategori = $hurufdepanbesar.$nourut;

    return $kodeKategori;
}

//fungsi generate kode buku
function generateKodeBuku($nama_buku,$id_kategori){
    $nama_awal_buku = strtoupper($nama_buku[0]);
    $id_kategori = sprintf('%02d',$id_kategori);

    $tahun = date("Y");
    $sql="SELECT kode_buku FROM buku where kode_buku like '___$tahun%' ORDER BY id_buku DESC LIMIT 1";
    $result=select($sql);
    if ($result) {
        $kode = $result->fetch_assoc();

        $no_urutbuku = (int)substr($kode['kode_buku'],7);
        $no_urutbuku++;
    }else{
        $no_urutbuku=1;
    }
    $no_urutbuku = sprintf('%04d',$no_urutbuku);

    $kodebuku=$nama_awal_buku.$id_kategori.$tahun.$no_urutbuku;

    return $kodebuku;
}