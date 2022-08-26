<?php
$conn = new mysqli("localhost", "root", "", "perpustakaan");

if ($conn->connect_errno) {

    echo die("Failed to connect to MySQL: " . $conn->connect_error);

}

?>