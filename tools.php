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
        echo "Error: ";
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
function update() {
   // code to be executed;
  }

//fungsi DELETE
function delete() {
    //code to be executed;
  }

//fungsi SEARCH
function search() {
    //code to be executed;
  }

//fungsi SORT
