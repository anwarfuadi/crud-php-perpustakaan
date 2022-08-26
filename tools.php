<?php
//Include CONFIG

include('config.php');
//fungsi INSERT
function insert() {
    //code to be executed;
  }

//fungsi SELECT
function selectFunction($sql) {
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
