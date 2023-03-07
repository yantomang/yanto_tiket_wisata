

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
                        <a href="home.php?user=tiket-pesan&id=<?php echo $data['id'] ?> " class="btn btn-primary" style="margin-top: 12rem;">pesan</a>
                      </div>
                </div>
            </div>
      </div>
  </div>
  
  <?php
}
?>





                          
                          
                          
                          