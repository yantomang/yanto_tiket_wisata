<?php
$id=$_GET['id'];

    include "bot.php";
    include "koneksi.php";
    if(isset($_POST['add'])){
        $nama_pemesan = $_POST['nama_pemesan'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $Tanggal_wisata = $_POST['Tanggal_wisata'];
        $jumlah_tiket = $_POST['jumlah_tiket'];
        $nama_wisata = $_POST['nama_wisata'];
        $harga = $_POST['harga'];
        
        $add = $conn->query("INSERT INTO tb_pemesanan VALUE ('', '$nama_pemesan', '$email', '$no_hp', '$Tanggal_wisata', '$jumlah_tiket', '$nama_wisata', '$harga')");

        if($add){
          header('location:../user/home.php');
        }
    }
?>


<!--- awal navbar -->
<nav class="navbar navbar-expand bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand text-white" href="#"><i class="bi bi-amd"></i> Go Bandung</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="home.php#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="home.php#paket wisata">Paket Wisata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="home.php#Akomodasi">Akomodasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="home.php#galeri">Galeri</a>
        </li>   
        <li class="nav-item">
          <a class="nav-link text-white" href="home.php#about">About</a>
        </li>
      </ul>
    </div>
    <li class="nav-item" style=" margin-left: 30px;">
        <a href="profil.php"><img width="40 rem" height="40 rem"style="border-radius: 50px; margin-left: -30px;" src="../img/bg5.jpg" alt=""></a>
        </li>
  </div>
</nav>

<!--- akhir navbar -->


<body background="../img/bg9.jpg" style="background-repeat: no-repeat; background-size:  100%;">
  
</body>


<!--- awal forms -->
<form action="" method="post" class="container"style=" background: white; width: 500px; padding: 50px; margin-top: 65px;border-radius: 10px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8);">
    <h2 class="text-center">Pesan tiket</h2>
      <img src="../img/<?php echo $data['gambar']?>" alt="" style="width: 25rem; height: 10rem; padding: 10px; border-radius: 20px;">
                  <?php
                    $pesan=$conn->query("select nama_wisata,harga from tambah_data_wisata where id='$id'");
                    $p=$pesan->fetch_array();
                  ?>
                    <h3 name="nama_wisata"><?=$p['nama_wisata'] ?></h3>

                    <h4 name="harga">Rp.<?php echo $p['harga'] ?></h4>
                    
      <div class="mb-2">
          <label for="exampleInputjumlah1" class="form-label">Jumlah tiket</label>
          <input type="number" name="jumlah_tiket" class="form-control border border-secondary" id="exampleInputjumlah1" required>
    </div>
      <div class="mb-2">
          <label for="exampleInputtanggal1" class="form-label">date</label>
          <input type="date" name="Tanggal_wisata" class="form-control border border-secondary" id="exampleInputtanggal1" required>
      </div>
    <div class="text-end" style="margin-top: 30px;">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary text-white"  data-bs-toggle="modal" data-bs-target="#exampleModal">kembali</button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Wisata Bandung</h1>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin ingin membatalkan pemesanan!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">tidak</button>
            <a href="home.php#paket%20wisata"><button type="button" class="btn btn-primary">Ya</button></a>
          </div>
        </div>
      </div>
    </div>
      <a href=""><button name="add" type="submit" class="btn btn-primary text-white">Pesan sekarang</button></a>
</form>
<!--- awal forms -->

