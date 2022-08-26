<?php
//Include CONFIG

include('config.php');
//fungsi INSERT
function insert($sql) {
    global $conn;
    if ($conn->query($sql)) {
        echo "insert berhasil";
        header("location: http://localhost/crud-php-perpustakaan/buku");//baru
    } else {
        echo "Insert Error ";
    }
  }

//fungsi SELECT
function select($sql) {
    global $conn;
    $result = $conn->query($sql);
    return $result;
    //return "aa";
 }

//fungsi UPDATE
function update($sql) {
    global $conn;
    if ($conn->query($sql)) {
        echo "update berhasil";
        header("location: http://localhost/crud-php-perpustakaan/buku");
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
function generateKodeBuku($nama_buku,$kategori_buku_split,$tahun){
    $nama_awal_buku=$nama_buku[0];
   /* $sql=SELECT max(kode) as kodeTerbesar FROM barang
    $query = mysqli_query($koneksi, "SELECT max(kode) as kodeTerbesar FROM barang");
    $data = mysqli_fetch_array($query);
    $kodeBarang = $data['kodeTerbesar'];*/
}
