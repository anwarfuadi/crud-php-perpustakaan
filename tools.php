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
    $id_kategori="0".$id_kategori;
    $id_kategori=substr($id_kategori,-2);
    //select buku yang tahunnya tahun yang diinput, jika ada lihat nourut terakhir, jika tidak ada angka baru
    $sql="SELECT kode_buku FROM buku where id_buku=(SELECT max(id_buku) from buku where tahun_buku='$tahun_buku')";
    $result=select($sql);
    $no_urutbuku=0;
    if ($result->num_rows > 0) {
        $kode = $result->fetch_assoc();
        //ambil karakter ke 8 dst
        $no_urutbuku=substr($kode['kode_buku'],7);
        $no_urutbuku=str_replace("0","",$no_urutbuku);
        $no_urutbuku++;
        $no_urutbuku="000".$no_urutbuku;
        $no_urutbuku=substr($no_urutbuku,-4);
       
    }else{
        
        $no_urutbuku="0001";
    }
    $kodebuku=$nama_awal_buku.''.$id_kategori.''.$tahun_buku.''.$no_urutbuku;
    return $kodebuku;
}
