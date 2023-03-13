<?php
ob_start ();
    include 'koneksi.php';

    $id = $_GET['id'];
    $edit = $conn->query("SELECT * FROM tambah_data_wisata WHERE id='$id'");

?>



<?php
while($data = mysqli_fetch_array($edit)){
    ?>
   



   <session id="">
    <div class="container" style="margin-top: 85px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8);  border-radius: 10px; margin-left:260px; width:1080px;"><br>
        <h2 class="text-center">Edit Data Wisata</h2>
        <form action="" method="post" enctype="multipart/form-data"><br>
            <div class="form-grup">
                <label for="name" class="form-label">Nama :</label>
                <input type="hidden" name="id" value="<?php echo $data['id']?>">
                <input type="text" name="Nama_wisata" class="form-control" value="<?php echo $data['Nama_wisata']?>">
            </div>
            <div class="form-grup">
                <label for="" class="form-label">Deskripsi :</label>
                <input type="text" name="deskripsi" class="form-control" value="<?php echo $data['deskripsi']?>">
            </div>

                 <label for="inputPassword5" class="form-label">Harga :</label>
                 <input type="text" name="harga" class="form-control" value="<?php echo $data['harga']?>">

                 <label for="formFile" class="form-label">Foto :</label>
                <input type="file" name="gambar" class="form-control" value=""><br>
                <div class="text-end">
           <a href="index.php?page=tabel"><input type="submit" class="btn btn-primary" name="edit" id="edit"></a><br><br>
            </div>
        </form>
    </div>
</session>
   
   
  
 
  
<?php

    }
    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $Nama_wisata = $_POST['Nama_wisata'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $nama_gambar = $_FILES['gambar']['name'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
      
        $update = $conn->query("UPDATE  tambah_data_wisata SET Nama_wisata='$Nama_wisata', deskripsi='$deskripsi', harga='$harga', gambar='$nama_gambar' WHERE id='$id'");
        if($update){
            move_uploaded_file($file_tmp, '../img/'.$nama_gambar);
            header('location:index.php?page=tabel');
            ob_end_flush();
        }
    }



    ?>
   


