<?php 
    include "bot.php";
    include "koneksi.php";
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_tlp = $_POST['no_tlp'];
        
        $add = $conn->query("INSERT INTO tb_biodata VALUE ('', '$nama', '$email', '$no_tlp')");

        if($add){
          header('location:');
        }
    }

?>

<div class="container mt-5">
<a href="home.php"><i class="bi bi-arrow-left text-dark"></i></a>
    <form  action="" method="post" class="border border-secondary" style="width: 40rem; margin-left: 15rem; padding: 3rem; border-radius: 1rem;">
        <div class="text-center">
        <h5>isi data diri</h5>
        </div>
        <div class="mb-3">
            <label for="exampleInputnama1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control border border-secondary" id="exampleInputnama1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control border border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputno.tlp1" class="form-label">No.tlp</label>
            <input type="text" name="no_tlp" class="form-control border border-secondary" id="exampleInputno.tlp1">
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
        </div>
    </form>
</div>

<div class="container mt-5">
<table class="table">
  <thead>
  <?php
                include ('koneksi.php');
                $query = "SELECT * FROM tb_biodata";
                $select = $conn->query($query);
                $no = 1;
                while ($data = mysqli_fetch_array($select)){
                ?>
        <tr>
        <th scope="row">Nama:</th>
        <td><?php echo $data["username"]?></td>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">Email:</th>
        <td><?php echo $data["email"]?></td>
        </tr>
        <tr>
        <th scope="row">No.tlp:</th>
        <td><?php echo $data["no.tlp"]?></td>
        </tr>
  </tbody>
  <?php
                }
                ?>
</table>
</div>