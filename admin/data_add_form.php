<?php
    include "bot.php";
    include "koneksi.php";
    if(isset($_POST['add'])){
        $nama = $_POST['nama_wisata'];
        $deskripsi = $_POST['dekripsi'];
        $harga = $_POST['harga'];
        $nama_gambar = $_FILES['gambar']['name'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $sdd = $conn->query("INSERT INTO dambah_data VALUE ('', '$nama', '$deskripsi', '$harga', '$nama_gambar')");

        if($add){
            move_uploaded_file($file_tmp, 'image/'.$nanma_gambar);
            header('location:tambah_data.php');
        }
    }