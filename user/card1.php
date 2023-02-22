<?php
    include "bot.php";
?>


<?php
$id=$_GET['id'];

                include ('koneksi.php');
                $query = "SELECT * FROM tambah_data_wisata where id='$id'";
                $select = $conn->query($query);
                $no = 1;
                while ($data = mysqli_fetch_array($select)){
                ?>

                  <div class="card mb-3" style="width: 85rem; height: 38rem;">
                    <div class="row g-0">
                      <div class="col-md-4">
                      <img style="padding: 20px; width: 30rem; height: 20rem; border-radius: 30px;" src="../img/<?php echo $data['gambar']?>" alt="">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body" style="margin-left: 3rem;">
                            <h2 class="card-title"><?php echo $data["Nama_wisata"]?></h2>
                            <h5 class="card-text"><?php echo $data["deskripsi"]?></h5>
                            <h3 class="card-text" style="color: orange;">Rp. <?php echo $data["harga"]?></h3>
                          <div class="text-end mt-5">
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
