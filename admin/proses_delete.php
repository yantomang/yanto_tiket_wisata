<?php
include "bot.php";
include "koneksi.php";
$id = $_GET['id'];
$delete = $conn->query("DELETE FROM tambah_data_wisata WHERE id = '$id'");

if($delete){    
    header('location:index.php?page=tabel');
    
    
   
}
