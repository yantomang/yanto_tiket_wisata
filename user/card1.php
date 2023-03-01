<?php
    include "bot.php";
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


<?php
$id=$_GET['id'];

                include ('koneksi.php');
                $query = "SELECT * FROM tambah_data_wisata where id='$id'";
                $select = $conn->query($query);
                $no = 1;
                while ($data = mysqli_fetch_array($select)){
                ?>

                  <div class="card mb-3" style="max-width: 85rem; height: 34rem; margin-top: 55px;">
                      <div class="row g-0">
                          <div class="col-md-4">
                            <img src="../img/<?php echo $data['gambar']?>" alt="" style="width: 27rem; height: 20rem; padding: 10px; margin-top: 100px; border-radius: 20px;">
                          </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title" style="margin-top: 6rem;"><?php echo $data["Nama_wisata"]?></h3>
                                    <h5 class="card-text">Rp.<?php echo $data["harga"]?></h5>
                                    <p class="card-text"><small class="text-muted"><?php echo $data["deskripsi"]?>  </small></p>
                                      <div class="text-end">
                                        <a href="home.php#paket%20wisata" class="btn btn-primary" style="margin-top: 12rem;">Kembali</a>
                                        <a href="pesan_tiket.php?id=<?php echo $data['id'] ?> " class="btn btn-primary" style="margin-top: 12rem;">pesan</a>
                                      </div>
                                </div>
                            </div>
                      </div>
                  </div>
                 
                  <?php
                }
                ?>





                          
                          
                          
                          