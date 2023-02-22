<?php
    include "bot.php";
    include "koneksi.php";
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $nama_gambar = $_FILES['gambar']['name'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $sdd = $conn->query("INSERT INTO tambah_data_wisata VALUE ('', '$nama', '$deskripsi', '$harga', '$nama_gambar')");

        if($sdd){
            move_uploaded_file($file_tmp, '../img/'.$nama_gambar);
            header('location:index.php?page=tabel' );
        }
    }
?>


<session id="">
    <div class="container" style="margin-top: 85px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8);  border-radius: 10px; margin-left:260px; width:1080px;"><br>
        <h2 class="text-center">Tamabah Data Wisata</h2>
        <form action="" method="post" enctype="multipart/form-data"><br>
            <div class="form-grup">
                <label for="name" class="form-label">Nama :</label>
                <input type="text" name="nama" class="form-control  border border-secondary" placeholder="masukan nama wisata" required>
            </div>
            <div class="form-grup">
                <label for="" class="form-label">Deskripsi :</label>
                <input type="text" name="deskripsi" class="form-control  border border-secondary" placeholder="masukan deskripsi"required>
            </div>

                 <label for="inputPassword5" class="form-label">Harga :</label>
                <input type="" name="harga" id="inputPassword5" class="form-control border border-secondary" required>
                <div id="" class="form-text" style="color: red;">Masukan angkanya saja tanpa Rp ataupun .</div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto :</label>
                <input class="form-control  border border-secondary" type="file" id="formFile" name="gambar" required>
                <div id="" class="form-text" style="color: red;">Ektensi yang di perbolehkan .png|.jpg|.jpeg|.gif</div>
            </div>
            <a href="index.php?page=tabel"><button type="submit" class="btn btn-primary" name="simpan">Simpan</button></a><br><br>
        </form>
    </div>
</session>


