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

<body background="../img/bg9.jpg" style="background-repeat: no-repeat; background-size: 100%;">



<?php
      $pesan=$conn->query("select id, nama_wisata,harga,gambar from tambah_data_wisata where id='$id'");
      $p=$pesan->fetch_array();
  ?>
<!--- awal forms -->
<form action="" method="post" class="container"style=" background: white; width: 500px; padding: 20px; margin-top: 65px;border-radius: 10px; box-shadow: 0 7px 25px rgba(0, 0, 0, 0.8);">
      <img src="../img/<?php echo $p["gambar"]?>" alt="" style="width: 29rem; height: 15rem; padding: 0px; border-radius: 20px;">              
        <div class="mb-0">
          <input type="" name="nama_wisata" class="form-control border border-light" style="font-size: 35px; margin-left: -10px;" value="<?=$p['nama_wisata']?>">
          <input type="hidden" name="user_id" class="form-control border border-light" style="font-size: 35px; margin-left: -10px;" value="<?=$_SESSION["id"]?>">
          <input type="hidden" name="wisata_id" class="form-control border border-light" style="font-size: 35px; margin-left: -10px;" value="<?=$id?>">
        </div>
        <div class="mb-2">
          <input type="" name="harga" class="form-control border border-light" style="font-size: 30px; margin-top: -10px;" value="<?php echo $p['harga']?>">
        </div>   
        <div class="mb-2">
          <label for="exampleInputjumlah1" class="form-label">Jumlah tiket</label>
          <input type="number" name="jumlah_tiket" class="form-control border border-secondary" id="exampleInputjumlah1" required>
        </div>
        <div class="mb-2">
          <label for="exampleInputtanggal1" class="form-label">date</label>
          <input type="date" name="Tanggal_wisata" class="form-control border border-secondary" id="exampleInputtanggal1" required>
        </div>
    <div class="text-end" style="margin-top: 30px;">
    <button type="button" class="btn btn-primary text-white"  data-bs-toggle="modal" data-bs-target="#exampleModal">kembali</button>
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
