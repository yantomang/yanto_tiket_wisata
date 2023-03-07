<?php
session_start();

echo $_SESSION["id"];
$id=$_GET['id'];

    include "bot.php";
    include "koneksi.php";
    if(isset($_POST['add'])){
        $user_id = $_POST['user_id'];
        $Tanggal_wisata = $_POST['Tanggal_wisata'];
        $jumlah_tiket = $_POST['jumlah_tiket'];
        $harga = $_POST['harga'];
        $wisata_id = $_POST['wisata_id'];
        $hargatotal = $jumlah_tiket*$harga;
        $add = $conn->query("INSERT INTO tb_pemesanan VALUE ('', '$user_id', '$Tanggal_wisata', '$jumlah_tiket', '$wisata_id', '$hargatotal')");

        if($add){
          header('location:../user/home.php');
        }
    }
?>

<body background="../img/bg9.jpg" style="background-repeat: no-repeat; background-size:  100%;">



<?php
      $pesan=$conn->query("select nama_wisata,harga,gambar from tambah_data_wisata where id='$id'");
      $p=$pesan->fetch_array();
  ?>
<!--- awal forms -->
<form action="" method="post" class="container"style=" background: white; width: 500px; padding: 50px; margin-top: 65px;border-radius: 10px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8);">
    <h2 class="text-center">Pesan tiket</h2>
      <img src="../img/<?php echo $p["gambar"]?>" alt="" style="width: 25rem; height: 10rem; padding: 10px; border-radius: 20px;">
                  
                    <h3 name="nama_wisata"><?=$p['nama_wisata'] ?></h3>

                    <h4 name="harga">Rp.<?php echo $p['harga'] ?></h4>
                    
      <div class="mb-2">
          <label for="exampleInputjumlah1" class="form-label">Jumlah tiket</label>
          <input type="number" name="wisata_id" class="form-control border border-secondary" value="<?=$id ?>">
          <input type="number" name="harga" class="form-control border border-secondary" value="<?php echo $p['harga'] ?>">
          <input type="text" name="user_id" class="form-control border border-secondary" value="<?php echo $_SESSION["id"]; ?>">
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
</body>
