<?php
include "bot.php";
include "koneksi.php";
$id = $_GET['id'];
$delete = $conn->query("DELETE FROM table_pesanan WHERE id = '$id'");

if($delete){    
    header('location:index.php?page=pesanan');
    
    
   
}