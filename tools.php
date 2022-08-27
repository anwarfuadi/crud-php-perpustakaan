<?php
//Include CONFIG

include('config.php');
//fungsi INSERT
function insert($sql,$location) {
    global $conn;
    if ($conn->query($sql)) {
        echo "insert berhasil";
        header("location: http://localhost/crud-php-perpustakaan/".$location);//baru
    } else {
        echo "Insert Error ";
    }
  }
  function insertkategori($sql) {
    global $conn;
    if ($conn->query($sql)) {
        echo "insert berhasil";
        header("location: http://localhost/crud-php-perpustakaan/kategori");//baru
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
function updatekategori($sql) {
    global $conn;
    if ($conn->query($sql)) {
        echo "update berhasil";
        //header("location: http://localhost/crud-php-perpustakaan/kategori");
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

//fungsi SEARCH
function search() {
    //code to be executed;
  }

//fungsi SORT

//fungsi generate kode buku
function generateKodeBuku($nama_buku,$id_kategori,$tahun_buku){
    $nama_awal_buku=$nama_buku[0];
    
    if($id_kategori<10 && $id_kategori>0){
        $id_kategori='0'.$id_kategori;
    }
    //select buku yang tahunnya tahun yang diinput, jika ada lihat nourut terakhir, jika tidak ada angka baru
    $sql="SELECT max(kode_buku) as kode FROM buku where tahun_buku=".$tahun_buku;
    $result=select($sql);
    $no_urutbuku=0;
    if ($result->num_rows > 0) {
        $kode = $result->fetch_assoc();
        //ambil karakter ke 8 dst
        $no_urutbuku=substr($kode['kode'],7);
        $no_urutbuku=str_replace("0","",$no_urutbuku);
        $no_urutbuku++;
        if($no_urutbuku<10){
            $no_urutbuku="000".$no_urutbuku;
        }else if($no_urutbuku>=10&&$no_urutbuku<100){
            $no_urutbuku="00".$no_urutbuku;
        }else if($no_urutbuku>=100&&$no_urutbuku<1000){
            $no_urutbuku="0".$no_urutbuku;
        }
       
    }else{
        $no_urutbuku=0001;
    }
    $kodebuku=$nama_awal_buku.''.$id_kategori.''.$tahun_buku.''.$no_urutbuku;
    echo $kodebuku;
    return $kodebuku;
}
