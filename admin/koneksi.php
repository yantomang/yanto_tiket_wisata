<?php
$servernanme = "localhost:3306";
$username = "root";
$password = "";
$database = "yanto_tiket_wisata";


$conn = new mysqli($servernanme, $username, $password, $database);


if ($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}
?>